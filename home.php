<?php

    include('model/student.php');
    session_start();
    $student = unserialize($_SESSION['student']);
    echo 'WELCOME ' . $student->getUsername();
?>