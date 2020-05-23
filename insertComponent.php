<?php include('server.php');?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>insert component</title>

   <style>

   </style>

  <link rel="stylesheet" href="insertComponent.css">

  <head>
  <?php include('sideNav.php');?>   

    <div class="column" id="MainArea">

                   <p id="explanMachinePage">Complete the information needed to add a component to the factory component stock.</p>

                   <form method="post" action="insertComponent.php" id="inputingComponentDetail">
                   <?php include('errors.php'); ?>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Support:</label>
                        </div>

                        <div class="col2">
                        <select class="DropDowns" id="DropListTypeSupport" onChange="submitActiveOrDimmed()" name="support" value="<?php echo $support; ?>">
                            <?php while($rows = $result_allsupport->fetch_assoc()):;?>
                                <?php echo "<option value={$rows["support"]}>{$rows["support"]}</option>";?>
                            <?php endwhile;?>
                              </select>
                        </div>

                        

                        <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Manual:</label>
                        </div>

                        <div class="col4">
                            <input type="text" class="form-control" onclick="redFrames()" placeholder="insert Manual" id="textFildManual"  maxlength="272" name="manual" value="<?php echo $manual; ?>">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Serial Number:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" onclick="redFrames()" onChange="submitActiveOrDimmed()" placeholder="insert Serial Number" id="textFildSerialNumber" maxlength="25" name="serial_num" value="<?php echo $serial_num; ?>">
                        </div>

                        <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Brand Name:</label>
                        </div>

                        <div class="col4">
                            <input type="text" class="form-control" onclick="redFrames()" onChange="submitActiveOrDimmed()" placeholder="insert Model type" id="textFildBrandName" maxlength="18" name="brand_name" value="<?php echo $brand_name; ?>">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Main:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" onclick="redFrames()" onChange="submitActiveOrDimmed()" placeholder="insert Main" id="textFildMain" maxlength="11" name="main" value="<?php echo $main; ?>">
                        </div>

                        <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Image:</label>
                        </div>

                        <div class="col4">
                            <input type="file" class="btn btn-outline-dark" onChange="submitActiveOrDimmed()"  id="UpalteFile1" name="upalte_image" value="<?php echo $upalte_image; ?>">
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Department:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" placeholder="insert Department" id="textFildDepartment" maxlength="17" name="Department" value="<?php echo $Department; ?>">
                        </div>

                        <div class="col3">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Type:</label>
                            </div>

                            <div class="col4">
                                <input type="text" class="form-control" onclick="redFrames()" onChange="submitActiveOrDimmed()" placeholder="insert type"  id="textFildType" maxlength="20" name="type" value="<?php echo $type; ?>">
                            </div>
                    
                    </div>

                        <div class="form-group row">

                            <div class="col1">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Model:</label>
                            </div>
    
                            <div class="col2">
                                <input type="text" class="form-control" onclick="redFrames()" onChange="submitActiveOrDimmed()" placeholder="insert Model" id="textFildModel" maxlength="23" name="model" value="<?php echo $model; ?>">
                            </div>

                            <div class="col3">
                            <label for="colFormLabelSm"  class="col-sm-1-col-form-label-col-form-label-sm">Component Type:</label>
                        </div>

                        <div class="col4">
                            <select class="DropDowns2" id="DropListType" onChange="submitActiveOrDimmed()" name="Component_Type" value="<?php echo $Component_Type; ?>">
                            <?php while($rows = $result_list->fetch_assoc()):;?>
                                <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
                            <?php endwhile;?>
                              </select>
                        </div>
    
                        </div>

                        <div class="form-group row">

                            <div class="col1">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Place:</label>
                            </div>
    
                            <div class="col2">
                                <input type="text" class="form-control" onclick="redFrames()" placeholder="insert Place" id="textFildPlace" maxlength="11" name="place" value="<?php echo $place; ?>">
                            </div>

                           
    
                        </div>

                        <div class="form-group row">

                            <div class="col5">

                                <button type="submit" name="insertComponentBtn" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" id="UpalteFile2">Submit</button>
                                
                            </div> 
                        </div>


                        
    
    


                   </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script>

    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array
    var machineType_php = <?php echo json_encode($phpArray_machineType); ?>; // insert php array (machineType values) to JS array
    
    submitActiveOrDimmed();


    // This function set the behavior of Submit button, enabled or dimmed
    function submitActiveOrDimmed() {

    if  (  document.getElementById("textFildSerialNumber").value === ""
        || document.getElementById("textFildMain").value === ""
        || document.getElementById("textFildBrandName").value === ""
        || document.getElementById("textFildPlace").value === ""
        || document.getElementById("textFildMain").value === ""
        || document.getElementById("textFildType").value === ""
        || document.getElementById("textFildManual").value === ""
        || document.getElementById("textFildModel").value === "") {
        document.getElementById("UpalteFile2").disabled = true;
        document.getElementById("UpalteFile2").style.cursor = "no-drop";
        document.getElementById("UpalteFile2").style.backgroundColor='grey';
    }
    else{
    document.getElementById("UpalteFile2").disabled = false;
    document.getElementById("UpalteFile2").style.cursor = "pointer";
    document.getElementById("UpalteFile2").style.backgroundColor='white';
        }
    }




    function redFrames(){ // this function mark input fileds thats empty
    ButtonsElements = document.getElementsByClassName('form-control'); // all inputs fields
    for (var i = 1; i < ButtonsElements.length; i++) {
            if(ButtonsElements[i].value === ""){
                ButtonsElements[i].style.borderColor = 'red'; // if user dont insert input in the text field, the color of border will be red
            }
            else{
                ButtonsElements[i].style.borderColor = ''; // the default border color
            }
        }
    }

    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }


</script>
  </body>
</html>