<?php
    require('db.php');
    class Student{
        private $username;
        private $password;
        private $firstname;
        private $lastname;
        private $email;

        public function __construct($username,$password){
            $this->username = $username;
            $this->password = $password;
        }
        public function getUsername(){
            return $this->username;
        }
        public function setUsername($username){
            $this->username = $username;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function getFirstname(){
            return $this->firstname;
        }
        public function setFirstname($firstname){
            $this->firstname = $firstname;
        }

        public function getLastname(){
            return $this->lastname;
        }
        public function setLastname($lastname){
            $this->lastname = $lastname;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function toString(){
            return $this->getUsername().' '.$this->getPassword();
        }
    }

    function logIn($username,$password){
        $conn = open_conn();
        $sql = 'SELECT * from student WHERE username="'.$username. '" and password="'.$password.'"';
        $result = $conn->query($sql);
        if($result->num_rows == 0){
            return null;
        }
        $row = $result->fetch_assoc();
        return new Student($row["username"],$row["password"]);
        close_conn($conn);
    }

    function register($username,$pass,$firstname,$lastname,$email){
        $conn = open_conn();
        $sql = 'INSERT INTO student (username,password,firstname,lastname,email) VALUES ("'.$username.'","'.$pass.'","'.$firstname.'","'.$lastname.'","'.$email.'")';
        $result = $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
        close_conn($conn);
    }


?>