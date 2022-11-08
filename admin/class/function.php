<?php

    class adminBlog{
        private $conn;

        public function __construct()
        {
            #host
            #user
            #pass
            #name

            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname ='blogproject';

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if (!$this->conn){
                die("Could not connect to the database");
            }

        }
    }

?>