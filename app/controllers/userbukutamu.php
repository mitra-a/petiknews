<?php

class UserBukuTamu extends Controller {
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
			$data['kritik'] = $this->model('BukuTamuModel')->getAll($_POST['cari']);
        } else {
			$data['kritik'] = $this->model('BukuTamuModel')->getAll();
        }

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('user/buku/index', $data);
		$this->view('templates/footer');
	}

    public function hapus($id){
		if( $this->model('BukuTamuModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/userbukutamu');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/userbukutamu');
			exit;	
		}
	}
}
