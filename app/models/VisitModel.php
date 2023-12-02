<?php

class VisitModel {
	private $table = 'visit';
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

	public function tambah()
	{
        $tanggal = date("Y-m-d");
        $check = "SELECT * FROM visit WHERE tanggal='" . $tanggal . "'";
        $this->db->query($check);
        $check = $this->db->single();
        
        if($check){
            $query = "UPDATE visit SET jumlah=:jumlah WHERE tanggal=:tanggal";   
            $this->db->query($query);
            
            $this->db->bind('tanggal', $tanggal);
            $this->db->bind('jumlah', ((int) $check['jumlah']) + 1);
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            $query = "INSERT INTO visit (tanggal, jumlah) VALUES (:tanggal, :jumlah)";   
            $this->db->query($query);
            $this->db->bind('tanggal', date('Y-m-d'));
            $this->db->bind('jumlah', 1);

            $this->db->execute();
            return $this->db->rowCount();
        }
	}
}