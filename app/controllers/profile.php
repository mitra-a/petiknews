<?php

class Profile extends Controller {
    public $user;

	public function __construct(){
		if(!isset($_SESSION['auth']['id'])){
			header('location: '. base_url . '/');
			exit;
		}
		
		$this->user = $_SESSION['auth']['id'];
	}

    public function index(){
        $data['user'] = $this->model('UserModel')->getById($this->user);
        if($_POST){
            $this->validate([
                'nama' => '*',
                'deskripsi' => '*',
            ]);
            
            $_POST['id'] = $this->user;

            if($_POST['password']){
                if(md5($_POST['password']) != $data['user']['password']){
                    Flasher::setValidateKey('passowrd', 'password yang anda masukan salah');
                    header('location: '. base_url . '/profile');
                    exit;
                }
    
                $_POST['password'] = $_POST['password_baru'];
                $this->model('UserModel')->updatePassword($_POST);
            }

            $_POST['role'] = 'user';
            if( $this->model('UserModel')->update($_POST) > 0 ) {
                $_SESSION['auth'] = $this->model('UserModel')->getById($this->user);
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/profile');
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/profile');
                exit;	
            }
        }

        $data['title'] = 'Halaman Home';
        
        $this->view('templates/header', $data);
        $this->view('home/profile', $data);
        $this->view('templates/footer', $data);
    }
}