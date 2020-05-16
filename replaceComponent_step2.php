<?php include('server.php');?>
<?php include('server_machine_error.php');?>


<script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>



<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>
     
    

    <title>Replace Component</title>

   <style>


            #explanMachinePage {
              margin-left:100px;
              margin-top: 20px;
              font-size: 25px;
            }

            #Machine_support_title {

            color: rgb(22, 105, 105);

            margin-left: 100px;
            font-size:40px;
            margin-top:50px;
          }

          #Text_Area_droplist_to_replce {

          width: 1000px;
          margin-left:250px;
          margin-top: 60px; 
          height: 400px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #669999;
          border-radius: 4px;
          background-color: #f8f8f8;
          resize: none;
          font-family: "Noto Sans", sans-serif;
          text-align: center;

        }

       #DropListType_two {
        margin-left:130px;
        width: 700px;
        height: 40px;
        text-align: center;
        font-size: 10px;
        background-color: white;
        border-style:groove;
        
      }

      #DropListType_three {
        margin-left:130px;
        width: 700px;
        height: 40px;
        text-align: center;
        font-size: 10px;
        background-color: white;
        border-style:groove;
        
      }

      .labels {

        margin-top:15px;
      }

      #submit_Components2 {

        width: 450px;
        margin-left: 15px;
        background-color: rgb(62, 133, 113);
        margin-top:15px;
      }

            
   </style>


<head>
<?php include('sideNav.php');?>   

  <body>

  <p id="Machine_support_title">Replacing and Updating Machine  Components.</p>
              
  <p id="explanMachinePage"></p>

  <form id="Text_Area_droplist_to_replce">

    <label class="labels"><b>Add Component</b></label><br>
    <select class="form-control" id="DropListType_two">
   
    
    </select><br><br>
    
    <label><b>Remove Component</b></label><br>
    <select class="form-control" id="DropListType_three">

   
    </select><br><br>

    <button type="button"  id="submit_Components2" class="btn" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" >Submit</button>

  </from>


                  
                  
   
                       
                    
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script>

    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array
    var machineType_php = <?php echo json_encode($phpArray_machineType); ?>; // insert php array (machineType values) to JS array

    
                    

   
      
    // get variable (component_type value from replaceComponentStep1.php)
    var ComponentType = localStorage.getItem('PassVar_one');

    var support = localStorage.getItem('PassVar');

    // set title to explanMachinePage title according to ComponentType variable
    document.getElementById("explanMachinePage").innerHTML = "You have chosen to update a component type: " + ComponentType +" "+" "+ "in Machine: " + support + ".";

    // use cookie for using var javaScript in PHP code
    document.cookie = "myJavascriptVar = " +  ComponentType ;
    document.cookie = "myJavascriptVar_support = " +  support ;

   

        window.onload = function() { // refresh on page loading
        if(!window.location.hash) {
          window.location = window.location + '#loaded?ID=' + ComponentType;
            window.location.reload();
        }
      }


</script>
  </body>
</html>