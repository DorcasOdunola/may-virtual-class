<?php
    class Config {
        protected $host = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbName = "virtual_class";
        protected $connectDb = "";
        public $response = [];

        public function __construct () {
            $this->connectDb = new mysqli($this->host, $this->username, $this->password, $this->dbName);
            if ($this->connectDb->connect_error) {
                die("Error Occured". $this->connectDb->connect_error);
            }
        }

        public function create ($query, $binder) {
            $queryDb = $this->connectDb->prepare($query);
            $queryDb->bind_param(...$binder);
            if ($queryDb->execute()) {
                $this->response['success'] = true;
                return $this->response;
            } else {
                $this->response['success'] = false;
                return $this->response;
            }

        }

        public function read ($query, $binder) {
            
        }
        public function readNoBinder ($query) {
            $queryDb = $this->connectDb->prepare($query);
            if ($queryDb->execute()) {
                $result = $queryDb->get_result();
                $this->response['success'] = true;
                $this->response['result'] = $result;
                return $this->response;
            } else {
                $this->response['success'] = false;
                return $this->response;
            }

        }

        public function update () {

        }

        public function delete () {

        }


    }




?>