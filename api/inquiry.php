<?php
require_once 'BaseApi.php';

class InquiryApi extends BaseApi
{
    const API_URL = 'https://c-dev-partnerlink.rajabiller.com/json/index.php';
    const USER_ID = 'SP300203';
    const PIN = '893456';
    const REFERENCE = 'testingfullstackdev';

    public function handleRequest()
    {
        $input = json_decode(file_get_contents('php://input'), true);
        $idpel = $input['idpel'] ?? null;
        $kodeProduk = $input['kode_produk'] ?? null;

        // Validasi input
        if ($this->isValidInput($idpel, $kodeProduk)) {
            $response = $this->sendRequest($this->createPayload($idpel, $kodeProduk));

            // Proses response
            if ($this->isSuccess($response)) {
                $formattedDate = $this->formatDate($response['waktu']);
                $payload_database = $this->prepareDatabasePayload($response, $idpel, $formattedDate);
                // var_dump($payload_database);die;

                $this->saveToDatabase($payload_database);
            }
            $this->jsonResponse($response);
        } else {
            $this->jsonResponse(['rc' => '01', 'ket' => 'ID Pelanggan atau Kode Produk tidak ditemukan'], 400);
        }
    }

    private function isValidInput($idpel, $kodeProduk)
    {
        return $idpel && $kodeProduk;
    }

    private function createPayload($idpel, $kodeProduk)
    {
        return [
            "method" => "fastpay.inq",
            "uid" => self::USER_ID,
            "pin" => self::PIN,
            "idpel1" => $idpel,
            "idpel2" => "",
            "idpel3" => "",
            "kode_produk" => $kodeProduk,
            "ref1" => self::REFERENCE
        ];
    }

    private function isSuccess($response)
    {
        return isset($response['keterangan']) && $response['keterangan'] === "SUKSES";
    }

    private function formatDate($waktu)
    {
        $date = DateTime::createFromFormat('YmdHis', $waktu);
        return $date->format('Y-m-d H:i:s');
    }

    private function prepareDatabasePayload($response, $idpel, $formattedDate)
    {
        $fields = [
             'waktu', 'ref2', 'pdamname', 'nominal','customername', 'customeraddress',
            'monthperiod1', 'yearperiod1', 'firstmeterread1', 'lastmeterread1', 'billamount1', 'penalty1', 'miscamount1',
            'monthperiod2', 'yearperiod2', 'firstmeterread2', 'lastmeterread2', 'billamount2', 'penalty2', 'miscamount2',
            'monthperiod3', 'yearperiod3', 'firstmeterread3', 'lastmeterread3', 'billamount3', 'penalty3', 'miscamount3',
            'monthperiod4', 'yearperiod4', 'firstmeterread4', 'lastmeterread4', 'billamount4', 'penalty4', 'miscamount4',
            'monthperiod5', 'yearperiod5', 'firstmeterread5', 'lastmeterread5', 'billamount5', 'penalty5', 'miscamount5',
            'monthperiod6', 'yearperiod6', 'firstmeterread6', 'lastmeterread6', 'billamount6', 'penalty6', 'miscamount6',
        ];

        $payload = ['idpel' => $idpel, 'waktu' => $formattedDate, 'ref2' => $response['ref2']];
        foreach ($fields as $field) {
            $payload[$field] = $response[$field] ?? null;
        }

        // var_dump($payload);die;

        return $payload;
    }

    private function saveToDatabase($payload)
    {
        try {
            // Persiapkan query SQL
            $sql = "INSERT INTO inquiry_logs (" . implode(',', array_keys($payload)) . ") VALUES ("
                . implode(',', array_fill(0, count($payload), '?')) . ")";
            $stmt = $this->db->prepare($sql);
    
            // Debugging output
            // echo "<pre>";
            // var_dump($payload); die;
    
            // Eksekusi query dengan nilai parameter
            $stmt->execute(array_values($payload));
        } catch (PDOException $e) {
            // Menangkap kesalahan pada query dan menampilkan pesan error
            $this->jsonResponse([
                'rc' => '02', 
                'ket' => 'Gagal menyimpan data ke database', 
                'error' => $e->getMessage()
            ], 500);
        } catch (Exception $e) {
            // Menangkap kesalahan umum dan menampilkan pesan error
            $this->jsonResponse([
                'rc' => '03',
                'ket' => 'Terjadi kesalahan yang tidak terduga',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    

    private function sendRequest($data)
    {
        $ch = curl_init(self::API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}

$api = new InquiryApi();
$api->handleRequest();
