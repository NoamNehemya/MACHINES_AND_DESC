
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
  <link rel="stylesheet" href="vibration_machines.css">
  <link rel="stylesheet" href="componentsReplace.css">


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
                  <h1 class="display-5" id="titleOFpage">Machine 0981</h1>
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
                   

                    
                    <form method="post" action="vibration_machines.php" id="inputing">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Support:</label>
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_support)) {

                            ?>
                            
                              <input type="text" name="textField" class="dit1" value="<?php echo $row['support']; ?>">

                             <?php

                            }

                            ?> 
                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">PLC:</label>   
                            </div>

                            <div class="col3">

                            <?php if (mysqli_num_rows($result_PLC)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------">
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_PLC)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>
                           
                          </div>
                          </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">AC Drives:</label>
                            <div class="col1">

                            <?php if (mysqli_num_rows($result_acDrives)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------">
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_acDrives)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Timer:</label>
                            </div>

                            <div class="col4">

                            <?php if (mysqli_num_rows($result_timer)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------">
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_timer)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>
                          </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Building:</label>
                            <div class="col1">

                              <p name="textField" class="dit2">6</p>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Speed<br/>Control:</label>
                            </div>

                            <div class="col4">

                                  <?php if (mysqli_num_rows($result_speedControl)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------">
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_speedControl)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">
                                    <?php } ?> 
                                    

                            <?php
                            }
                            ?>


                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Machine Type:</label>
                            <div class="col1">

                            <p name="textField" class="dit2">Vibration</p>
                              
                            </div>

                            <div class="col2">
                            </div>

                            <div class="col4">

                            <?php while($row=mysqli_fetch_array($result_statusMachine)) {

                            ?>
                                
                            <input type="text" id="machineStatusText" name="textField" class="dit2" value="<?php echo $row['machineStatus']; ?>">

                            <?php

                             }

                             ?>

                            </div>


                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Power Supply:</label>
                            <div class="col1">

                             <?php if (mysqli_num_rows($result_powerSupply)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------">
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_powerSupply)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">
                                    <?php } ?> 
                                    
                            <?php
                            }
                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Machine<br/>Status:</label>
                            </div>

                            <div class="col4">
                            <select class="DropDowns" id="List_Machine_Status" name="update_status_machine" value="">
                              
                    
                              <?php while($rows = $result_list2->fetch_assoc()):;?>
                                 <?php echo "<option value={$rows["machineStatus"]}>{$rows["machineStatus"]}</option>";?>
                              <?php endwhile;?>
                            </select>
                            </div>

                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Hourmeter:</label>
                            <div class="col1"> 

                            <?php if (mysqli_num_rows($result_hourmeter)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------">
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_hourmeter)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>">
                                    <?php } ?> 
                                    

                            <?php
                            }
                            ?>



                            </div>
                            </div>

                          
                           
                         
                      

                
              </div>

              <?php while($row=mysqli_fetch_assoc($result_image)) {?>
          <div class="column2">
            <div class="form-group row">
              <img src="<?php echo $row['image']?>" id="machineImage" alt="" style="max-width: 200px;border: 1px solid lightgray; box-shadow: 0 1px 5px 1px lightgrey; border-radius: 6px;">
            </div>

            <?php
          }
      ?>
            
            <div class="form-group row">
              <button type="submit" name="save_status" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" id="save">Save</button>
            </div>

            </form>
            
<button class="open-button" onclick="openForm()">Replace components</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <button type="button" onclick="closeForm()" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 id="title_Components_Modification" ><b>Components Modification</b></h3><br>
    
    <label><b>Component Type</b></label><br>
    <select class="form-control" id="DropListType_one">
    <?php while($rows = $result_to_dropList_enter_stock->fetch_assoc()):;?>
    <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>

    <label><b>Add Component</b></label><br>
    <select class="form-control" id="DropListType_two" onChange="submitActiveOrDimmed()">
    <?php while($rows = $result_query_two->fetch_assoc()):;?>
    <?php echo "<option value={$rows["s_n"]}>{$rows["s_n"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>
    
    <label><b>Remove Component</b></label><br>
    <select class="form-control" id="DropListType_three" onChange="submitActiveOrDimmed()">
    <?php while($rows = $result_query_three->fetch_assoc()):;?>
    <?php echo "<option value={$rows["s_n"]}>{$rows["s_n"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>

    <button type="submit" id="submit_Components" class="btn">Submit</button>
    
  </form>
</div>
                              

          </div>
        </div>
      </div>
            


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
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

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  
}

function closeNav() {
 document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "50px";
  document.getElementById("explanMachinePage").style.marginright = "0px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginRight = "0";
  document.getElementById("home_Page").style.marginRight = "0";
  document.getElementById("Brint").style.marginRight = "0";

  document.getElementById("explanMachinePage").style.marginLeft = "100px";
 
}

    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array
    var machineType_php = <?php echo json_encode($phpArray_machineType); ?>; // insert php array (machineType values) to JS array

    // get variable (component_type value from pageStockEnter.php)
    var support = localStorage.getItem('PassVar');
    // set title to explanMachinePage title according to support sent variable
    document.getElementById("titleOFpage").innerHTML = "Machine: " + support;
    // use cookie for using var javaScript in PHP code
    document.cookie = "myJavascriptVar = " +  support;


    var machineTextBox = document.getElementById('machineStatusText').value; // store machine status value from text box

    document.getElementById('List_Machine_Status').value = machineTextBox; // set machineTextBox value as default in drop list

    document.getElementById('machineStatusText').style.display = "none"; // hide machineTextBox from UI

    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded?ID=' + support;
            window.location.reload();
        }
    }

    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }


    function DropListOneResult() { // return the value of selected option of Drop list one (component type)
      return document.getElementById('DropListType_one').options[document.getElementById('DropListType_one').selectedIndex].innerHTML;
    }

    
   document.cookie = "headvalue="+DropListOneResult(); // store value of DropListOneResult in JS cookie
 


</script>
  </body>
</html>