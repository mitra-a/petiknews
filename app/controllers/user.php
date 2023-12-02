<?php

class User extends Controller {
	public $user;

	public function __construct(){
		if(!isset($_SESSION['auth']['id'])){
			header('location: '. base_url . '/');
			exit;
		}
		
		$this->user = $_SESSION['auth']['id'];
	} 
	
    public function index(){
        $data['title'] = 'Halaman Home';

		$database = new Database;

        $database->query('SELECT COUNT(id) as jumlah FROM berita');
	    $data['berita'] = $database->single();

        $database->query('SELECT COUNT(id) as jumlah FROM user WHERE role="penulis"');
	    $data['penulis'] = $database->single();
		
        $database->query('SELECT COUNT(id) as jumlah FROM user WHERE role="user"');
	    $data['user'] = $database->single();

        $database->query('SELECT SUM(jumlah) as jumlah FROM visit');
	    $data['visit'] = $database->single();

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('user/index', $data);
		$this->view('templates/footer');
    }
}