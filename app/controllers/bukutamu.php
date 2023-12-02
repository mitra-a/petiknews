<?php

class BukuTamu extends Controller {
    public function index(){
        if($_POST){
            $this->validate([
                'email' => '*',
                'nama' => '*',
                'tujuan' => '*',
            ]);

            if( $this->model('BukuTamuModel')->tambah($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/bukutamu');
                exit;
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/bukutamu');
                exit;	
            }
        }

		$data['buku'] = $this->model('BukuTamuModel')->getAll(null, 5);
		$this->view('templates/header');
		$this->view('home/buku', $data);
		$this->view('templates/footer');
        exit;	
    }
}