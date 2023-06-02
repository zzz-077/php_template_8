<?php
@include "config.php";

if(isset($_POST['submit'])){

    $name =mysqli_real_escape_string($connect, $_POST['name']);
    $email =mysqli_real_escape_string($connect, $_POST['email']);
    $country = $_POST['country'];
    $pass =md5($_POST['password']);
   
$select = " SELECT * FROM `user_form` WHERE Name='$name' && Password='$pass' ";

$result= mysqli_query($connect, $select);

    if(mysqli_num_rows($result)>0){
        $error[]="User already exist!";
    }
    else{
        if($pass<5){
            $error[]="Minimum password character is 6!";
        }
    else{
        $insert="INSERT INTO user_form(Name, Email,Country, Password) VALUES('$name','$email','$country','$pass')";
        mysqli_query($connect, $insert);
        header('location:login.php');
    }
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skydasd|Register</title>
    <link rel="stylesheet" href="styleREG.css" />
    <link rel="icon" href="img/site-icon.webp" />
</head>

<body>
    <div class="container">
        <div class="content">
            <form method="post">
                <div class="logo_box">
                    <img src="img/siteLogo.svg" alt="#" />
                </div>
                <div class="introduction_cont">
                    <h3>New here</h3>
                    <p>Signing up is easy. It only takes a few steps</p>
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
                    <input name="email" type="email" placeholder="Email" class="Email_inpt" />
                    <br />
                    <select name="country" class="Country">
                        <option>Country</option>
                        <option>United States of America</option>
                        <option>United Kingdom</option>
                        <option>Germany</option>
                        <option>Georgia</option>
                        <option>Argentina</option>
                    </select>
                    <br />
                    <input name="password" type="password" placeholder="Password" class="password_inpt" />
                </div>
                <div class="submit_cont">
                    <div class="checkbox_box">
                        <input class="checkbox" type="checkbox" />
                        <p>I agree to all Terms & Conditions</p>
                    </div>

                    <button name="submit">SIGN UP</button>
                    <p class="have_acc">
                        Already have an account? <a href="login.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>