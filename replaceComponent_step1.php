<?php include('server.php');?>
<?php include('server_machine_error.php');?>


<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Replace Component</title>

    <style>

        #IncorrectTable {

         margin-top: 60px;
         margin: 60px 25px 25px 25px;
                
        }

        #DropListType {
          margin-top: 100px;
          margin-left: 450px;
          width: 650px;
          height: 50px;
          text-align: center;
          font-size: 18px;
          background-color: white;
          border-style:groove;
          
         }

        #submit {

           width: 450px;
           margin-top: 100px;
           margin-left: 550px;
           
        }

        #Machine_support_title {

          color: rgb(22, 105, 105);

          margin-left: 100px;
          font-size:40px;
          margin-top:50px;
        }

        #explanMachinePage_replace_component {

          margin-left: 100px;
          font-size:25px;
          margin-top:20px;


        }



          
    </style>

<head>

<?php include('sideNav.php');?>  

                  <p id="Machine_support_title">Machine:  <?php echo $myPhpVar_support; ?> </p>

              
                  <p id="explanMachinePage_replace_component">Select the type of component you want to replace component.</p>

               <div class="column" id="MainArea">
                        <select class="DropDown" id="DropListType" onChange="submitActiveOrDimmed()">
                        <option>Select component type...</option>
                        <?php while($rows = $result_to_dropList_enter_stock->fetch_assoc()):;?>
                        <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
                        <?php endwhile;?>
                        </select>

                  <button type="button" id="submit" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" >Go! </button>
                  
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

      if(document.getElementById("DropListType").value === "Select component type..."){
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.cursor = "no-drop";
        document.getElementById("submit").style.backgroundColor='grey';
      }
      else{
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.cursor = "pointer";
        document.getElementById("submit").style.backgroundColor='white';
      }
    }

    // use submitButtonActions() function where clicking on 'Submit' button
    document.getElementById("submit").addEventListener("click", submitButtonActions);


    function submitButtonActions() {
      localStorage.setItem('PassVar_one',document.getElementById('DropListType').options[document.getElementById('DropListType').selectedIndex].innerHTML);  // Set variable (component_type value) for replaceComponent_step2.php
      location.href='replaceComponent_step2.php'; 
    }
   

  
        window.onload = function() { // refresh on page loading
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
      }


</script>
  </body>
</html>