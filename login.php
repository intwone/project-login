<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
        <meta charset="uft-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="bootstrap.min.css" />
        <link rel="stylesheet" href="style-login.css" /> 
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
    </head>
    <body>
        <div class="limiter">
            <div class="login-all">
                <div class="login-head">
                    <h5 class="login-page"><strong>LOGIN PAGE</strong></h5>
                </div>

                <div class="login-body">
                    <div class="form-body">
                        <form method="POST">
                            <div class="form-input">
                                <input type="text" class="placeholder-area" id="placeholder-area" placeholder="user">
                            </div>

                            <div class="form-input">
                                <input type="password" class="placeholder-area" id="placeholder-area" placeholder="password">
                            </div>

                            <div class="form-input">
                                <div class="text">
                                    <span>Forgot</span> <a href="">Username / Password</a>
                                </div>
                            </div>

                            <div class="form-input">
                                <button class="btn btn-success btn-sm b1" type="submit">SIGN IN</button>
                            </div>
                        </form>
                    </div>

                    <div class="creat-account">
                        <span>Don't have an account?</span>
                    </div>

                    <div class="signup-account">
                        <a href="create-account.php">SIGN UP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>