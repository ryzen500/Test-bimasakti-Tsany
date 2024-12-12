<?php
require_once 'db.php';

class BaseApi {
    protected $db;

    public function __construct() {
        $this->db = (new Database())->pdo;
    }

    protected function jsonResponse($data, $statusCode = 200) {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        echo json_encode($data);
        exit;
    }
}
?>
