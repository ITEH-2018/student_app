<?php
    require("model/student.php");
    $username = $password = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $student = logIn($username,$password);
        echo $student->getUsername().'PRE SER';
        if($student!=null){
           session_start();
           $_SESSION['student'] = serialize($student);
           header('Location: http://localhost/student_app/home.php');
        }
    }else{
        header("Location: http://localhost/student_app");
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>