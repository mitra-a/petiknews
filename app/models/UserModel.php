<?php

class UserModel {
	private $table = 'user';
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

	public function getAllPenulis($search = null)
	{
		$query = 'SELECT * FROM user WHERE role=:role';
		if($search){
			$query .= " AND nama LIKE '%" . $search . "%'";
		}

		$this->db->query($query);
		$this->db->bind('role', 'penulis');
		return $this->db->resultSet();
	}

	public function getByEmailPassword($email, $password)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email AND password=:password');
		$this->db->bind('email',$email);
		$this->db->bind('password', md5($password));
		return $this->db->single();
	}

	public function getById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambah($data)
	{
		$query = "INSERT INTO user (nama, email, password, role) VALUES(:nama, :email, :password, :role)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('password', md5($data['password']));
		$this->db->bind('role',$data['role']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updatePassword($data)
	{
		$query = "UPDATE user SET password=:password WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('password', md5($data['password']));
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function update($data)
	{
		$query = "UPDATE user SET nama=:nama, deskripsi=:deskripsi WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('deskripsi',$data['deskripsi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function delete($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		$this->db->query('DELETE FROM berita WHERE user_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		$this->db->query('DELETE FROM komentar WHERE user_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}