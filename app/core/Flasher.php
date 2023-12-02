<?php

class Flasher{
    public static function setMessage($pesan, $aksi, $type)
    {
        $_SESSION['msg'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'type'  => $type
        ];   
    }

    public static function Message(){
        if( isset($_SESSION['msg']) )
        {
            echo '<div class="alert alert-'. $_SESSION['msg']['type'] .' alert-dismissible fade show" role="alert">
                    Data <strong>'. $_SESSION['msg']['pesan'] .'</strong> '. $_SESSION['msg']['aksi'] .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';

            unset($_SESSION['msg']);
        }
    }

    public static function setOld($key, $error){
        $_SESSION['old'][$key] = $error;
    }

    public static function MessageOld($key){
        if(!isset($_SESSION['old'])) return;
        if( isset($_SESSION['old'][$key]) ){
            return $_SESSION['old'][$key];
        }
    }

    public static function removeMessageOld(){
        unset($_SESSION['old']);
    }

    public static function setValidateKey($key, $error){
        $_SESSION['validate'][$key] = $error;
    }

    public static function setValidate($error){
        $_SESSION['validate'] = $error;
    }

    public static function MessageValidate(){
        if( isset($_SESSION['validate']) )
        {
            $text = "<div class='alert border-warning bg-white alert-dismissible fade show'>";
            $text .= "<ul class='mb-0'>";
            
            foreach($_SESSION['validate'] as $item){
                $text .= "<li>" . $item . "</li>";
            }
            
            $text .= "</ul>";

            $text .= '<button type="button text-dark" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>';
            $text .= "</div>";

            echo $text;
            unset($_SESSION['validate']);
        }
    }
}