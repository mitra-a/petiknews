<?php

class BukuTamuModel {
	private $table = 'buku_tamu';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAll($search = null, $limit = null)
	{
		$query = 'SELECT * FROM ' . $this->table;
		if($search){
			$query .= " WHERE tujuan LIKE '%" . $search . "%' OR nama LIKE '%" . $search . "%'";
		}
        
        if($limit){
            $query .= " LIMIT " . $limit;
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
		$query = "INSERT INTO buku_tamu (nama, email, tujuan, tanggal) VALUES(:nama, :email, :tujuan, :tanggal)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('tujuan',$data['tujuan']);
		$this->db->bind('tanggal', date("Y-m-d H:i"));
        
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