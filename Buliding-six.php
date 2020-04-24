<?php 

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}
// conncection to DB and store query of building 6 into php array
$machine_support_query= "SELECT * FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
$machine_support_result = mysqli_query($conn , $machine_support_query);
$phpArray_support = array(); // create new PHP array

while($row = mysqli_fetch_assoc($machine_support_result)){
    $phpArray_support[] = $row['support']; // insert support query into php array
}  

$machine_machineType_query= "SELECT Machine_type FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
$machine_machineType_result = mysqli_query($conn , $machine_machineType_query);
$phpArray_machineType = array(); // create new PHP array

while($row = mysqli_fetch_assoc($machine_machineType_result)){
    $phpArray_machineType[] = $row['Machine_type']; // insert machine type query into php array
}  
// conncection to DB and store query of building 6 into php array

$machine_status_query= "SELECT machineStatus FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
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

   </style>



<head>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>

  <body>

  <ol id="new-projects"></ol>

<script>
$( "#new-projects" ).load( "SideNav.html" );
</script>
  <link rel="stylesheet" href="Buliding-six.css">


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
    if (machineType_php[i] === 'VIBRATION MACHINES'){
      return "vibration_machines.php";
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
   // remove this items from support array because they dont presented on this screen (building 6)
    var itemtoRemove = "1094";
    support_php.splice($.inArray(itemtoRemove, support_php), 1);
    var itemtoRemove = "1279";
    support_php.splice($.inArray(itemtoRemove, support_php), 1);
    var itemtoRemove = "1468";
    support_php.splice($.inArray(itemtoRemove, support_php), 1);

    machineStatus_php.splice(0,1); // index of '1094'
    machineStatus_php.splice(2,1); // index of '1279'
    machineStatus_php.splice(12,1); // index of '1468'

    machineType_php.splice(0,1); // index of '1094'
    machineType_php.splice(2,1); // index of '1279'
    machineType_php.splice(12,1); // index of '1468'
   
    // this loop configure the button border color according to machine status (in DB)
    for (var i = 0; i < support_php.length; i++) {
        if(machineStatus_php[i] === "Working"){
          document.getElementById(support_php[i]).style.borderColor = '#00ff40'; // green color
        }
        else if(machineStatus_php[i] === "Set-up"){
          document.getElementById(support_php[i]).style.borderColor = 'yellow';
        }
        else{
         document.getElementById(support_php[i]).style.borderColor = 'red';
        }
    }

 
//
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