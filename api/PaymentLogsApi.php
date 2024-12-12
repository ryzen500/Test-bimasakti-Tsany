<?php
require_once 'BaseApi.php';

class PaymentLogsApi extends BaseApi {

    public function handleRequest() {
        try {
            // Mendapatkan input (opsional)
            $input = json_decode(file_get_contents('php://input'), true);
            $idpel = $input['idpel'] ?? null;

            // Membangun query
            $sql = "SELECT * FROM payment_logs";
            $params = [];

            // Filter berdasarkan idpel (opsional)
            if ($idpel) {
                $sql .= " WHERE idpel = ?";
                $params[] = $idpel;
            }

            // Eksekusi query
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            $paymentLogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Cek hasil query
            if (!$paymentLogs) {
                $this->jsonResponse(['rc' => '01', 'ket' => 'Data tidak ditemukan'], 404);
            }

            // Return response dengan data payment_logs
            $this->jsonResponse([
                'rc' => '00', 
                'ket' => 'Data berhasil ditemukan',
                'data' => $paymentLogs
            ]);

        } catch (Exception $e) {
            // Menangkap exception dan mengirimkan response error
            $this->jsonResponse([
                'rc' => '99',
                'ket' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}

$api = new PaymentLogsApi();
$api->handleRequest();
?>