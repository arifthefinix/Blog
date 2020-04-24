<?php

    class pageContent{

        public function getIndexHeader(){
            require_once('inc/index_header.php');
        }

        public function getFooter(){
            require_once('inc/footer.php');
        }

        public function getContent($content){
            require_once 'inc/'.$content.'.php';
        }

    }
