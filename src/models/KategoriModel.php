<?php
require_once __DIR__ . '/../database/connection.php';

class KategoriModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Method index: ambil semua data kategori
    public function index() {
        $sql = "SELECT * FROM kategori";
        $result = $this->db->query($sql);
        $data = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Cek apakah nama kategori sudah ada
    private function existsByName($nama_kategori, $excludeId = null) {
        $sql = "SELECT id_kategori FROM kategori WHERE nama_kategori = ?";
        if ($excludeId !== null) {
            $sql .= " AND id_kategori != ?";
        }

        $stmt = $this->db->prepare($sql);

        if ($excludeId !== null) {
            $stmt->bind_param("si", $nama_kategori, $excludeId);
        } else {
            $stmt->bind_param("s", $nama_kategori);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }

    // Ambil satu data berdasarkan ID
    public function find($id_kategori) {
        $sql = "SELECT * FROM kategori WHERE id_kategori = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id_kategori); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Tambah data kategori baru
    public function store($nama_kategori, $deskripsi_kategori) {
        if ($this->existsByName($nama_kategori)) {
            return false; // Sudah ada data dengan nama yang sama
        }

        $sql = "INSERT INTO kategori (nama_kategori, deskripsi_kategori) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ss", $nama_kategori, $deskripsi_kategori); 
        return $stmt->execute();
    }

    // Update data kategori berdasarkan ID
    public function put($id_kategori, $nama_kategori, $deskripsi_kategori) {
        if ($this->existsByName($nama_kategori, $id_kategori)) {
            return false; // Nama sudah digunakan oleh ID lain
        }

        $sql = "UPDATE kategori SET nama_kategori = ?, deskripsi_kategori = ?, updated_at = CURRENT_TIMESTAMP WHERE id_kategori = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssi", $nama_kategori, $deskripsi_kategori, $id_kategori);
        return $stmt->execute();
    }

    // Hapus data berdasarkan ID
    public function delete($id_kategori) {
        $sql = "DELETE FROM kategori WHERE id_kategori = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id_kategori);
        return $stmt->execute();
    }
}
