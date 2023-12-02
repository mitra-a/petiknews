<?php

class Kategori extends Controller {
    public function index(){
        $data['title'] = 'Halaman Home';

		$this->view('templates/header', $data);
		$this->view('home/kategori', $data);
		$this->view('templates/footer', $data);
    }
}