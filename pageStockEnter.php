<?php 

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}

$query="SELECT DISTINCT Component_type FROM components";
$result = mysqli_query($conn , $query);
?>


<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>Component Stock</title>

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

           width: 650px;
           margin-top: 250px;
           margin-left: 450px;


        }

          
    </style>

<head>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>

  <body>

  <ol id="new-projects"></ol>
 
<script>
$( "#new-projects" ).load( "SideNav.html" );
</script>
              
                  <p id="explanMachinePage">Select the type of component you want to view its inventory</p>

               <div class="column" id="MainArea">
                        <select class="DropDown" id="DropListType" onChange="submitActiveOrDimmed()">
                        <option>Select component type...</option>
                        <?php while($rows = $result->fetch_assoc()):;?>
                        <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
                        <?php endwhile;?>
                        </select>
        
 

                  <button type="button" id="submit" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" >Submit </button>
                  
                </div>


            

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>

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
  localStorage.setItem('PassVar',document.getElementById('DropListType').options[document.getElementById('DropListType').selectedIndex].innerHTML); // Set variable (component_type value) for resultSearch page
  location.href='resultSearch.php'; // Move to resultSearch.php page
}

// this command is about insert input in SearchSupport text box, and after pressing on 'Enter' in keyboard, the system save the data
// inside the text box for page machine (vibration\electro...) and move to this page. 

document.getElementById('SearchSupport').onkeypress=function(e){
    if(e.keyCode==13){ // key is 'Enter' in keyboard
        localStorage.setItem('PassVar',document.getElementById('SearchSupport').value); // Set variable (support value) for machine page
        location.href='vibration_machines.php'; // Move to page machine (vibration\electro...)
    }
}

</script>
  </body>
</html>