<?php
@include "config.php";
session_start();

if(isset($_POST['submit'])){

    $name =mysqli_real_escape_string($connect, $_POST['name']);
    $pass =md5($_POST['password']);
   
$select = " SELECT * FROM user_form WHERE Name='$name' && Password='$pass' ";

$result= mysqli_query($connect, $select);

    if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_row($result);
    $_SESSION['user_id']=$row['id'];
    header('location:index.php');
    }
    else{
        $error[]="Incorrect user!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skydasd|Login</title>
    <link rel="stylesheet" href="styleREG.css" />
    <link rel="icon" href="img/site-icon.webp" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="content">
            <form method="post">
                <div class="logo_box">
                    <img src="img/siteLogo.svg" alt="#" />
                </div>
                <div class="introduction_cont">
                    <h3>Hello! let's get started</h3>
                    <p>Sign in to continue.</p>
                    <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<div class="error_msg">', $error,'</div> ';
                            }
                        }
                    ?>
                </div>

                <div class="reg_input_cont">
                    <input name="name" type="text" placeholder="Username" class="username_inpt" />
                    <input name="password" type="password" placeholder="Password" class="password_inpt" />
                </div>

                <div class="submit_cont">
                    <button name="submit">SIGN IN</button>
                    <div class="logincheckbox_box">
                        <div>
                            <input class="checkbox" type="checkbox" />
                            <p>Keep me signed in</p>
                        </div>
                        <div>
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                    <button class="submit_fcb" style="background-color: #7da0fa; margin: 0">
                        <i class="fa fa-facebook"></i>
                        <p>Connect using facebook</p>
                    </button>
                    <p class="have_acc">
                        Don't have an account? <a href="register.php">Create</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>