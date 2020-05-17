<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Choose Bilding in Factory Area</title>

    <style>
  
    </style>


  </head>

  <link rel="stylesheet" href="MapOfBuilding.css">

  <body>

    
                <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color:#669999; color: white; text-decoration-color: white;">
                <a class="navbar-brand" href="#">M&D</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <form class="form-inline my-2 my-lg-0">
				<p><input type="button" onclick="location.href='LoginMD.php';" id="login" class="btn btn-dark" value = "Log Out"/>
                </form>
                </div class="container">
            </nav>


            <div class="jumbotron-jumbotron-fluid">
                <div class="container">
                <div class="form-group row">
                <div class="col1">
                  <h1 class="display-4" id="titleOFpage">Factory Map</h1></br><p class="lead">Select the desired structure in the factory.</p>
                </div>
                <div class="col2">
                    
                </div>
                </div>
              </div>

              <button type="button" class="btn btn-outline-dark" id="build1">Building 1</button>
              <button type="button" class="btn btn-outline-dark" id="build2">Building 2</button>
              <button type="button" class="btn btn-outline-dark" id="build5">Building 5</button>
              <button type="button" class="btn btn-outline-dark" onclick = "location.href='Buliding-six.php';" id="build6">Building 6</button>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>