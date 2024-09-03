<?php
require 'connection.php';
// if(!empty($_SESSION["reg"])){
//     header("location:inst.php");
//   }
if(isset($_POST['login'])){
        $user = $_POST['user'];
        $user1 = $_POST['user1'];
        $res = mysqli_query($con,"SELECT * FROM ictnta5 WHERE registration_number ='$user'");
        $row = mysqli_fetch_assoc($res);
        if(mysqli_num_rows($res) > 0){
            if($user1==$row["id"]){
            $_SESSION['login'] = true;
            $_SESSION['reg'] = $row['registration_number'];
            header("location:inst.php");


    }
        else{
            echo "<script> alert('wrong id or reg no');</script>";

    }
}
    else{
        echo "<script> alert('You are not recorgnized, before login you need to register first');</script>";
        
    }
  
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: montserrat;
            height: 100vh;
            background: gold;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            height: 550px;
            transform: translate(-50%, -50%);
            width: 360px;
            background: white;
            border-radius: 10px;
        }
        .center h1{
            text-align: center;
            padding: 0 0 0 20px 0;

        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .txt_field{
            position: relative;
            border-bottom: 2px solid #addaad;
            margin: 30px 0;
        }
        .txt_field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;

        }
        .txt_field label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #addaad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .txt_field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #2691d9;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
            top: -5px;
            color: #2691d9;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
            width: 100%;

        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            background: #2691d9;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;

        }
        input[type="submit"]:hover{
            background: lime;
            transition: .5s;

        }
        .sign_up{
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #666666;
        }
        .sign_up a{
            text-decoration: none;
        }
        .sign_up a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Login</h1><br>
        <img src="pic2.png" width="280px" height="180px" style="margin-left: 70px; margin-top: -34px;">
        <form action="" method="post">
            <div class="txt_field">
                <input type="text" name="user" id="user" required value="">
                <span></span>
                <label>Registration number</label>

            </div>
            <div class="txt_field">
                <input type="password" name="user1" id="user1" required value="">
                <span></span>
                <label>Password</label>

            </div>
            <input type="submit" value="login" name="login">
            <div class="Sign_up">
                Forgot password? <a href="signup.php">Sign up</a>

            </div>
        </form>

    </div>
    
</body>
</html>