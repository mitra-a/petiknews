<?php

class UserKritikdanSaran extends Controller {
    public $user;

	public function __construct(){
		if(!isset($_SESSION['auth']['id'])){
			header('location: '. base_url . '/');
			exit;
		}
        
        $this->user = $_SESSION['auth'];

        if(!in_array($this->user['role'], ['admin', 'penulis'])){
            header('location: '. base_url . '/');
            exit;
        }
	} 
    
    public function index()
	{
		$data['title'] = 'Halaman Home';

		if(isset($_POST['cari'])){
			$data['kritik'] = $this->model('KritikModel')->getAll($_POST['cari']);
        } else {
			$data['kritik'] = $this->model('KritikModel')->getAll();
        }

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('user/kritik/index', $data);
		$this->view('templates/footer');
	}

    public function hapus($id){
		if( $this->model('KritikModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/userkritikdansaran');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/userkritikdansaran');
			exit;	
		}
	}
}
