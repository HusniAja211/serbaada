<?php
require_once __DIR__ . '/../models/KategoriModel.php';

class KategoriController {
    private $model;

    public function __construct() {
        $this->model = new KategoriModel();
    }

    // Tampilkan semua kategori
    public function index() {
        $kategori = $this->model->index();
        require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/pages/kategori.php';
    }

    // Tampilkan form create kategori
    public function create() {
        require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/pages/createKategori.php';
    }

    // Simpan kategori baru
    public function store($data) {
        $nama = trim($data['nama_kategori'] ?? '');
        $deskripsi = trim($data['deskripsi_kategori'] ?? '');

        if (empty($nama) || empty($deskripsi)) {
            return ['error' => 'Nama dan deskripsi tidak boleh kosong.'];
        }

        try {
            $result = $this->model->store($nama, $deskripsi);

            if ($result === true) {
                return ['success' => true];
            } else {
                return ['error' => 'Nama kategori sudah digunakan.'];
            }
        } catch (Exception $e) {
            return ['error' => 'Terjadi kesalahan saat menyimpan: ' . $e->getMessage()];
        }
    }

    public function find($id) {
        return $this->model->find($id);
    }
    
    public function put($id, $data) {
        $nama = trim($data['nama_kategori'] ?? '');
        $deskripsi = trim($data['deskripsi_kategori'] ?? '');

        try {
            return $this->model->put($id, $nama, $deskripsi);
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function delete($id) {
        try {
            return $this->model->delete($id);
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

// Panggil fungsi index() jika tidak ada aksi tertentu
// $controller = new KategoriController();
// $controller->index(); // Memanggil fungsi index() ketika file diakses
