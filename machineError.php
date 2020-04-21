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
		body {
	  font-family: "Lato", sans-serif;
	}

	.sidenav {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
    opacity: 0.9;
	  overflow-x: hidden;
	  transition: 0.5s;
	  padding-top: 60px;
	}

	.sidenav a {
	  padding: 8px 8px 8px 32px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display: block;
	  transition: 0.3s;
	}

	.sidenav a:hover {
	  color: #f1f1f1;
	}

	.sidenav .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;
	}

	#main {
	  transition: margin-left .5s;
	  padding: 16px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}

		   
        .container{
           font-size: 20;
           margin-top: 20px;
           margin-bottom: 60px;
        }

       

        .jumbotron-jumbotron-fluid{

            height: 90px;
            background-color: #E1F3EE;
            margin-bottom: 0px;
            padding-top: 5px;
            padding-bottom: 20px;


        }
		
		.tooltip .tooltiptext::after {
			  content: " ";
			  position: absolute;
			  top: 50%;
			  right: 100%; /* To the left of the tooltip */
			  margin-top: -5px;
			  border-width: 5px;
			  border-style: solid;
			  border-color: transparent black transparent transparent;
}

        .form-control-mx-sm-3{

            width: 650px;
            margin-left: 182px;
        }

       
        #Confirm {

            margin-left: 182px;
            width: 650px;
            margin-top: 35px;
            padding-inline-end: 20px;
            margin-block-end: 50px;

        }

        


        #logout {

          margin-left:1090px;
          margin-top: 20px;
          width: 200px;
        }

      #titleOFpage{

          margin-top: 20px;
          margin-left: 50px;
      }

      #backPage {

        margin-top:20px;
        margin-left: 15px; 
      }

      #homePage {

        margin-top:20px;
        margin-left: 15px; 
        }

        #PrintPage{

        margin-top:20px;
        margin-left:15px;  
        }

        #SearchSupport {

        margin-left:780px;
        margin-top: 20px;

        }

        #History {

        margin-top:25px;
        margin-left: 15px;  
        }

        #Incorrect {

        margin-top:25px;
        margin-left: 15px;  
        }

        #insert {

        margin-top:0px;
        margin-left: 0px;
        }

        #ComponentPool {

        margin-top:25px;
        margin-left: 15px;

        }

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
                <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color:#669999; color: black; text-decoration-color: black;">
				<div id="main">
					<span id="navButton" style="font-size:30px;cursor:pointer">&#9776;</span>
				</div>
                <a class="navbar-brand" href="#">M&D</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
			
                        
                    
                      
                    <a class="logout1" style="right-side: 5px">
                    <button class="btn btn-dark" onclick = "location.href='LoginMD.php';" id="logout" type="submit" >Log Out</button>
					</a>
                
            </nav>

				<div id="mySidenav" class="sidenav">
					   <div class="column" id="backPage1">
                         <button class="btn btn-light" style="text-align:center;" onclick = "location.href='historyTable.php';" data-toggle="tooltip"  title="Machine Therapy History" id="History"><img src="http://www.up2me.co.il/imgs/77306062.png" alt="" style="width:"></button>
                         </div>
                    <div class="column" id="backPage1">
                        <button class="btn btn-light" style="text-align:center;" onclick = "location.href='incorrcetTable.php';"  data-toggle="tooltip" data-placement="bottom" title="Incorrect Components" id="Incorrect"><img src="http://www.up2me.co.il/imgs/46232313.png" alt="" style="width:"></button>
                         </div>
                    <div class="column" id="insert">
                        <button class="btn btn-light" style="text-align:center;" onclick = "location.href='insertComponent.php';" data-toggle="tooltip" data-placement="bottom" title="Insert Components" id="Incorrect"><img src="http://www.up2me.co.il/imgs/14121216.png" alt="" style="width:"></button>
                            </div>
                    <div class="column" id="insert">
                       <button class="btn btn-light" style="text-align:center;"  onclick = "location.href='pageStockEnter.php';" data-toggle="tooltip" data-placement="bottom" title="Component Stock" id="ComponentPool"><img src="http://www.up2me.co.il/imgs/28542967.png" alt="" style="width:"></button>
                          </div>
						  
          </div>
          
          <div class="jumbotron-jumbotron-fluid">
            <div class="row">
              <div class="column" id="titleMachine">
                <h1 class="display-5" id="titleOFpage">Error: Machine not found</h1>
                </div>
              <div class="column" id="Search_Machine">
                <input type="text" class="form-control" placeholder="Search Machine:" id="SearchSupport" lt="" style="width:150">
                </div>
                <div class="column" id="back_Page">
                 <button class="btn btn-outline-dark" onclick = window.history.back() data-toggle="tooltip" data-placement="bottom" title="Back" id="backPage"><img src="http://www.up2me.co.il/imgs/18785403.png" alt="" style="width:" ></button>
                  </div>
                <div class="column" id="home_Page">
                 <button type="button" class="btn btn-outline-dark" onclick = "location.href='mapOfBilding.php';" data-toggle="tooltip" data-placement="bottom" title="Home Page" id="homePage"><img src="http://www.up2me.co.il/imgs/38159196.png" alt="" style="width:"></button>
                  </div>      
                  <div class="column" id="Brint">  
                       <button class="btn btn-outline-dark" onclick = window.print()  data-toggle="tooltip" data-placement="bottom" title="Print" id="PrintPage"><img src="http://www.up2me.co.il/imgs/64977067.png" alt="" style="width:"></button>
                    </div>
                </div>
				  
	</head>


  <body>


              <form id="Text_Area_Error">

              <h1 class="display-5" id="sorry_title"> Sorry! </h1>
              <p id="senetece_one">Machine <?php echo $myPhpVar; ?> could not be found.</p>
              <p id="senetece_two">Please try again with another Machine Support.</p>

              </from>

    

 
            

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
	
	document.getElementById("navButton").addEventListener("click", toggleNav);

function toggleNav(){
    if (document.getElementById("mySidenav").style.width === "0px" || document.getElementById("mySidenav").style.width === "") {
        return openNav();
    } else if (document.getElementById("mySidenav").style.width === "90px") {
		return closeNav();
	  }
    
}


function openNav() {
  document.getElementById("mySidenav").style.width = "90px";
  document.getElementById("main").style.marginLeft = "90px";
  document.getElementById("titleMachine").style.marginLeft = "90px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginLeft = "0px";
  document.getElementById("home_Page").style.marginLeft = "0px";
  document.getElementById("Brint").style.marginLeft = "0px";
  document.getElementById("explanMachinePage").style.marginLeft = "130px";
 
  document.getElementById("HistoryTable").style.marginLeft = "50px";



    /*trasionts!*/

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  document.getElementById("HistoryTable").style.transition = "0.5s";
  
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "0px";
  document.getElementById("explanMachinePage").style.marginright = "0px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginRight = "0";
  document.getElementById("home_Page").style.marginRight = "0";
  document.getElementById("Brint").style.marginRight = "0";

  document.getElementById("explanMachinePage").style.marginLeft = "100px";
  document.getElementById("HistoryTable").style.marginLeft = "0px";


}



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
    if (machineType_php[i] === 'VIBRATION MASHINES'){
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