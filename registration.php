<?php
    require('model/student.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $firstname = $lastname = $email = $username = $pass = $r_pass = '';
        if(isset($_POST['firstname'])){
            $firstname = $_POST['firstname'];
        }
        if(isset($_POST['lastname'])){
            $lastname = ($_POST['lastname']);
        }
        if(isset($_POST['email'])){
            $email = ($_POST['email']);
        }
        if(isset($_POST['username'])){
            $username = ($_POST['username']);
        }
        if(isset($_POST['pass'])){
            $pass = ($_POST['pass']);
        }
        if(isset($_POST['r_pass'])){
            $r_pass = ($_POST['r_pass']);
        }
        // echo $firstname.' '.$lastname.' '.$email.' '.$username.' '.$pass.' '.$r_pass.' ';
        $student = new Student($username,$pass,$firstname,$lastname,$email);
        echo $student->toString();
        register($username,$pass,$firstname,$lastname,$email);
    }else{
        header('Location: http://localhost/student_app');
    }

?>