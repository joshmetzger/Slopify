<?php

    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateUEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
        }


        private function validateUsername($un) {
            if(strlen($un) > 25 || strlen($un) < 5) {

            }
        }

        private function validateFirstName($fn) {
            
        }

        private function validateLastName($ln) {
            
        }

        private function validateUEmails($em, $em2) {
            
        }

        private function validatePasswords($pw, $pw2) {
            
        }




    }

?>