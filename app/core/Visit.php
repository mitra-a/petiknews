<?php

class Visit{
    public static function get()
    {
		$db = new Database;
        $db->query('SELECT SUM(jumlah) as jumlah FROM visit WHERE tanggal="'. date("Y-m-d") .'"');
		$data['hari'] = $db->single();

        $db->query('SELECT SUM(jumlah) as jumlah FROM visit WHERE MONTH(tanggal)="'. date("m") .'" AND YEAR(tanggal)="' . date("Y") . '"');
		$data['bulan'] = $db->single();

        $db->query('SELECT SUM(jumlah) as jumlah FROM visit WHERE YEAR(tanggal)="'. date("Y") .'"');
		$data['tahun'] = $db->single();

        $db->query('SELECT SUM(jumlah) as jumlah FROM visit');
		$data['semua'] = $db->single();

        return $data;
    }
}