<?php 

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}
// conncection to DB and store query of building 6 into php array
$machine_support_query= "SELECT support FROM machines WHERE Machine_type LIKE 'VIBRATION MASHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
$machine_support_result = mysqli_query($conn , $machine_support_query);
$phpArray_support = array(); // create new PHP array

while($row = mysqli_fetch_assoc($machine_support_result)){
    $phpArray_support[] = $row['support']; // insert support query into php array
}  

$machine_machineType_query= "SELECT Machine_type FROM machines WHERE Machine_type LIKE 'VIBRATION MASHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
$machine_machineType_result = mysqli_query($conn , $machine_machineType_query);
$phpArray_machineType = array(); // create new PHP array

while($row = mysqli_fetch_assoc($machine_machineType_result)){
    $phpArray_machineType[] = $row['Machine_type']; // insert support query into php array
}  
// conncection to DB and store query of building 6 into php array

$machine_status_query= "SELECT machineStatus FROM machines WHERE Machine_type LIKE 'VIBRATION MASHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
$machine_status_result = mysqli_query($conn , $machine_status_query);
$phpArray_status = array(); // create new PHP array


while($row = mysqli_fetch_assoc($machine_status_result)){
    $phpArray_status[] = $row['machineStatus']; // insert status query into php array
} 


