<?php

class Login extends Controller {
    public function index(){
        if($_POST){
            $this->validate([
                'email' => '*',
                'password' => '*',
            ]);
            
            $auth = $this->model('UserModel')->getByEmailPassword($_POST['email'], $_POST['password']);

            if($auth){
                $_SESSION['auth'] = $auth;
                header('location: '. base_url . '/');
                exit;
            }

            Flasher::setValidateKey('login-failer', 'Login gagal! password atau email salah');
            header('location: '. base_url . '/');
            exit;

        }

		$this->view('home/login');
        exit;
    }
}