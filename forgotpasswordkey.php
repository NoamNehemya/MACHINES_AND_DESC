<?php ob_start(); ?>
<?php include('server.php');?>



<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Choose Bilding in Factory Area</title>

    <style>

    #inputDetailsForResetPass{

        margin-left:  210px;
        margin-top: 30px;

    }

    .form-control {

        width: 650px;
        margin-left:20px;
        margin-top: 2px;
    }
        .container{
           font-size: 20;
           margin-top: 60px;
           margin-bottom: 60px;
        }

       

        .jumbotron-jumbotron-fluid{

            height: 200px;
            background-color: #E1F3EE;
            margin-bottom: 0px;
            padding-top: 5px;
            padding-bottom: 20px;


        }

        .form-control-mx-sm-3{

            width: 650px;
            margin-left: 182px;
        }

       
        #Confirm {

            margin-left: 20px;
            width: 650px;
            margin-top: 35px;
            padding-inline-end: 20px;
            margin-block-end: 50px;

        }

        #login{

            width: 100px;
        }


        #login {

          margin-left:1300px;
          margin-top: 20px;
        }

        #Verification-question {
            
            margin-left: 20px;
        }

        #Uemail{

            margin-left: 20px;
        }

        #imagelock{

            margin-right: 50px;
            margin-left: 200px;
            margin-top: 50px;

            
        }

       
       

    
    </style>


  </head>


  <body>

    
                <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color:#669999; color: white; text-decoration-color: white;">
                <a class="navbar-brand" href="#">M&D</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <form class="form-inline my-2 my-lg-0">
					<p><input type="button" onclick="location.href='LoginMD.php';" id="Login" class="btn btn-dark" value = "Login"/>
                </form>
                </div class="container">
                
            </nav>


            <div class="jumbotron-jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4" id="titleOFpage">Forgot your password?</h1>
                  <p class="lead">Please complete the following information for password reset.</p>
                </div>
              </div>

              <div class="row">
                <div class="column">

                    <form method="post" action="forgotpasswordkey.php" id=inputDetailsForResetPass>
                       <?php include('errors.php'); ?>
                        <div class="form-row">
                            <div class="col">
                                <label id="Uemail">Your Email:</label>
                                <input type="email" name="email_forgot" class="form-control" placeholder="Email" value="<?php echo $email_forgot; ?>">
                                </div>
                            </div>
                              <br>
                              <br>
        
        
                        <div class="form-group">
                            <label for="Verification-question"  id="Verification-question">Verification question:</label>
                            <select class="form-control" id="exampleFormControlSelect1" placeholder="Verification question" name="Verification_question_forgot" value="<?php echo $Verification_question_forgot; ?>">
                              <option>What is your first teacher's name?</option>
                              <option>What is your pet's name?</option>
                              <option>What is the name of your elementary school?</option>
                            </select>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                  <input type="text" name="answer_forgot" class="form-control" placeholder="Your Answer" value="<?php echo $answer_forgot; ?>">
                                </div>
                              </div>
                          </div>
        
                          <button type="submit" name="submit_Forgot" id="Confirm" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;">Submit</button>
                        </form>
                        </div>
                        <div class="column">
        

                    </div>
                <div class="column" id="imageLock">
                        <img src="http://www.up2me.co.il/imgs/43417744.jpg" alt="" style="width:400px">
                </div>
            </div>

      


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>