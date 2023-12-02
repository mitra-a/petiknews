<?php

class KategoriModel {
	private $table = 'kategori';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAll($search = null)
	{
		$query = 'SELECT * FROM ' . $this->table;
		if($search){
			$query .= " WHERE kategori LIKE '%" . $search . "%'";
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
		$query = "INSERT INTO kategori (kategori, slug) VALUES(:kategori, :slug)";
		$this->db->query($query);
		$this->db->bind('kategori',$data['kategori']);
		$this->db->bind('slug',$data['kategori']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function update($data)
	{
		$query = "UPDATE kategori SET kategori=:kategori WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('kategori',$data['kategori']);
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