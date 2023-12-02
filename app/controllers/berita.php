<?php

class Berita extends Controller{
    public function cari($id = null){
        header('Content-Type: application/json; charset=utf-8');
        $data = $this->model('BeritaModel')->getAllSearch($id);
        echo json_encode($data);
    }

    public function index($id = null){
		$data['nav-bar-active'] = true;

        if($id === null){
            header('location: '. base_url);
        }

        $data['title'] = 'Halaman Home';

		$data['berita'] = $this->model('BeritaModel')->getById($id);
		$data['komentar'] = $this->model('KomentarModel')->getAllByBerita($id);

        $database = new Database;
        $database->query('SELECT * FROM berita WHERE id != "'. $id .'" AND kategori_id = "'. $data['berita']['kategori_id'] .'" ORDER BY tanggal DESC LIMIT 6');

	    $data['rekomendasi'] = $database->resultSet();

		$this->view('templates/header', $data);
		$this->view('home/berita', $data);
		$this->view('templates/footer', $data);
    }
}