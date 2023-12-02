<?php

class Komentar extends Controller {
    public $user;

	public function __construct(){
		if(!isset($_SESSION['auth']['id'])){
			header('location: '. base_url . '/');
			exit;
		}
		
		$this->user = $_SESSION['auth']['id'];
	} 

    public function index($berita){
        if($_POST){
            $this->validate([
                'komentar' => '*',
            ]);
            
            $_POST['berita'] = $berita;
            $_POST['user'] = $this->user;

            if( $this->model('KomentarModel')->tambah($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/berita/' . $berita);
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/berita/' . $berita);
                exit;	
            }
        }
        
        header('location: '. base_url . '/');
        exit;	
    }
}