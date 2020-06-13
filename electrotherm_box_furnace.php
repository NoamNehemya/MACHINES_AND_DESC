<?php include('server.php');?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

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

  <?php include('sideNav.php');?>   	
				  
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
                              <input type="text" name="textField" class="dit1" value="<?php echo $row['support']; ?>" disabled>

                            <?php

                            }

                            ?> 

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Sourch:</label>   
                            </div>

                            <div class="col3">

                            <?php if (mysqli_num_rows($result_sourch)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_sourch)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                          </div>
                          </div>

                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Universal<br/>Digital:</label>
                            <div class="col1">

                            <?php if (mysqli_num_rows($result_Universal_Digital)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_Universal_Digital)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>


                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">PLC:</label>
                            </div>

                            <div class="col4">

                            <?php if (mysqli_num_rows($result_PLC2)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_PLC2)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
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

                            <?php if (mysqli_num_rows($result_Graphic_Recorder)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_Graphic_Recorder)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">Pol/Pot:</label>
                            <div class="col1">

                            <?php if (mysqli_num_rows($result_Pol_Pot)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_Pol_Pot)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>
                              
                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">PVAK:</label>
                            </div>
                            

                            <div class="col4">

                            <?php if (mysqli_num_rows($result_PVAK)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_PVAK)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
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

                             <?php if (mysqli_num_rows($result_SCR)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_SCR)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>


                            </div>

                          </div>

                          

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">PEX:</label>
                            <div class="col1">
                       
                            <?php if (mysqli_num_rows($result_PEX)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_PEX)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>

                            
                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">PWT:</label>
                            </div>

                            <div class="col4">

                            <?php if (mysqli_num_rows($result_PWT)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_PWT)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>


                            </div>

                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">PHT:</label>
                            <div class="col1">

                            <?php if (mysqli_num_rows($result_PHT)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_PHT)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Volt /<br/>Ampermeter:</label>
                            </div>

                            <div class="col4">

                            <?php if (mysqli_num_rows($result_Volt_Ampermeter)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_Volt_Ampermeter)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>

                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">DH1/SSR:</label>
                            <div class="col1">

                            <?php if (mysqli_num_rows($result_DH1)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_DH1)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>

                            <div class="col2">
                              <label for="colFormLabelSm" class="Model-dit">Power Supply:</label>
                            </div>

                            <div class="col4">

                            <?php if (mysqli_num_rows($result_powerSupply2)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_powerSupply2)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
                            <?php
                            }
                            ?>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm-1">DH2/SSR:</label>
                            <div class="col1">

                            <?php if (mysqli_num_rows($result_DH2)==0){ ?> 
                                  <input type="text" name="textField" class="dit2" value="-------------------" disabled>
                                  <?php }
                                  
                                  else { ?>
                                    <?php while($row=mysqli_fetch_array($result_DH2)) { ?>
                                    <input type="text" name="textField" class="dit2" value="<?php echo $row['s_n']; ?>" disabled>
                                    <?php } ?> 
                              
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

                          <div class="form-group row">
                            
                            <div class="col1">

                            <?php while($row=mysqli_fetch_array($result_statusMachine)) {

                            ?>
                                
                            <input type="text" id="machineStatusText" name="textField" class="dit2" value="<?php echo $row['machineStatus']; ?>">

                            <?php

                            }

                            ?>


                            </div>


                          </div>
                
              </div>
          <?php while($row=mysqli_fetch_assoc($result_image)) {?>
          <div class="column2">
            <div class="form-group row">
            <img src="<?php echo $row['image']?>" id="machineImage" alt="" style="max-width: 200px;border: 1px solid lightgray; box-shadow: 0 1px 5px 1px lightgrey; border-radius: 6px;">            </div>
            </div>

            <?php
          }
      ?>
        
           </div>

           </div>



            <div style="padding-left:1045px;padding-right:100px;" >

            <button type="submit" name="save_status_2" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" id="save">Save</button>
      
            
            </form>  

              <button class="btn btn-outline-dark" id="replacecomponent" onclick="location.href='replaceComponent_step1.php';" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" id="save">Replace components</button>              
              </div>
              
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
    document.getElementById("titleOFpage").innerHTML = "Machine: " + support ;
    // use cookie for using var javaScript in PHP code
    document.cookie = "myJavascriptVar = " +  support
    // Refresh page once while loaded (initialize), its necessary because page recognize cookie only after refresh

  
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