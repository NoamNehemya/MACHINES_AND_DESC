<?php include('server.php');?>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Registration of system</title>

    <style>
       
        .container{
           font-size: 20;
           margin-top: 60px;
           margin-bottom: 60px;
        }

        #inputDetails{

            margin-top: 50px;

        }

        .form-control {

            width: 650px;
            margin-left: 182px;
            margin-top: 20px;
        }

        #explainPassword{

            margin-left: 182px;
        }

        .jumbotron-jumbotron-fluid{

            height: 200px;
            background-color: #E1F3EE;
            margin-bottom: 0px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .form-control-mx-sm-3{

            width: 650px;
            margin-left: 182px;
        }

        #Verification-question{

            margin-left: 182px;

        }

        #Confirm {

            margin-left: 182px;
            width: 650px;
            margin-top: 35px;
            padding-inline-end: 20px;
            margin-block-end: 50px;
        }

        #login{

            width: 100px;
        }

        #titleOFpage{

            margin-top: 20px;
        }

        #db{

          margin-left: 182px;
        }

        #swork{

          margin-left: 182px;
        }

        #login {

          margin-left:1300px;
          margin-top: 20px;
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
					<p><input type="button" onclick = "location.href='LoginMD.php';" id="Login" class="btn btn-dark" value = "Login"/>
                </form>
                </div class="container">
                
            </nav>


            <div class="jumbotron-jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4" id="titleOFpage">Registration of system</h1>
                  <p class="lead">Registration form for M&D system Please fill in the following information.</p>
                </div>
              </div>
    


                    <form method="post" action="registerPageFinish.php" id=inputDetails>
                    <?php include('errors.php'); ?>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>">
                          </div>
                        </div>
                        <br>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>">
                          </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $city; ?>">
                            </div>
                          </div>
                          <br>
                        <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Street" name="street" value="<?php echo $street; ?>">
                            </div>
                          </div>
                          <br>
                        <label id="db">Date Of Birth:</label>
                        <div class="form-row">
                          <div class="col">
                            <input type="date" class="form-control" name="dateofbirth" value="<?php echo $dateofbirth; ?>">
                            </div>
                          </div>
                          <br>
                          <label id="swork">Start of woriking date:</label>
                          <div class="form-row">
                           <input type="date" class="form-control" name="startofworking" value="<?php echo $startofworking; ?>">
                            <div class="col">
                            </div>
                          </div>
                          <br>
                        <div class="form-row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" name="email1" value="<?php echo $email1; ?>">
                            </div>
                        </div>
                          <br>
                        <div class="form-row">
                        <div class="col">
                              <input type="email" class="form-control" placeholder="Confirm Email" name="email2" value="<?php echo $email2; ?>">
                            </div>
                        </div>
                          <br>
                        <div class="form-group">
                            <input type="password" id="inputPassword6" class="form-control-mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Password" name="password1">
                            <small id="passwordHelpInline" class="text-muted">
                            <p id=explainPassword>Must be 8-20 characters long.</p>
                             </small>
                        </div>
        
                        <div class="form-group">
                            <input type="password" id="inputPassword6" class="form-control-mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Confirm Password" name="password2">
                            <small id="passwordHelpInline" class="text-muted">
                             </small>
                        </div>
        
                        <br>
        
                        <div class="form-group">
                            <p id=Verification-question>Verification question</p>
                            <select class="form-control" id="exampleFormControlSelect1" placeholder="Verification question" name="question" value="<?php echo $question; ?>">
                              <option>What is your first teacher's name?</option>
                              <option>What is your pet's name?</option>
                              <option>What is the name of your elementary school?</option>
                            </select>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Your Answer" name="answer" value="<?php echo $answer; ?>">
                                </div>
                              </div>
                          </div>
                          <button type="submit" name="create" id="Confirm"class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;">Submit</button>
                          <br>
        
                          
                      </form>



            


            



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>