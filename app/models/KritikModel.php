<?php

class KritikModel {
	private $table = 'kritik';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAll($search = null)
	{
		$query = 'SELECT * FROM ' . $this->table;
		if($search){
			$query .= " WHERE komentar LIKE '%" . $search . "%' OR nama LIKE '%" . $search . "%'";
		}
		$this->db->query($query);
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
		$query = "INSERT INTO kritik (nama, email, komentar, tanggal) VALUES(:nama, :email, :komentar, :tanggal)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('komentar',$data['kritik']);
		$this->db->bind('tanggal', date("Y-m-d H:i"));
        
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