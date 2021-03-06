<?php include('server.php');?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>



<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>History Table</title>
<!-- MDB icon -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="css/style.css">



<!-- MDBootstrap Datatables  -->
<link href="datatables/datatables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="datatables/datatables.min.js"></script>
<script type="text/javascript" src="datatables/datatables-select.min.js"></script>


 
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <script>
    $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });  </script>
  </script>

<!--page-item active-->


  <title>History Table</title>

 <style>

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {


bottom: .5em;
}
li.paginate_button a{
color: rgb(20, 20, 20);
}
li.paginate_button.page-item.active a {
background-color: rgb(20, 20, 20);
border-color: rgb(20, 20, 20);
}

#VisualStatusButton {

 
  margin-left:440px;
  margin-top:40px;
}






 
  </style>

</head>

  <?php include('sideNav.php');?>   

  <body>

  <div id="includedContent"></div>  

    <div class="column p-5" id="MainArea">

               <div class="row">
                 <div class="column" id="column1" style="padding-left:0px;padding-right:0px;float-left">

                  <p id="explanMachinePage">This table shows all components found in factory machinery.</p>
                 </div>

                 <div class="column "  id="column2" style="padding-left:0px;padding-right:0px;float-right">
               <button type="button" class="btn btn-outline-dark " onclick="location.href='PowerBiDashboard.php';" id="VisualStatusButton">Visual status report</button>
                    </div>
               </div>

               

              <table id="dtBasicExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Fault Number
      </th>
      <th class="th-sm">Component Type
      </th>
      <th class="th-sm">ID Component
      </th>
      <th class="th-sm">Serial number
      </th>

    </tr>
  </thead>

          <?php
             while($rows = mysqli_fetch_assoc($result_incorrect_table)) {

          ?>
  
                 <tr>
                    <th scope="row"><?php echo $rows['FaultNumber']; ?></th>
                    <td><?php echo $rows['Component_type']; ?></td>
                    <td><?php echo $rows['Component_ID']; ?></td>
                    <td><?php echo $rows['s_n']; ?></td>
                  </tr>

 

                <?php
                    }
                ?>
  <tfoot>
    <tr>
      <th>Fault Number
      </th>
      <th>Component Type
      </th>
      <th>ID Component
      </th>
      <th>Serial number
    </tr>
  </tfoot>
</table>


            </div>
            

            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script>

    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array
    var machineType_php = <?php echo json_encode($phpArray_machineType); ?>; // insert php array (machineType values) to JS array
	
    if(window.location.href.substr(-2) !== "?r") { // refresh second time
        window.location = window.location.href + "?r";
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