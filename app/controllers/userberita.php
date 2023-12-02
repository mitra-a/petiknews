<?php

class UserBerita extends Controller {
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

        $user = $this->user['role'] == 'penulis' ? $this->user['id'] : null;
        if(isset($_POST['cari'])){
            $data['berita'] = $this->model('BeritaModel')->getAllWithUser($_POST['cari'], $user);
        } else {
            $data['berita'] = $this->model('BeritaModel')->getAllWithUser(null, $user);
        }

		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('user/berita/index', $data);
		$this->view('templates/footer');
	}
    
    public function tambah(){
        if($_POST){
            $this->validate([
                'judul' => '*',
                'teras_berita' => '*',
                'konten' => '*',
                'tanggal' => '*',
                'kategori' => '*',
            ]);

            $gambar = new File($_FILES['gambar'], 'gambar-berita/');
            $_POST["gambar"] = $gambar->get();
            $_POST["user_id"] = $this->user['id'];
            if( $this->model('BeritaModel')->tambah($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                Flasher::removeMessageOld();
                header('location: '. base_url . '/userberita/');
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/userberita/tambah');
                exit;	
            }
        }

        $data['title'] = 'Halaman Home';
    
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('user/berita/create', $data);
		$this->view('templates/footer');
        $this->view('templates/summernote', $data);
    }

    public function status($id){
        if($_POST){
            $berita = $this->model('BeritaModel')->getById($id);

            if($berita){
                $_POST["id"] = $id;
                $_POST["headline"] = (int) $berita['headline'] ? 0 : 1;
    
                if( $this->model('BeritaModel')->updateStatus($_POST) > 0 ) {
                    Flasher::setMessage('Berhasil','ditambahkan','success');
                    header('location: '. base_url . '/userberita');
                    exit;			
                }else{
                    Flasher::setMessage('Gagal','ditambahkan','danger');
                    header('location: '. base_url . '/userberita');
                    exit;
                }
            }
        }

        Flasher::setMessage('Gagal','ditambahkan','danger');
        header('location: '. base_url . '/userberita');
        exit;	
    }
    
    public function edit($id){
        $berita = $this->model('BeritaModel')->getById($id);

        if($_POST){
            if(isset($_FILES["gambar"]["name"])){
                if($_FILES["gambar"]["name"]){
                    if($berita) File::delete($berita["gambar"]);
                    
                    $gambar = new File($_FILES['gambar'], 'gambar-berita/');
                    $_POST["gambar"] = $gambar->get();
                }
            }
            
            $_POST["id"] = $id;
            if( $this->model('BeritaModel')->update($_POST) > 0 ) {
                Flasher::setMessage('Berhasil','ditambahkan','success');
                header('location: '. base_url . '/userberita');
                exit;			
            }else{
                Flasher::setMessage('Gagal','ditambahkan','danger');
                header('location: '. base_url . '/userberita/edit');
                exit;	
            }
        }

        $data['title'] = 'Halaman Home';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('user/berita/edit', $berita);
		$this->view('templates/footer');
        $this->view('templates/summernote', $data);
    }

    public function hapus($id){
        $berita = $this->model('BeritaModel')->getById($id);
        if($berita) File::delete($berita["gambar"]);

		if( $this->model('BeritaModel')->delete($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/userberita');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/userberita');
			exit;
		}
	}
	
}
