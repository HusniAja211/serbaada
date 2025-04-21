<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'serbaada';

    public $conn;

    public function __construct() {
        // Membuat koneksi ke database menggunakan MySQLi
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        // Mengecek apakah koneksi berhasil
        if ($this->conn->connect_error) {
            die('Connection failed: ' . $this->conn->connect_error);
        }
    }

    // Menjalankan query biasa
    public function query($sql) {
        return $this->conn->query($sql);
    }

    // Menggunakan prepared statements untuk query yang lebih aman
    public function prepare($sql) {
        return $this->conn->prepare($sql);
    }

    // Escape data untuk mencegah SQL injection
    public function escape($value) {
        return $this->conn->real_escape_string($value);
    }

    // Menutup koneksi
    public function close() {
        $this->conn->close();
    }
}
?>
