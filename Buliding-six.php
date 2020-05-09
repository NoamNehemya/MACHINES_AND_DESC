

  <?php include('server.php');?>

  <?php error_reporting(E_ALL ^ E_NOTICE); ?>

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
  
  <link rel="stylesheet" href="Buliding-six.css">
  <link rel="stylesheet" href="AlertbuildingSix.css">

  <?php include('sideNav.php');?>   	
  
  <body>
  

  <div class="row">
    <div class="col_one">
      <p id="explanMachinePage">Select the machine you want to operate on.</p>
    </div>
    <div class="col_two">
          <i class="fa fa-info-circle" id="informationIcon" style="font-size:36px" onclick="openForm()"></i>

          <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
              <button type="button" onclick="closeForm()" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 id="title_info">Machine Status</h3>
              
              <p>Green frame:<span style="color:#006600"> <b>Working</b></span></p>
              <p>Yellow frame:<span style="color:#e6b800"> <b>Set up</b></span></p>
              <p>Red frame:<span style="color:#b30000"> <b>Error</b></span></p>
              
              
            </form>
          </div>
       

  </div>
           

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
    <script src="myscripts.js"></script>
    <script>


// This command save the result of machine ID (support) from array of same class buttons [0..n] and display the pressed machine in machine page (vibration\electro...)  

var machinesButtons = document.getElementsByClassName("btn-btn-outline-dark"); // 'btn-btn-outline-dark' belong to Machine buttons only
for (var i = 0; i < machinesButtons.length; i++) {
  machinesButtons[i].addEventListener("click", function(e) { // after click on any machine button 
    localStorage.setItem('PassVar',this.id); // save the machine id button (support number) to variable 
    location.href=check(this.id); // Move to page machine (vibration\electro...) 
    });
}


// get variable (component_type value from pageStockEnter.php)
var support = localStorage.getItem('PassVar');
// set title to explanMachinePage title according to support sent variable

// use cookie for using var javaScript in PHP code
document.cookie = "myJavascriptVar = " +  support;
// Refresh page once while loaded (initialize), its necessary because page recognize cookie only after refresh


    
    var support_php = <?php echo json_encode($phpArray_support); ?>; // insert php array (support values) to JS array
    var machineStatus_php = <?php echo json_encode($phpArray_status); ?>; // insert php array (status values) to JS array
    var machineType_php = <?php echo json_encode($phpArray_machineType); ?>; // insert php array (machineType values) to JS array

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

    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }



    
</script>
  </body>
</html>