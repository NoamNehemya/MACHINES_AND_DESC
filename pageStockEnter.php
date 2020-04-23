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
  
  <link rel="stylesheet" href="SideNav.css">

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
                         <button class="btn btn-light" style="text-align:center;" onclick = "location.href='historyTable.php';" data-toggle="tooltip"  title="Machine Therapy History" id="History"><img src="http://www.up2me.co.il/imgs/77306062.png" alt="" style="width:"></button>
                         </div>
                    <div class="column" id="backPage1">
                        <button class="btn btn-light" style="text-align:center;" onclick = "location.href='incorrcetTable.php';"  data-toggle="tooltip" data-placement="bottom" title="Incorrect Components" id="Incorrect"><img src="http://www.up2me.co.il/imgs/46232313.png" alt="" style="width:"></button>
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
                <h1 class="display-5" id="titleOFpage">Component Stock</h1>
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
				  
  </head>   
  

         
              
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
  document.getElementById("titleMachine").style.marginLeft = "85px";

  

  
  document.getElementById("explanMachinePage").style.marginLeft = "200px";
 /* document.getElementById("titleMachine").style.marginLeft = "80px"; */
  document.getElementById("MainArea").style.marginLeft = "20px";

  /*trasionts!*/

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  document.getElementById("MainArea").style.transition = "0.5s";

  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "0px";

  document.getElementById("explanMachinePage").style.marginLeft = "85px";
 /* document.getElementById("titleMachine").style.marginLeft = "0"; */
  document.getElementById("MainArea").style.marginLeft = "0px";

}

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