?>
  <?php include('server.php');?>
  
  <html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Select Machine in Building 6</title>

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

      #titleMachine{

        margin-top: 20px;
        margin-left: 70px;
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

        margin-left:740px;
        margin-top: 20px;

        }

        #informationIcon {

        margin-top:7px;
        margin-left: 1400px; 
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

            #explanMachinePage {

                margin-left:100px;
                 margin-top: 40px;
                 font-size: 25px;
            }

            #IncorrectTable {

                margin-top: 60px;
                margin: 60px 25px 25px 25px;
                margin-left: 30px;
                
                
            }

            #explanMachinePage {

              margin-left:100px;
              margin-top: 40px;
              font-size: 30px;
            }

            .MainAREA {

            margin-left: 120px;
            margin-top: 25px;
            margin-bottom: 25px;
            width: 1315px;
            height: 600PX;
            background: url("http://www.up2me.co.il/imgs/38478576.jpg" )  ;

            }

            /**************************************************************************************************************************************/

            /*BUTTOMS MECHINES*/

            .btn-btn-outline-dark {

              width: 80pxx;
              height: 60px;
              font-size: 12px;

            }

            /******************/

           .col1 {

             margin-top:20px;
             margin-left:480px;
           }

           #ROSLER-FIRST-MACHINE-634 {

             margin-top: 10px;
           }

           /******************/

           .col2 {

             margin-left: 10px;
             margin-top: 20px;
           }

           .col3 {

             margin-left: 80px;
             margin-top: 20px
           }

           .col4 {

             margin-top: 90px;
             margin-left: 200px;
           }

           .col5 {

             margin-top: 90px;
             margin-left: 70px;
           }

           .col6 {

            margin-top: 90px;
            margin-left: 70px;

           }

           /***************************/

           /*machine 629*/

           .col7 {

             margin-left: 50px;
             margin-top: 15px;
           }

           .col8 {

            margin-left: 10px;
            margin-top: 15px;
           }

           .col9 {

            margin-left: 10px;
            margin-top: 15px;

           }

           .col10 {

            margin-left: 10px;
            margin-top: 15px;
           
          }

          .col11 {

          margin-left: 10px;
          margin-top: 15px;

          }


          .col12 {

          margin-left: 10px;
          margin-top: 15px;
 
          }



           /***************************/

          /*machine 637*/


          .col13 {

            margin-left: 50px;
            margin-top: 25px;
          }

          .col14 {

            margin-left: 10px;
            margin-top: 25px;
          }

          .col15 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col16 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col17 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col18 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col19 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col20 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col21 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col22 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col23 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col24 {

          margin-left: 10px;
          margin-top: 25px;
          }

          .col25 {

          margin-left: 10px;
          margin-top: 25px;
          }

           /***************************/

           /*MACHINE 0148*/

           .col26 {

            margin-left: 450px;
            margin-top: 15px;
            }

            .col27 {

            margin-left: 10px;
            margin-top: 15px;
            }

            .col28 {

            margin-left: 10px;
            margin-top: 15px;
            }


            .col29 {

            margin-left: 10px;
            margin-top: 15px;
            }


            /*************************/

            /*MACHINE BOX-2 0148*/

            .col30 {

            margin-left: 50px;
            margin-top: 30px;
            }

            .col31 {

            margin-left: 10px;
            margin-top: 30px;
            }


            .col32 {

            margin-left: 10px;
            margin-top: 30px;
            }


            .col33 {

            margin-left: 630px;
            margin-top: 30px;
            }


            .col34 {

            margin-left: 10px;
            margin-top: 30px;
            }

            .col35 {

            margin-left: 10px;
            margin-top: 30px;
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
                <h1 class="display-5" id="titleOFpage">Map - Building 6</h1>
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
  

               
  <p id="explanMachinePage">Select the machine you want to operate on.</p>
           
  <i class="fa fa-info-circle" id="informationIcon" onclick="alert('Machine Status\n\nGreen frame: Working machine\nYellow frame: Set up\nRed frame:     Error')" style="font-size:24px"></i>

    <div class="MainAREA" id= MainAREA >

      <div class="form-group row">

        

        <div class="col1">
          <div><button type="button" class="btn-btn-outline-dark" id="630">630<br/>ROSLER</button></div>
          <div><button type="button" class="btn-btn-outline-dark" id="634">634<br/>ROSLER</button></div>
        </div>

        <div class="col2">
          <div><button type="button" class="btn-btn-outline-dark" id="641">641<br/>ROSLER</button></div>
        </div>

        <div class="col3">
          <div><button type="button" class="btn-btn-outline-dark" id="396">396<br/>ROSLER</button></div>
        </div>

        <div class="col4">
          <div><button type="button" class="btn-btn-outline-dark" id="1466">1466<br/>ROSLER</button></div>
        </div>

        <div class="col5">
          <div><button type="button" class="btn-btn-outline-dark" id="750">750<br/>ROSLER</button></div>
        </div>

        <div class="col6">
          <div><button type="button" class="btn-btn-outline-dark" id="1239">1239<br/>ROSLER</button></div>
        </div>

      </div>



        <div class="form-group row">

          <div class="col7">
            <div><button type="button" class="btn-btn-outline-dark" id="629">629<br/>ROSLER</button></div>
          </div>

          <div class="col8">
            <div><button type="button" class="btn-btn-outline-dark" id="632">632<br/>ROSLER</button></div>
          </div>

          <div class="col9">
            <div><button type="button" class="btn-btn-outline-dark" id="627">627<br/>ROSLER</button></div>
          </div>

          <div class="col10">
            <div><button type="button" class="btn-btn-outline-dark" id="347">347<br/>ROSLER</button></div>
          </div>

          <div class="col11">
            <div><button type="button" class="btn-btn-outline-dark" id="628">628<br/>ROSLER</button></div>
          </div>

          <div class="col12">
            <div><button type="button" class="btn-btn-outline-dark" id="1263">1263<br/>ROSLER</button></div>
          </div>

        </div>




        <div class="form-group row">

          <div class="col13">
            <div><button type="button" class="btn-btn-outline-dark" id="637">637<br/>ROSLER</button></div>
          </div>

          <div class="col14">
            <div><button type="button" class="btn-btn-outline-dark" id="638">638<br/>ROSLER</button></div>
          </div>

          <div class="col15">
            <div><button type="button" class="btn-btn-outline-dark" id="636">636<br/>ROSLER</button></div>
          </div>

          <div class="col16">
            <div><button type="button" class="btn-btn-outline-dark" id="640">640<br/>ROSLER</button></div>
          </div>

          <div class="col17">
            <div><button type="button" class="btn-btn-outline-dark" id="639">639<br/>ROSLER</button></div>
          </div>

          <div class="col18">
            <div><button type="button" class="btn-btn-outline-dark" id="635">635<br/>ROSLER</button></div>
          </div>

          <div class="col19">
            <div><button type="button" class="btn-btn-outline-dark" id="633">633<br/>ROSLER</button></div>
          </div>

          <div class="col20">
            <div><button type="button" class="btn-btn-outline-dark" id="644">644<br/>ROSLER</button></div>
          </div>

          <div class="col21">
            <div><button type="button" class="btn-btn-outline-dark" id="1465">1465<br/>ROSLER</button></div>
          </div>

          <div class="col22">
            <div><button type="button" class="btn-btn-outline-dark" id="642">642<br/>ROSLER</button></div>
          </div>

          <div class="col23">
            <div><button type="button" class="btn-btn-outline-dark" id="341">341<br/>ROSLER</button></div>
          </div>

          <div class="col24">
            <div><button type="button" class="btn-btn-outline-dark" id="1365">1365<br/>ROSLER</button></div>
          </div>

          <div class="col25">
            <div><button type="button" class="btn-btn-outline-dark" id="643">643<br/>ROSLER</button></div>
          </div>


        </div>



        <div class="form-group row">


          <div class="col26">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור ואקום" id="140">140<br/>E-4</button></div>
          </div>

          <div class="col27">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור ואקום" id="141">141<br/>E-5</button></div>
          </div>

          <div class="col28">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור ואקום" id="142">142<br/>E-6</button></div>
          </div>

          <div class="col29">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="המסה אלומיניום" id="981">981<br/>D.8</button></div>
          </div>


        </div>



        <div class="form-group row">


          
          <div class="col30">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור אוויר" id="148">148<br/>BOX-2</button></div>
          </div>

          <div class="col31">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור אוויר" id="1330">1330<br/>BOX-3</button></div>
          </div>

          <div class="col32">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור אוויר" id="147">147<br/>BOX-1</button></div>
          </div>

          <div class="col33">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור ואקום" id="144">144<br/>E-3</button></div>
          </div>

          <div class="col34">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור ואקום" id="143">143<br/>E-1</button></div>
          </div>

          <div class="col35">
            <div><button type="button" class="btn-btn-outline-dark" data-toggle="tooltip"  title="תנור ואקום" id="145">145<br/>E-2</button></div>
          </div>

        </div>


      </div>
   

    </div>

  </div>



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
  document.getElementById("titleMachine").style.marginLeft = "155px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginLeft = "0px";
  document.getElementById("home_Page").style.marginLeft = "0px";
  document.getElementById("Brint").style.marginLeft = "0px";
  document.getElementById("explanMachinePage").style.marginLeft = "130px";
 
  document.getElementById("").style.marginLeft = "50px";



    /*trasionts!*/

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  document.getElementById("").style.transition = "0.5s";
  
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "60px";
  document.getElementById("explanMachinePage").style.marginright = "0px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginRight = "0";
  document.getElementById("home_Page").style.marginRight = "0";
  document.getElementById("Brint").style.marginRight = "0";

  
  document.getElementById("").style.marginLeft = "0px";

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  document.getElementById("").style.transition = "0.5s";


}

