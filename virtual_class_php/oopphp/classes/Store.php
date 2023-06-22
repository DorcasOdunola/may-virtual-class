<?php
    require "Config.php";

    class Store extends Config {
        public function __construct() {
           parent::__construct();
        }

        public function saveStore ($name, $address, $email, $phone_number, $hashedPassword) {
           $query = "INSERT INTO store (`name`, `address`, `email`, `phone_number`, `password`) VALUES (?, ?, ?, ?, ?)";
           $binder = array('sssss', $name, $address, $email, $phone_number, $hashedPassword); 
           return $this->create($query, $binder);
        }

        public function getAllStore () {
            $query = "SELECT * FROM store";
            return $this->readNoBinder($query);
        }

        public function getStore () {

        }

        public function deleteStore () {

        }

        public function updateStore() {

        }
    }






?>