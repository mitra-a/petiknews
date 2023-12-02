<?php

class File {
    public $file;
    public $filepath;

    public function __construct($file, $filepath)
    {
        $this->file = $file;
        $name = $file['name']; 
        $expfile = explode('.',$name);
        $fileexptype = $expfile[1];
        date_default_timezone_set('Australia/Melbourne');

        $date = date('m/d/Yh:i:sa', time());
        $rand = rand(10000,99999);
        $encname = $date . $rand;
        $filename = md5($encname).'.'.$fileexptype;
        $filepath = $filepath. "/" . $filename;
        move_uploaded_file($file["tmp_name"],$filepath);
        $this->filepath = $filepath;
    }

    public static function delete($path){
        unlink($path);
    }

    public function get(){
        return $this->filepath;
    }
}