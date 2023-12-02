<?php

class Register extends Controller {
    public function index(){
        if($_POST){
            $this->validate([
                'email' => '*',
                'nama' => '*',
                'password' => '*',
                'password_ulang' => '*',
            ]);

            if($_POST['password'] != $_POST['password_ulang']){
                Flasher::setValidateKey('passowrd', 'password tidak sama dengan password ulang');
                header('location: '. base_url . '/');
                exit;
            }

            $_POST['role'] = 'user';
            if( $this->model('UserModel')->tambah($_POST) > 0 ) {
                $_SESSION['auth'] = $this->model('UserModel')->getByEmailPassword($_POST['email'], $_POST['password']);
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/');
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/');
                exit;	
            }
        }
        
		$this->view('home/register');
        exit;	
    }
}