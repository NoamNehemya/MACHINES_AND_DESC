<?php include('server.php');?>

<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b06c582af3.js" crossorigin="anonymous"></script>

    <title>insert component</title>

   <style>
		body {
	  font-family: "Lato", sans-serif;
	}

	.sidenav {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
      opacity: 0.9;
	  overflow-x: hidden;
	  transition: 0.5s;
	  padding-top: 60px;
	}

	.sidenav a {
	  padding: 8px 8px 8px 32px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display: block;
	  transition: 0.3s;
	}

	.sidenav a:hover {
	  color: #f1f1f1;
	}

	.sidenav .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;
	}

	#main {
	  transition: margin-left .5s;
	  padding: 16px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}

		   
        .container{
           font-size: 20;
           margin-top: 20px;
           margin-bottom: 60px;
        }

       

        .jumbotron-jumbotron-fluid{

            height: 90px;
            background-color: #E1F3EE;
            margin-bottom: 0px;
            padding-top: 5px;
            padding-bottom: 20px;


        }

        .form-control-mx-sm-3{

            width: 650px;
            margin-left: 182px;
        }

       
        #Confirm {

            margin-left: 182px;
            width: 650px;
            margin-top: 35px;
            padding-inline-end: 20px;
            margin-block-end: 50px;

        }

        


        #logout {

         margin-left:1090px;
          margin-top: 20px;
          width: 200px;
         
        }

      #titleOFpage{

          margin-top: 20px;
          margin-left: 50px;
      }
	  

      #backPage {

        margin-top:20px;
        margin-left: 15px; 
      }

      #homePage {

        margin-top:20px;
        margin-left: 15px; 
        }

        #PrintPage{

        margin-top:20px;
        margin-left:15px;  
        }


        #SearchSupport {

          margin-left:730px;
          margin-top: 20px;

        }

        #History {

        margin-top:25px;
        margin-left: 15px;  
        }

        #Incorrect {

        margin-top:25px;
        margin-left: 15px;  
        }

        #insert {

        margin-top:0px;
        margin-left: 0px;
        }

        #ComponentPool {

        margin-top:25px;
        margin-left: 15px;

        }

     

        #explanMachinePage{
            margin-left:100px;
            margin-top: 40px;
            font-size: 25px;
            margin-bottom: 55px;
        }

        /**labels**/

        .col-sm-1-col-form-label-col-form-label-sm {

            font-size: 18px;


        } 

        /**סידור עמודות בטופס**/

        .col1 {

            margin-left: 120px;
            margin-top: 15px;
            width: 150px;

        }

        .col2 {

            margin-left: 0;
            margin-top: 15px;
            width: 200px;
        }

        .col3 {

            margin-left:250px;
            margin-top: 15px;
            width: 150px;
        }

        .col4 {

            margin-left:10px;
            margin-top: 15px;

        }

        .col5 {

            margin-left: 1250px;
            margin-top: 25px;
        }

        /*drop down desins*/

        .DropDowns {

       
            width: 220px;
            margin-top: 5px;
            border-style:ridge;
            border-color: #313332;
            background-color:white;
            color: black;
        }

        #UpalteFile1 {

            width: 220px;
        }


        #UpalteFile2 {

            width: 170px;
        }



    

        
        
    </style>


  <head>
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
                        <h1 class="display-5" id="titleOFpage">Add a component</h1>
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

    <div class="column" id="MainArea">

                   <p id="explanMachinePage">Complete the information needed to add a component to the factory component stock.</p>

                   <form method="post" action="insertComponent.php" id="inputingComponentDetail">
                   <?php include('errors.php'); ?>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Support:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" placeholder="Insert Support" id="textFildSupport" name="support" value="<?php echo $support; ?>">
                        </div>

                        <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Manual:</label>
                        </div>

                        <div class="col4">
                            <input type="text" class="form-control" placeholder="insert Manual" id="textFildManual" name="manual" value="<?php echo $manual; ?>">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Serial Number:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" placeholder="insert Serial Number" id="textFildSerialNumber" name="serial_num" value="<?php echo $serial_num; ?>">
                        </div>

                        <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Brand Name:</label>
                        </div>

                        <div class="col4">
                            <input type="text" class="form-control" placeholder="insert Model type" id="textFildModeltype" name="brand_name" value="<?php echo $brand_name; ?>">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Main:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" placeholder="insert Main" id="textFildMain" name="main" value="<?php echo $main; ?>">
                        </div>

                        <div class="col3">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">S/N</label>
                            </div>

                        <div class="col4">
                               <input type="text" class="form-control" placeholder="insert s/n"  id="textFilds/n" name="s_n" value="<?php echo $s_n; ?>">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col1">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Department:</label>
                        </div>

                        <div class="col2">
                            <input type="text" class="form-control" placeholder="insert Department" id="textFildDepartment" name="Department" value="<?php echo $Department; ?>">
                        </div>

                        <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Image:</label>
                        </div>

                        <div class="col4">
                            <input type="file" class="btn btn-outline-dark"  id="UpalteFile1" name="upalte_image" value="<?php echo $upalte_image; ?>">
                        </div>
                    
                    </div>

                        <div class="form-group row">

                            <div class="col1">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Model:</label>
                            </div>
    
                            <div class="col2">
                                <input type="text" class="form-control" placeholder="insert Model" id="textFildModel" name="model" value="<?php echo $model; ?>">
                            </div>

                            <div class="col3">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Type:</label>
                            </div>

                            <div class="col4">
                                <input type="text" class="form-control" placeholder="insert type"  id="textFildType" name="type" value="<?php echo $type; ?>">
                            </div>
    
                        </div>

                        <div class="form-group row">

                            <div class="col1">
                                <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Place:</label>
                            </div>
    
                            <div class="col2">
                                <input type="text" class="form-control" placeholder="insert Place" id="textFildPlace" name="place" value="<?php echo $place; ?>">
                            </div>

                            <div class="col3">
                            <label for="colFormLabelSm" class="col-sm-1-col-form-label-col-form-label-sm">Component Type:</label>
                        </div>

                        <div class="col4">
                            <select class="DropDowns" id="DropListType" name="Component_Type" value="<?php echo $Component_Type; ?>">
                            <?php while($rows = $result_list->fetch_assoc()):;?>
                                <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
                            <?php endwhile;?>
                              </select>
                        </div>
    
                        </div>

                        <div class="form-group row">

                            <div class="col5">

                                <button type="submit" name="insertComponentBtn" class="btn btn-outline-dark" value="hover" onmouseover="this.style.backgroundColor='#669999';return true;" onmouseout="this.style.backgroundColor='white';return true;" id="UpalteFile2">Submit</button>
                                
                            </div> 
                        </div>


                        
    
    


                   </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
  document.getElementById("main").style.marginLeft = "65px";
  document.getElementById("titleMachine").style.marginLeft = "60px";

  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginLeft = "0px";
  document.getElementById("home_Page").style.marginLeft = "0px";
  document.getElementById("Brint").style.marginLeft = "0px";

  document.getElementById("explanMachinePage").style.marginLeft = "130px";
  document.getElementById("inputingComponentDetail").style.marginLeft = "45px";
  document.getElementById("UpalteFile2").style.marginLeft = "0px";

  document.getElementById("MainArea").style.marginLeft = "50px";

    /*trasionts!*/

  document.getElementById("titleMachine").style.transition = "0.5s";
  document.getElementById("Search_Machine").style.transition = "0.5s";
  document.getElementById("back_Page").style.transition = "0.5s";
  document.getElementById("home_Page").style.transition = "0.5s";
  document.getElementById("Brint").style.transition = "0.5s";
  document.getElementById("inputingComponentDetail").style.transition = "0.5s";
  document.getElementById("explanMachinePage").style.transition = "0.5s";
  document.getElementById("UpalteFile2").style.transition = "0.5s";
  document.getElementById("MainArea").style.transition = "0.5s";

  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("titleMachine").style.marginLeft = "0px";

  document.getElementById("Search_Machine").style.marginLeft = "0px";
  document.getElementById("back_Page").style.marginRight = "0";
  document.getElementById("home_Page").style.marginRight = "0";
  document.getElementById("Brint").style.marginRight = "0";

  document.getElementById("explanMachinePage").style.marginLeft = "100px";
  document.getElementById("inputingComponentDetail").style.marginLeft = "0px";


  document.getElementById("MainArea").style.marginLeft = "0px";

}





// this command is about insert input in SearchSupport text box, and after pressing on 'Enter' in keyboard, the system save the data
// inside the text box for page machine (vibration\electro...) and move to this page. 

document.getElementById('SearchSupport').onkeypress=function(e){
    if(e.keyCode==13){ // key is 'Enter' in keyboard
        localStorage.setItem('PassVar',document.getElementById('SearchSupport').value); // Set variable (support value) for machine page
        location.href='vibration_mashines.php'; // Move to page machine (vibration\electro...)
    }
}

</script>
  </body>
</html>