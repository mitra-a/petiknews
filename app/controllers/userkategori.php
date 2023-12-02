<?php

class UserKategori extends Controller {
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
            $data['kategori'] = $this->model('KategoriModel')->getAll($_POST['cari']);
        } else {
            $data['kategori'] = $this->model('KategoriModel')->getAll();
        }

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('user/kategori/index', $data);
		$this->view('templates/footer');
	}
    
    public function tambah(){
        if($_POST){	
            $this->validate([
                'kategori' => '*',
            ]);

            if( $this->model('KategoriModel')->tambah($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/userkategori');
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/userkategori/edit');
                exit;	
            }
        }

        $data['title'] = 'Halaman Home';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('user/kategori/create', $data);
		$this->view('templates/footer');
    }

    public function edit($id){
        $kategori = $this->model('KategoriModel')->getById($id);

        if($_POST){
            $this->validate([
                'kategori' => '*',
            ]);

            $_POST['id'] = $id;
            if( $this->model('KategoriModel')->update($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/userkategori');
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/userkategori');
                exit;	
            }
        }

        $data['title'] = 'Halaman Home';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('user/kategori/edit', $kategori);
		$this->view('templates/footer');
    }

    public function hapus($id){
		if( $this->model('KategoriModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/userkategori');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/userkategori');
			exit;	
		}
	}
}
