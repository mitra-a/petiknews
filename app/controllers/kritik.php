<?php

class Kritik extends Controller {
    public function index(){
        if($_POST){
            $this->validate([
                'email' => '*',
                'nama' => '*',
                'kritik' => '*',
            ]);

            if( $this->model('KritikModel')->tambah($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/');
                exit;
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/');
                exit;	
            }
        }
        
		$this->view('templates/header');
		$this->view('home/kritikdansaran');
		$this->view('templates/footer');
        exit;	
    }
}