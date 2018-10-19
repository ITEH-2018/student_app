<?php
    session_start();
    session_destroy();
    //Zakomentarisano radi testiranja
    // if(!isset($_SESSION['student'])){
    //     session_destroy();
    // }else{
    //     header('Location: http://localhost/student_app/home.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student App</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="row">
        <div class="column">
            <h1 id="title">student.rs</h1>
            <img id="home_img" src="img/home_student.png" alt="">
        </div>
        <div class="column">
            <div id="login_and_registration">
                <form id="login" method="POST" action="<?php echo htmlspecialchars("/student_app/login.php");?>">
                    <input id="username" name="username" class="login_reg_fields" type="text" placeholder="Korisničko ime">
                    <input id="password"  name="password" class="login_reg_fields" type="password" placeholder="Šifa">
                    <input id="submit_login" type="submit" value="Prijavi me"> 
                </form>
                <hr id="hr_log_reg">
                <form id="registration" method="POST" action="<?php echo htmlspecialchars("/student_app/registration.php");?>">
                    <input id="firstname" name="firstname" class="login_reg_fields" type="text" placeholder="Ime"><br>
                    <input id="lastname" name="lastname" class="login_reg_fields" type="text" placeholder="Prezime"><br>
                    <input id="email" name="email" class="login_reg_fields" type="text" placeholder="Elektronska pošta"><br>
                    <input id="username" name="username" class="login_reg_fields" type="text" placeholder="Korisničko ime"><br>
                    <input id="pass"  name="pass" class="login_reg_fields" type="password" placeholder="Šifra"><br>
                    <input id="r_pass"  name="r_pass" class="login_reg_fields" type="password" placeholder="Ponovite šifru"><br>
                    <input id="submit_reg" type="submit" value="Registruj me"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>