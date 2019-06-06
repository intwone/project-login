<?php
require 'config.php';

if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $password1 = MD5(addslashes($_POST['password1']));
    $password2 = MD5(addslashes($_POST['password2']));
    $date = date("d/m/Y H:i");
    

    if($password1 == $password2) {
        $sql = "INSERT INTO db_users (dbu_name, dbu_email, dbu_password, dbu_date) 
                VALUES (:addname, :addemail, :addpassword, :adddate)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':addname', $name);
        $sql->bindValue(':addemail', $email);
        $sql->bindValue(':addpassword', $password1);
        $sql->bindValue(':adddate', $date);
        $sql->execute();

        echo '<div class="alert alert-success" role="alert">';
        echo 'Register successfully!';
        echo '</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Wrong password';
        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
        <meta charset="uft-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="bootstrap.min.css" />
        <link rel="stylesheet" href="style-createaccount.css" /> 
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
    </head>
    <body>
        <div class="limiter">
            <div class="container">
                <section class="flex">
                    <div class="sector-right"></div>
                    <div class="sector-left">
                        <form method="POST" class="forms">
                            <div class="form-group form-body">
                                <div class="title-register">
                                    <h4>Registration Form</h4>
                                </div>
                                
                                <?php
                                /*
                                if(MD5(addslashes($_POST['password1'])) == MD5(addslashes($_POST['password2']))) {
                                    echo '<div class="alert alert-sucess" role="alert">';
                                    echo 'Register successfully!';
                                    echo '</div>';
                                } else {
                                    echo '<div class="alert alert-danger" role="alert">';
                                    echo 'Wrong password!';
                                    echo '</div>';
                                }
                                */
                                ?>

                                <div class="form-content form-group">
                                    <input type="text" name="name" class="form-control inputtest" id="input" placeholder="Full Name"/>
                                </div>

                                <div class="form-content form-group">
                                    <input type="text" name="email" class="form-control inputtest" id="input" placeholder="Your Email"/>
                                </div>

                                <div class="form-content form-group">
                                    <input type="password" name="password1" class="form-control inputtest" id="input" placeholder="Password"/>
                                </div>

                                <div class="form-content form-group">
                                    <input type="password" name="password2" class="form-control inputtest" id="input" placeholder="Confirm Password"/>
                                </div>

                                <div class="form-content-agree">
                                    <div>
                                        <input type="checkbox"> 
                                    </div>

                                    <div class="text-term">
                                        <span>By signing up, you agree to the </br> <a href="">Play terms of Service</a> </span>
                                    </div>
                                    
                                </div>
                                <div class="form-content-button">
                                    <button class="btn btn-success btn-sm b1" type="submit">REGISTER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>