<?php

    class Session {

        public static function init(){
            session_start();
        }

        public static function destroy(){
            session_destroy();
            header('Location:login.php');
            exit();
        }

        public static function set($key, $value){
            $_SESSION[$key] = $value;
        }

        public static function get($key){
            if(isset($_SESSION[$key])){
                return $SESSION[$key];
            }else{
                return FALSE;
            }
        }

        public function check(){
            self::init();
            if(self::get('login')==FALSE){
                self::destroy();
            }
        }

        public static function checkLogin(){
            self::init();

            if(self::get('login')==true){
                header('Location:index.php');
                exit();
            }
        }
    }
