<?php 

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}
// Set PHP variable using created cookie (cookie 'myJavascriptVar' created on the buttom code)
$myPhpVar= $_COOKIE['myJavascriptVar'];

?>

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
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>

  <body>

  <ol id="new-projects"></ol>
 
<script>
$( "#new-projects" ).load( "SideNav.html" );
</script>

				  
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
    <script>


// this command is about insert input in SearchSupport text box, and after pressing on 'Enter' in keyboard, the system save the data
// inside the text box for page machine (vibration\electro...) and move to this page. 

document.getElementById('SearchSupport').onkeypress=function(e){
    if(e.keyCode==13){ // key is 'Enter' in keyboard
        localStorage.setItem('PassVar',document.getElementById('SearchSupport').value); // Set variable (support value) for machine page
        location.href=check(document.getElementById('SearchSupport').value); // Move to page machine (vibration\electro...)
    }
}


// get variable (component_type value from pageStockEnter.php)
var support = localStorage.getItem('PassVar');
// set title to explanMachinePage title according to support sent variable
document.getElementById("titleOFpage").innerHTML = "Machine: " + support;
// use cookie for using var javaScript in PHP code
document.cookie = "myJavascriptVar = " +  support;
// Refresh page once while loaded (initialize), its necessary because page recognize cookie only after refresh
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}


function check(number){
for(var i = 0; i < support_php.length; i++){
  if(number === support_php[i]){
    if (machineType_php[i] === 'VIBRATION MACHINES'){
      return "vibration_mashines.php";
    }
    else if(machineType_php[i] === 'ELECTROTHERM BO FURNACE'){
      return "electrotherm_box_furnace.php";
    }
    else{
     return "ErrorSearchMachine.php";
    }
  } 
  
  else{
    return "ErrorSearchMachine.php";
    }

}
}


</script>
  </body>
</html>