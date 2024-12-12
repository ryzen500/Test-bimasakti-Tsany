<?php
require_once 'BaseApi.php';

class PaymentApi extends BaseApi {


    private function formatDate($waktu)
    {
        $date = DateTime::createFromFormat('YmdHis', $waktu);
        return $date->format('Y-m-d H:i:s');
    }

    public function handleRequest() {
        try {
            // Mendapatkan input
            $input = json_decode(file_get_contents('php://input'), true);
            $idpel = $input['idpel'] ?? null;
            $kodeProduk = $input['kode_produk'] ?? null;

            // Validasi parameter
            if (!$idpel || !$kodeProduk) {
                $this->jsonResponse(['rc' => '01', 'ket' => 'Parameter tidak lengkap'], 400);
            }

            // Pencarian data terakhir dari tabel inquiry_logs berdasarkan idpel dan kode_produk
            $stmt = $this->db->prepare("SELECT ref2, nominal FROM inquiry_logs WHERE idpel = ?  ORDER BY id DESC LIMIT 1");
            $stmt->execute([$idpel]);
            $logData = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$logData) {
                $this->jsonResponse(['rc' => '02', 'ket' => 'Data tidak ditemukan di inquiry_logs'], 404);
            }

            // Ambil ref2 dan nominal dari query sebelumnya
            $ref2 = $logData['ref2'];
            $nominal = $logData['nominal'];

            // Kirim request ke API Rajabiller
            $payload = [
                "method" => "fastpay.pay",
                "uid" => "SP300203",
                "pin" => "893456",
                "idpel1" => $idpel,
                "idpel2" => "",
                "idpel3" => "",
                "kode_produk" => $kodeProduk,
                "ref1" => "testingfullstackdev",
                "nominal" => $nominal,  // Menggunakan nominal dari inquiry_logs
                "ref2" => $ref2,        // Menggunakan ref2 dari inquiry_logs
                "ref3" => "",
            ];

            // Kirim request pembayaran
            $response = $this->sendRequest($payload);

            if($response['keterangan'] == "SUKSES"){
                $formattedDate = $this->formatDate($response['waktu']);

                // echo "<pre>";
                // var_dump($response['pdamname']);die;
            // Simpan ke database
            $stmt = $this->db->prepare("INSERT INTO payment_logs (idpel, nominal, pdamname ,waktu,customername) VALUES (?, ?,?, ?, ?)");
            $stmt->execute([$idpel, $nominal,$response['pdamname'],$formattedDate, $response['customername'] ]);

            }
            // Return response
            $this->jsonResponse($response);
            

        } catch (Exception $e) {
            // Menangkap exception dan mengirimkan response error
            $this->jsonResponse([
                'rc' => '99',
                'ket' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    private function sendRequest($data) {
        try {
            $ch = curl_init('https://c-dev-partnerlink.rajabiller.com/json/index.php');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            $response = curl_exec($ch);
            
            if(curl_errno($ch)) {
                // Menangkap error jika ada kesalahan saat curl
                throw new Exception('Curl error: ' . curl_error($ch));
            }

            curl_close($ch);
            return json_decode($response, true);
        } catch (Exception $e) {
            // Menangkap error saat pengiriman request dan mengirimkan response error
            $this->jsonResponse([
                'rc' => '99',
                'ket' => 'Terjadi kesalahan saat mengirim request: ' . $e->getMessage()
            ], 500);
        }
    }
}

$api = new PaymentApi();
$api->handleRequest();
?>
