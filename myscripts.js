

// this command is about insert input in SearchSupport text box, and after pressing on 'Enter' in keyboard, the system save the data
// inside the text box for page machine (vibration\electro...) and move to this page. 

document.getElementById('SearchSupport').onkeypress=function(e){
    if(e.keyCode==13){ // key is 'Enter' in keyboard
        localStorage.setItem('PassVar',document.getElementById('SearchSupport').value); // Set variable (support value) for machine page
        location.href=check(document.getElementById('SearchSupport').value); // Move to page machine (vibration\electro...)
    }
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
    else{ 
        // move to next iteration
    }
    }
    
      //creat variable for machine error page - push into support that not found machine mach and display in to machineError.php page
      document.cookie = "myJavascriptVar_error = " +  number;
      return "machineError.php"; // if all loop over, than machine not presented on the DB, so moving to machineError.php page

      //creat variable for machine error page - push into support that not found machine mach and display in to machineError.php page
      document.cookie = "myJavascriptVar_support_support_replace = " +  support_replace;
      return "machineError.php"; // if all loop over, than machine not presented on the DB, so moving to machineError.php page
    }
       