
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

  <?php include('sideNav.php');?>   	

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


            <?php include('myForm.php');?>
            <?php include('myForm2.php');?>
            
          

            <button class="open-button" onclick="openForm()">Replace components</button>


            


          </div>
        </div>
      </div>
            


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script>

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


 


</script>
  </body>
</html>