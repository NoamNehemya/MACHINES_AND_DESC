<?php 

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}
// Set PHP variable using created cookie (cookie 'myJavascriptVar' created on the buttom code)
$myPhpVar= $_COOKIE['myJavascriptVar'];
$query="SELECT * FROM components WHERE Component_type = '".$myPhpVar."'";
$result = mysqli_query($conn , $query);
?>


<script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>



<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>
     
    

    <title>Component Type - result</title>

   <style>

            #ComponentTable {
                margin-top: 60px;
                margin: 60px 25px 25px 25px;
                margin-left: 30px;      
            }

            #explanMachinePage {
              margin-left:100px;
              margin-top: 40px;
              font-size: 30px;
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

  <body>
  

               
  <p id="explanMachinePage"></p>
                  
                  
    <div class="column" id="MainArea">

               <div class="row">
                 <div class="column" id="column1">

                 
                 </div>

                 
              
               </div>

                
               <table class="table table-hover" id="ComponentTable">
                <thead>
                      <tr>
                         <th scope="col">Row #</th>
                         <th scope="col">Main</th>
                         <th scope="col">Support</th>
                         <th scope="col">Brand Name</th>
                         <th scope="col">Place</th>
                         <th scope="col">Model</th>
                         <th scope="col">Serial Number</th>
                         <th scope="col">Image</th>
                
                       </tr>
                </thead>

                <?php
                     while($rows = mysqli_fetch_assoc($result)) {

                ?>

                <tbody>
                  <tr>
                    <th scope="row"><?php echo $rows['code']; ?></th>
                    <td><?php echo $rows['main']; ?></td>
                    <td><?php echo $rows['support']; ?></td>
                    <td><?php echo $rows['brandname']; ?></td>
                    <td><?php echo $rows['place']; ?></td>
                    <td><?php echo $rows['model']; ?></td>
                    <td><?php echo $rows['s_n']; ?></td>    
                    <td><img src="<?php echo $rows['image']?>" onclick = "window.open(this.src)" id="viewImage" width="75px"/> </td>   
                  </tr>                                                      
                  
                    
                </tbody>

                <?php
                    }
                ?>

              </table>
                  </div>
               
                       
                    
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>


var table = document.getElementById("ComponentTable");
for (var i = 1, rows; i < table.rows.length; i++) { //iterate through rows
  if (table.rows[i].cells[7].querySelector('img').getAttribute('src').length > 0) { // cell 7 = image column
    continue; // if there is image data (link) in the row, than continue
  }
    else{
      table.rows[i].cells[7].querySelector('img').src = "http://www.up2me.co.il/imgs/31676683.jpg"; // change empty data to 'no image' icon
      table.rows[i].cells[7].querySelector('img').style.width="35px"; // change icon size to be smaller than image thumbnail
      table.rows[i].cells[7].querySelector('img').style.cursor = "no-drop"; 
      table.rows[i].cells[7].querySelector('img').onclick = null; // no event after click on 'no image' icon
  }                                   
   }  


// get variable (component_type value from pageStockEnter.php)
var ComponentType = localStorage.getItem('PassVar');

// set title to explanMachinePage title according to ComponentType variable
document.getElementById("explanMachinePage").innerHTML = "Component type: " + ComponentType ;

// use cookie for using var javaScript in PHP code
document.cookie = "myJavascriptVar = " +  ComponentType

// Refresh page once while loaded (initialize), its necessary because page recognize cookie only after refresh
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
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