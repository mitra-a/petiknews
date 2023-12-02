<?php

class BeritaModel {
	private $table = 'berita';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllLimit($id, $array = null)
	{
		$query = 'SELECT * FROM ' . $this->table;
		
		if($array) {
			$query .= ' WHERE id NOT IN (';
			foreach($array as $index => $item){
				$query .= $item;
				$query .= ($index + 1) != count($array) ? ',' : ''; 					 
			}
			$query .= ')';
		}

		$query .= ' LIMIT ' . $id;
		
		$this->db->query($query);
		return $this->db->resultSet();
	}

	public function getAll()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllHeadline()
	{
		$this->db->query('SELECT berita.*, kategori.kategori FROM ' . $this->table .' LEFT JOIN kategori ON kategori.id = berita.kategori_id WHERE headline=1 ');
		return $this->db->resultSet();
	}

	public function getAllSearch($search)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE judul LIKE CONCAT("%", :search, "%")');
		$this->db->bind('search', $search);
		return $this->db->resultSet();
	}

	public function getAllByKategoriName($id)
	{
		$this->db->query('SELECT * FROM kategori WHERE kategori = :id');
		$this->db->bind('id',$id);
		$data = $this->db->single();

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori_id = :id');
		$this->db->bind('id', isset($data['id']) ? $data['id'] : '');
		return $this->db->resultSet();
	}

	public function getAllWithUser($search = null, $penulis = null)
	{
		$query = 'SELECT berita.*, user.nama FROM berita LEFT JOIN user ON berita.user_id = user.id';
		$query .= $search || $penulis ? ' WHERE ' : '';

		if($search){
			$query .= " judul LIKE '%" . $search . "%'";
		}

		if($penulis){
			$query .= $search ? " AND " : "";
			$query .= " user_id = " . $penulis;
		}
		
		$this->db->query($query);
		return $this->db->resultSet();
	}

	public function getById($id)
	{
		$this->db->query('SELECT berita.*, user.nama, kategori.kategori FROM berita LEFT JOIN user ON berita.user_id = user.id LEFT JOIN kategori ON berita.kategori_id = kategori.id WHERE berita.id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambah($data)
	{
		$query = "INSERT INTO Berita (judul, teras_berita, headline, konten, tanggal, kategori_id, gambar, user_id) 
            VALUES(:judul, :teras_berita, :headline, :konten, :tanggal, :kategori_id, :gambar, :user_id)";
		
        $this->db->query($query);
        $this->db->bind('judul',$data['judul']);
        $this->db->bind('teras_berita',$data['teras_berita']);
        $this->db->bind('headline', '0');
        $this->db->bind('konten',$data['konten']);
        $this->db->bind('tanggal',$data['tanggal']);
        $this->db->bind('kategori_id',(int) $data['kategori']);
        $this->db->bind('gambar',$data['gambar']);
        $this->db->bind('user_id',$data['user_id']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function updateStatus($data){
		$query = "UPDATE Berita SET headline=:headline WHERE id=:id";
        
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('headline',$data['headline']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function update($data)
	{
		$query = "UPDATE Berita SET judul=:judul, teras_berita=:teras_berita, konten=:konten, tanggal=:tanggal, kategori_id=:kategori_id";
        
        if(isset($data['gambar'])) $query .= ",gambar=:gambar";
        $query .= " WHERE id=:id";
        $this->db->query($query);
        
        if(isset($data['gambar'])) $this->db->bind('gambar',$data['gambar']);
		$this->db->bind('id',$data['id']);
        $this->db->bind('judul',$data['judul']);
        $this->db->bind('teras_berita',$data['teras_berita']);
        $this->db->bind('konten',$data['konten']);
        $this->db->bind('tanggal',$data['tanggal']);
        $this->db->bind('kategori_id',(int) $data['kategori']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		$this->db->query('DELETE FROM komentar WHERE berita_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}