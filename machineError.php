


<?php include('server_machine_error.php');?>
<?php include('server.php');?>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Error Machine not found</title>

   <style>


        #Text_Area_Error {

          width: 800px;
          margin-left:350px;
          margin-top: 60px; 
          height: 300px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #669999;
          border-radius: 4px;
          background-color: #f8f8f8;
          resize: none;
          font-family: "Noto Sans", sans-serif;
          text-align: left;

        }

        #sorry_title {

          color: #990000;
          font-size:80px;
        }

        #senetece_one {

          margin-top:20px;
          font-size:25px;
        }

        #senetece_two {

        margin-top:20px;
        font-size:25px;
        }

    
    </style>

<head>
<?php include('sideNav.php');?>   				  
	</head>


  <body>


              <form id="Text_Area_Error">

              <h1 class="display-5" id="sorry_title"> Sorry! </h1>
              <p id="senetece_one">Machine <?php echo $myPhpVar; ?> not found.</p>
              <p id="senetece_two">Please try again with another Machine Support.</p>

              </from>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script>

    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array


        window.onload = function() { // refresh on page loading
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
      }


</script>
  </body>
</html>