// this command is about insert input in SearchSupport text box, and after pressing on 'Enter' in keyboard, the system save the data
// inside the text box for page machine (vibration\electro...) and move to this page. 

document.getElementById('SearchSupport').onkeypress=function(e){
    if(e.keyCode==13){ // key is 'Enter' in keyboard
        localStorage.setItem('PassVar',document.getElementById('SearchSupport').value); // Set variable (support value) for machine page
        location.href=check(document.getElementById('SearchSupport').value); // Move to page machine (vibration\electro...)
    }
}

// This command save the result of machine ID (support) from array of same class buttons [0..n] and display the pressed machine in machine page (vibration\electro...)  

var machinesButtons = document.getElementsByClassName("btn-btn-outline-dark"); // 'btn-btn-outline-dark' belong to Machine buttons only
for (var i = 0; i < machinesButtons.length; i++) {
  machinesButtons[i].addEventListener("click", function(e) { // after click on any machine button 
    localStorage.setItem('PassVar',this.id); // save the machine id button (support number) to variable 
    location.href=check(this.id); // Move to page machine (vibration\electro...) 
    });
}
//this function check the machine type of selected machine 
function check(number){
for(var i = 0; i < support_php.length; i++){
  if(number === support_php[i]){ // check in iteration if the machine presented on DB
    if (machineType_php[i] === 'VIBRATION MASHINES'){
      return "vibration_mashines.php";
    }
    else if(machineType_php[i] === 'ELECTROTHERM BO FURNACE'){
      return "electrotherm_box_furnace.php";
    }
    else{
     return "nothing";
    }
  }
else{ // move to next iteration
}
}
  return "machineError.php"; // if all loop over, than machine not presented on the DB, so moving to machineError.php page
}
    




// var machinesButtons = document.getElementById('MainAREA').getElementsByClassName('btn-btn-outline-dark'); // 'btn-btn-outline-dark' belong to Machine buttons only
    
    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array
    var machineType_php = <?php echo json_encode($phpArray_machineType); ?>;
    ButtonsElements = document.getElementById('MainAREA').getElementsByClassName('btn-btn-outline-dark'); // all the machines buttons in this page
    
    var machineButtons = []; // initiate new array
    for (var i = 0; i < ButtonsElements.length; i++) { // loop all over the machine buttons
      machineButtons.push(ButtonsElements[i].id); // push button id to new array
    }

    let intersection_support = support_php.filter(x => machineButtons.includes(x)); // array of same values of both array
  // we want array only for support that presented on this screen (building 6)
   
   
    // this loop configure the button border color according to machine status (in DB)
    for (var i = 0; i < intersection_support.length; i++) {
        if(machineStatus_php[i] === "Working"){
          document.getElementById(intersection_support[i]).style.borderColor = '#00ff40'; // green color
        }
        else if(machineStatus_php[i] === "Set-up"){
          document.getElementById(intersection_support[i]).style.borderColor = 'yellow';
        }
        else{
         document.getElementById(intersection_support[i]).style.borderColor = 'red';
        }
    }



// Refresh page once while loaded (initialize), its necessary because page recognize cookie only after refresh
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
    
</script>
  </body>
</html>