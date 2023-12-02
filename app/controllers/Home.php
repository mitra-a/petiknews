<?php

class Home extends Controller {
	public function index($id)
	{
		$data['nav-bar-active'] = true;

		if($id == ""){
			$this->model('VisitModel')->tambah();
			$data['title'] = 'Halaman Home';
			
			$data['headline'] = $this->model('BeritaModel')->getAllHeadline();
			$id_headline = array_column($data['headline'], 'id');
			$data['berita'] = $this->model('BeritaModel')->getAllLimit(12, $id_headline);
			
			$this->view('templates/header', $data);
			$this->view('home/index', $data);
			$this->view('templates/footer', $data);
			exit;
        }
		
		$data['title'] = 'Halaman Home';
		if($id == "selengkapnya"){
			$data['berita'] = $this->model('BeritaModel')->getAll();
		} else {
			$data['berita'] = $this->model('BeritaModel')->getAllByKategoriName($id);
		}

		$data['kategori_name'] = $id;
		$this->view('templates/header', $data);
		$this->view('home/kategori', $data);
		$this->view('templates/footer', $data);
	}
}