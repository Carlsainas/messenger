<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, fit-to-shrink=no">


    <!-- <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/signup.css">

    <script src=assets/js/jquery-3.3.1.min.js> </script> 
    <script src="assets/js/file-label.js"></script>
    <script src= "assets/js/register.js"></script>

</head>

<body>
<?php 
if(isset($_POST['register-btn'])){
    echo '<script>
    $(document).ready(function(){
        $("#loginForm").hide();
        $("#registerForm").show();
    })
    </script>';
}else{
    echo '<script>
    $(document).ready(function(){
        $("#loginForm").show();
        $("#registerForm").hide();
    })
    </script>';
}

?>



<div id="background">
    <div class="account-left">
        <div class="account-text">
            <h1>Start chatting immediately</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum, laudantium eius deleniti
                illo ipsam. Corrupti temporibus consequatur repellendus, non tempore pariatur numquam perferendis
                ullam suscipit ea molestias eveniet quis.</p>
        </div>
    </div>
    <div class="account-right">
        <div class="form-area">
            <form action = "login.php" method = "POST" id ="loginForm">
                <h1>Login to your account</h1>
                <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter your email">
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Enter your password">
                </div>
                <div class="group">
                    <input type="submit" name="login-btn" class="btn-create-account btn-primary"
                        value="login Account">
                </div>
                <div class="group">
                    <a href="signup.php" class="hideLogin">Don't have an account? Sign up here</a>
                </div>
            </form>  


            <form action="login.php" method="POST" id ="registerForm">
                <h1 class="create-account-header">Create your free account here</h1>
                <div class="group">
                    <input type="text" name="full-name" class="control" placeholder="Enter your full name">
                </div>
                <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter your email">
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Create your password">
                </div>
                <div class="group">
                    <label for="file" id="file-label"><img src="assets/icons/uploadCloud.png"
                            class="uploadCloud">Choose image</label>
                    <input type="file" name="img" class="file" id="file">
                </div>
                <div class="group">
                    <input type="submit" name="register-btn" class="btn-create-account btn-primary"
                        value="Create Account">
                </div>
                <div class="group">
                    <a href="signup.php" class="hideRegister">Already have an Account?</a>
                </div>
            </form>
        </div>
    </div>
</div>

    



    
</body>

</html>