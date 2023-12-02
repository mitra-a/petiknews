<?php

class KomentarModel {
	private $table = 'komentar';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAll()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllByBerita($id)
	{
		$this->db->query('SELECT komentar.*, user.nama FROM komentar LEFT JOIN user ON user.id = komentar.user_id WHERE berita_id=:id ORDER BY tanggal DESC');
        $this->db->bind('id',$id);
		return $this->db->resultSet();
	}

	public function getById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambah($data)
	{
		$query = "INSERT INTO komentar (user_id, berita_id, tanggal, komentar) VALUES(:user, :berita, :tanggal, :komentar)";
		$this->db->query($query);
		$this->db->bind('user',$data['user']);
		$this->db->bind('berita',$data['berita']);
		$this->db->bind('tanggal', date('Y-m-d H:i'));
		$this->db->bind('komentar',$data['komentar']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function update($data)
	{
		$query = "UPDATE kategori SET nama_kategori=:nama_kategori WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nama_kategori',$data['nama_kategori']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}