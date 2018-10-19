<?php
    //Ove podatke treba citati iz konfiguracionog fajla radi bezbednosti
    function open_conn(){
        $servername = 'localhost';
        $username = 'root';
        $password = 'miko123miko';
        $dbName = 'student';
        $conn = new mysqli($servername,$username,$password,$dbName);
        if($conn->connect_error){
            die('Error '.$conn->connect_error);
        }
        return $conn;
    }

    function close_conn($conn){
        $conn->close();
    }
?>