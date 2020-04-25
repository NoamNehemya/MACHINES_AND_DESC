<?php include('server.php');?>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Machine Page</title>

    <style>

   </style>


  <head>

  <link rel="stylesheet" href="SideNav.css">
  <link rel="stylesheet" href="electrotherm_box_furnace.css">

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
                         <button class="btn btn-light" style="text-align:center;" onclick = "location.href='historyTable.php';"  data-toggle="tooltip"  title="Machine Therapy History" id="History"><img src="http://www.up2me.co.il/imgs/77306062.png" alt="" style="width:"></button>
                         </div>
                    <div class="column" id="backPage1">
                        <button class="btn btn-light" style="text-align:center;" onclick = "location.href='incorrcetTable.php';" data-toggle="tooltip" data-placement="bottom" title="Incorrect Components" id="Incorrect"><img src="http://www.up2me.co.il/imgs/46232313.png" alt="" style="width:"></button>
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
                  <h1 class="display-5" id="titleOFpage">Machine: </h1>
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
                </div>
				  
	</head>        
</div>
               
		 <div class="row">
			   <div class="column1" id="ditealMachine">    
                

                    <p id="explanMachinePage"> Enter the data you want to update on this machine.</p>
                   

                    
                    <form method="post" action="electrotherm_box_furnace.php" id="inputing">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Support:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_support2)) {

                            ?>
                              <input type="text" name="textField" class="dit1" value="<?php echo $row['support']; ?>">

                            <?php

                            }

                            ?> 

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Sourch:</label>   
                            </div>

                            <div class="col3">

                            <?php while($row=mysqli_fetch_array($result_sourch)) {

                            ?>
                           

                           <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                          </div>
                          </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Universal<br/>Digital:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_Universal_Digital)) {

                            ?>


                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">PLC:</label>
                            </div>

                            <div class="col4">

                            <?php while($row=mysqli_fetch_array($result_PLC2)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>
                          </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Building:</label>
                            <div class="col1">
                              <p class="dit2">6</p>
                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Graphic Recorder:</label>
                            </div>

                            <div class="col4">

                            <?php while($row=mysqli_fetch_array($result_Graphic_Recorder)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Main:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_Main)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['main']; ?>">

                            <?php

                            }

                            ?>
                              
                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">PVAK:</label>
                            </div>
                            

                            <div class="col4">

                            <?php while($row=mysqli_fetch_array($result_PVAK)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>


                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Machine<br/>Type:</label>
                            <div class="col1">
                              <p class="dit2">Electrotherm box</p>
                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">SCR:</label>
                            </div>

                            <div class="col4">

                            <?php while($row=mysqli_fetch_array($result_SCR)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>


                            </div>

                          </div>

                          

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">PEX:</label>
                            <div class="col1">
                       
                            <?php while($row=mysqli_fetch_array($result_PEX)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>

                            
                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">PWT:</label>
                            </div>

                            <div class="col4">

                           
                            <?php while($row=mysqli_fetch_array($result_PWT)) {

                            ?>

                             <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                           <?php

                           }

                          ?>


                            </div>

                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">PHT:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_PHT)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Volt /<br/>Ampermeter:</label>
                            </div>

                            <div class="col4">

                            <?php while($row=mysqli_fetch_array($result_Volt_Ampermeter)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>

                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Pol/Pot:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_Pol_Pot)) {

                           ?>

                           <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                           <?php

                            }

                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Power Supply:</label>
                            </div>

                            <div class="col4">

                            
                            <?php while($row=mysqli_fetch_array($result_powerSupply2)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">DH1/SSR:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_DH1)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>

                            <div class="col2">
                            </div>

                            <div class="col4">
                            <?php while($row=mysqli_fetch_array($result_statusMachine2)) {

                            ?>
                                
                            <input type="text" id="machineStatusText" name="textField" class="dit2" value="<?php echo $row['machineStatus']; ?>">

                            <?php

                            }

                            ?>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">DH2/SSR:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_DH2)) {

                            ?>

                            <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">

                            <?php

                            }

                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Machine<br/>Status:</label>
                            </div>

                            <div class="col4">
                              <select class="DropDowns" id="List_Machine_Status" name="update_status_machine2">
                              <?php while($rows = $result_list3->fetch_assoc()):;?>
                                 <?php echo "<option value={$rows["machineStatus"]}>{$rows["machineStatus"]}</option>";?>
                              <?php endwhile;?>
                            </select>
                            </div>
                          </div>

                      

                
              </div>
              <?php while($row=mysqli_fetch_assoc($result_image)) {?>
          <div class="column2">
            <div class="form-group row">
            <img src="<?php echo $row['image']?>" id="machineImage" alt="" style="max-width: 200px;border: 1px solid lightgray; box-shadow: 0 1px 5px 1px lightgrey; border-radius: 6px;">            </div>
            <?php
          }
      ?>
            
            <div class="form-group row">
              <button type="submit" name="save_status_2" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" id="save">Save</button>
            </div>
            
            </form>                

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
  document.getElementById("main").style.marginLeft = "65px";
  document.getElementById("titleMachine").style.marginLeft = "65px";

  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginLeft = "0px";
  document.getElementById("home_Page").style.marginLeft = "0px";
  document.getElementById("Brint").style.marginLeft = "0px";

 
  document.getElementById("explanMachinePage").style.marginLeft = "130px";
  //document.getElementById("inputing").style.marginLeft = "65px";
  
  document.getElementById("titleMachine").style.marginLeft = "80px"; 
  document.getElementById("MainArea").style.marginLeft = "800px";

    /*trasionts!*/

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "0px";

  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginRight = "0";
  document.getElementById("home_Page").style.marginRight = "0";
  document.getElementById("Brint").style.marginRight = "0";

  document.getElementById("explanMachinePage").style.marginright = "20px";
 /* document.getElementById("titleMachine").style.marginLeft = "0"; */
  document.getElementById("MainArea").style.marginLeft = "800px";

}

// this command is about insert input in SearchSupport text box, and after pressing on 'Enter' in keyboard, the system save the data
// inside the text box for page machine (vibration\electro...) and move to this page. 

document.getElementById('SearchSupport').onkeypress=function(e){
    if(e.keyCode==13){ // key is 'Enter' in keyboard
        localStorage.setItem('PassVar',document.getElementById('SearchSupport').value); // Set variable (support value) for machine page
        location.href='electrotherm_box_furnace.php'; // Move to page machine (vibration\electro...)
    }
}

// get variable (component_type value from pageStockEnter.php)
var support = localStorage.getItem('PassVar');
// set title to explanMachinePage title according to support sent variable
document.getElementById("titleOFpage").innerHTML = "Machine: " + support ;
// use cookie for using var javaScript in PHP code
document.cookie = "myJavascriptVar = " +  support
// Refresh page once while loaded (initialize), its necessary because page recognize cookie only after refresh
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}


var machineTextBox = document.getElementById('machineStatusText').value; // store machine status value from text box

document.getElementById('List_Machine_Status').value = machineTextBox; // set machineTextBox value as default in drop list

document.getElementById('machineStatusText').style.display = "none"; // hide machineTextBox from UI



</script>
  </body>
</html>