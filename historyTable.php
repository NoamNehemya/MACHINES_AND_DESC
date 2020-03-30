<?php 

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}

$query="select * from history";
$result = mysqli_query($conn , $query);
?>




<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>History Table</title>

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

        margin-left:600px;
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

            #explanMachinePage {

                margin-left:100px;
                 margin-top: 40px;
                 font-size: 25px;
            }

            #historyTable {

                margin-top: 60px;
                margin-left: 100px;
             
                
            }

           

            #VisualStatusButton{

              width: 300px;
            }

          #IncorrectTable {

            margin-top: 60px;
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
                    <button class="btn btn-dark" onclick = "location.href='file:///C:/Users/Asus/Desktop/machinesAndDesc/LoginMD.html';" id="logout" type="submit" >Log Out</button>
					</a>
                
            </nav>

				<div id="mySidenav" class="sidenav">
					   <div class="column" id="backPage1">
                         <button class="btn btn-light" style="text-align:center;" onclick = "location.href='file:///C:/Users/Asus/Desktop/machinesAndDesc/historyTable.html';" data-toggle="tooltip"  title="Machine Therapy History" id="History"><img src="http://www.up2me.co.il/imgs/77306062.png" alt="" style="width:"></button>
                         </div>
                    <div class="column" id="backPage1">
                        <button class="btn btn-light" style="text-align:center;" onclick = "location.href='file:///C:/Users/Asus/Desktop/machinesAndDesc/incorrcetTable.html';"  data-toggle="tooltip" data-placement="bottom" title="Incorrect Components" id="Incorrect"><img src="http://www.up2me.co.il/imgs/46232313.png" alt="" style="width:"></button>
                         </div>
                    <div class="column" id="insert">
                        <button class="btn btn-light" style="text-align:center;" onclick = "location.href='file:///C:/Users/Asus/Desktop/machinesAndDesc/insertComponent.html';" data-toggle="tooltip" data-placement="bottom" title="Insert Components" id="Incorrect"><img src="http://www.up2me.co.il/imgs/14121216.png" alt="" style="width:"></button>
                            </div>
                    <div class="column" id="insert">
                       <button class="btn btn-light" style="text-align:center;"  onclick = "location.href='file:///C:/Users/Asus/Desktop/machinesAndDesc/pageStockEnter.html';" data-toggle="tooltip" data-placement="bottom" title="Component Stock" id="ComponentPool"><img src="http://www.up2me.co.il/imgs/28542967.png" alt="" style="width:"></button>
                          </div>
						  
          </div>
          
          <div class="jumbotron-jumbotron-fluid">
            <div class="row">
              <div class="column" id="titleMachine">
                <h1 class="display-5" id="titleOFpage">Machine Therapy History</h1>
                </div>
              <div class="column" id="Search_Machine">
                <input type="text" class="form-control" placeholder="Search Machine:" id="SearchSupport" lt="" style="width:150">
                </div>
                <div class="column" id="back_Page">
                 <button class="btn btn-outline-dark" onclick = window.history.back() data-toggle="tooltip" data-placement="bottom" title="Back" id="backPage"><img src="http://www.up2me.co.il/imgs/18785403.png" alt="" style="width:" ></button>
                  </div>
                <div class="column" id="home_Page">
                 <button type="button" class="btn btn-outline-dark" onclick = "location.href='file:///C:/Users/Asus/Desktop/machinesAndDesc/mapOfBilding.html';" data-toggle="tooltip" data-placement="bottom" title="Home Page" id="homePage"><img src="http://www.up2me.co.il/imgs/38159196.png" alt="" style="width:"></button>
                  </div>      
                  <div class="column" id="Brint">  
                       <button class="btn btn-outline-dark" onclick = window.print()  data-toggle="tooltip" data-placement="bottom" title="Print" id="PrintPage"><img src="http://www.up2me.co.il/imgs/64977067.png" alt="" style="width:"></button>
                    </div>
                </div>
				  
	</head>


  <body>

    <p id="explanMachinePage">This table shows the treatment history for all factory machines.</p>

    <div class="column" id="MainArea">

               <div class="row">
                 <div class="column" id="column1">

                 
                 </div>

                 
              
               </div>

               

               <table class="table table-hover" id="IncorrectTable">
                <thead>
                  <tr>
                    <th scope="col">Change Date</th>
                    <th scope="col">Employee's Name</th>
                    <th scope="col">Previous Machine - ID</th>
                    <th scope="col">New Machine - ID</th>
                    <th scope="col">Component - ID</th>
                    <th scope="col">Component - Type</th>
                    <th scope="col">Update Number</th>
                  </tr>
                </thead>
                
                <?php
                     while($rows = mysqli_fetch_assoc($result)) {

                ?>

                <tbody>
                  <tr>
                    <th scope="row"><?php echo $rows['UpdateDate']; ?></th>
                    <td><?php echo $rows['UserName']; ?></td>
                    <td><?php echo $rows['OldMachine']; ?></td>
                    <td><?php echo $rows['NewMachine']; ?></td>
                    <td><?php echo $rows['Component_ID']; ?></td>
                    <td><?php echo $rows['Component_type']; ?></td>
                    <td><?php echo $rows['Update_Number']; ?></td>
                   
                  </tr>
            
                </tbody>
                
                <?php
                    }
                ?>

              </table>
             <div>
            

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
 
  document.getElementById("IncorrectTable").style.marginLeft = "50px";



    /*trasionts!*/

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  document.getElementById("IncorrectTable").style.transition = "0.5s";
  
  
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
  document.getElementById("IncorrectTable").style.marginLeft = "0px";


}


</script>
  </body>
</html>