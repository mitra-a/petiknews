<?php

class GetKategori{
    public static function get()
    {
		$db = new Database;
        $db->query('SELECT * FROM kategori');
		return $db->resultSet();
    }
}