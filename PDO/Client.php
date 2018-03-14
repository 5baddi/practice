<?php

    class Client{
        public $id;
        public $firstName;
        public $lastName;

        public function display(){
            echo "id: {$this->id}\nfirst name: {$this->firstName}\nlast name: {$this->lastName}";
        }
    }

?>