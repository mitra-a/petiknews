<?php

class Controller{
	public function view($view, $data = [])
	{
		require_once '../app/views/' . $view . '.php';
	}

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}

	public function validate($array){
		$error = [];

		foreach($_POST as $key => $item){
			Flasher::setOld($key , $item);
		}

		foreach($array as $key => $item){
			if($item == '*'){
				if(empty($_POST[$key])){
					$error[$key] = str_replace("_", " ", $key) . ' wajib diisi';
				}
			} 
		}

		if($error){
			Flasher::setValidate($error);
			header('location: '. $_SERVER['HTTP_REFERER']);
			exit;
		}
	}
}