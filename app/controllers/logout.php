<?php

class Logout extends Controller {
    public function index(){
        unset($_SESSION['auth']);
        header('location: '. base_url . '/');
        exit;
    }
}