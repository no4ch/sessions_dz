<?php


  class sessionClass
  {
    public function addValue($key, $value){
      $_SESSION[$key] = $value;
    }

    public function deleteValue($key){
      if(isset($_SESSION[$key])) unset($_SESSION[$key]);
    }

    public function editValue($key, $value){
      if (isset($_SESSION[$key])) $_SESSION[$key] = $value;
    }

    public function destroy(){
      session_destroy();
    }

    public function __construct() {
      session_start();
    }
  }