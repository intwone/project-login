<?php
require 'config.php';
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
                        <form method="POST" class="forms" enctype="multipart/form-data" action="receive.php"; >
                            <div class="form-group form-body">
                                <div class="title-register">
                                    <h4>Registration Form</h4>
                                </div>
                                
                                <?php
                                
                                if(isset($_POST['name']) && !empty($_POST['name'])) {
                                    $name = addslashes($_POST['name']);
                                    $email = addslashes($_POST['email']);
                                    $password1 = MD5(addslashes($_POST['password1']));
                                    $password2 = MD5(addslashes($_POST['password2']));
                                
                                    if($password1 == $password2 && !empty($name) && !empty($email)) {
                                        $sql = "INSERT INTO db_users (dbu_name, dbu_email, dbu_password, dbu_date) 
                                                VALUES (:addname, :addemail, :addpassword, NOW())";

                                        $sql = $pdo->prepare($sql);
                                        $sql->bindValue(':addname', $name);
                                        $sql->bindValue(':addemail', $email);
                                        $sql->bindValue(':addpassword', $password1);
                                        $sql->execute();
                                
                                        echo '<div class="alert alert-success" role="alert">';
                                        echo 'Register successfully!';
                                        echo '</div>';
                                    } else {
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo 'Passwords are divergent!';
                                        echo '</div>'; 
                                    }
                                }

                                ?>  

                                <div class="send-file">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary b2" type="submit" id="inputGroupFileAddon03">Upload</button>
                                        </div>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                            <label class="custom-file-label" for="inputGroupFile03"><div class="choose-text">Choose an image for your avatar.</div></label>
                                        </div>
                                    </div>
                                </div>

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
                                    <input type="password" name="password2" class="form-control inputtest" maxlength="8" id="input" placeholder="Confirm Password"/>
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