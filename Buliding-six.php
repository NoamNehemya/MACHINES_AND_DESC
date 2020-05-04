

  <?php include('server.php');?>
  <?php include('machinesClass.php');?>
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
  
  <link rel="stylesheet" href="SideNav.css">
  <link rel="stylesheet" href="Buliding-six.css">
  <link rel="stylesheet" href="AlertbuildingSix.css">


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
                <h1 class="display-5" id="titleOFpage">Map - Building 6</h1>
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
  document.getElementById("titleMachine").style.marginLeft = "150px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginLeft = "0px";
  document.getElementById("home_Page").style.marginLeft = "0px";
  document.getElementById("Brint").style.marginLeft = "0px";
  document.getElementById("explanMachinePage").style.marginLeft = "272px";

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  
}

function closeNav() {
 document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "60px";
  document.getElementById("explanMachinePage").style.marginright = "0px";
  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginRight = "0";
  document.getElementById("home_Page").style.marginRight = "0";
  document.getElementById("Brint").style.marginRight = "0";

  document.getElementById("explanMachinePage").style.marginLeft = "180px";
 
}

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