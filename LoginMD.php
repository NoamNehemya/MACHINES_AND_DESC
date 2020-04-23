<?php ob_start(); ?>
<?php include('server.php');?>

<html lang="en">
  <head>


  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>



    <title>Login Page one</title>

    <style>

    </style>

</head>

<link rel="stylesheet" href="Login.css">

<body>


<div class="sidenav">
         <div class="login-main-text">
            <h1 class="display-4">M&D</h1class="display-4"><br>
            <h5 class="lead">Machines and description.</h5>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">

               <form method="post" action="LoginMD.php">
               <?php include('errors.php'); ?>
                  <div class="form-group">
                     <input type="text" name="email_LoginMD" class="form-control" placeholder="Email" value="<?php echo $email_login; ?>">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password_LoginMD" class="form-control" placeholder="Password" value="<?php echo $password_login; ?>">
                  </div>


                  <p><button type="button"  onclick="location.href='forgotpasswordkey.php';" id="fpassword" class="btn btn-light">Forgot password?</button></p>
                  <br>
                  <button type="submit" name="login_LoginMD" id="Login" class="btn btn-black">Login</button>
                  <button type="button" onclick="location.href='registerPageFinish.php';" id="Register" class="btn btn-secondary">Register</button>
        
               </form>
            </div>
         </div>
      </div>


    </body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>