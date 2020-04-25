<?php include('server.php');?>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>History Table</title>

   <style>

         #historyTable {
            margin-top: 60px;
            margin-left: 20px;       
          }

          #VisualStatusButton{
           width: 300px;
          }

          #IncorrectTable {
            margin-top: 60px;
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

    <p id="explanMachinePage">This table shows the treatment history for all factory machines.</p>

    <div class="column" id="MainArea">

               <div class="row">
                 <div class="column" id="column1">

                 
                 </div>

                 
              
               </div>

               

               <table class="table table-hover" id="HistoryTable">
                <thead>
                  <tr>
                    <th scope="col">Update Number</th>
                    <th scope="col">Employee's Name</th>
                    <th scope="col">Change Date</th>
                    <th scope="col">Component - Type</th>
                    <th scope="col">Component - ID</th>
                    <th scope="col">Previous Machine - ID</th>
                    <th scope="col">New Machine - ID</th>
                    

                  </tr>
                </thead>
                
                <?php
                     while($rows = mysqli_fetch_assoc($result_histroy_table)) {

                ?>

                <tbody>
                  <tr>
                    <th scope="row"><?php echo $rows['Update_Number']; ?></th>
                    <td><?php echo $rows['UserName']; ?></td>
                    <td><?php echo $rows['UpdateDate']; ?></td>
                    <td><?php echo $rows['Component_type']; ?></td>
                    <td><?php echo $rows['Component_ID']; ?></td>
                    <td><?php echo $rows['OldMachine']; ?></td>
                    <td><?php echo $rows['NewMachine']; ?></td>

                  </tr>
            
                </tbody>
                
                <?php
                    }
                ?>

              </table>
             <div>
            

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>

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