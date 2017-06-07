<?php

if (isset($_POST['submit'])) {
    include("../view/loginpage/config.php");
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = ['role'];
    $_SESSION['login_user'] = $username;
    $query = mysqli_query($db, "SELECT username FROM users WHERE username='$username', role='$role' and password='$password'");
    if (mysqli_num_rows($query) != 0) {
        echo "<script type='text/javascript'>alert('You will be redirected')</script>";
        //header("Location:" . URL . "home/index");
    } else {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }

        if (isset($role)) {
            if ($role == 'teacher')
            {
                header("Location:" . URL . "teacher_panel/index");
            } else {
                $_SESSION['student'] = true;
                header("Location: home/index");
            }
        }
    }
var_dump($role);
?>