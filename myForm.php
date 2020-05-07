
<?php include('server.php');?>



<html>

<button class="open-button" onclick="openForm()">Replace components</button>

<div class="form-popup" id="myForm" name="myForm">
  <form action="/action_page.php" class="form-container">
    <button type="button" onclick="closeForm()" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 id="title_Components_Modification" ><b>Components Modification</b></h3><br>
    
    <label><b>Component Type</b></label><br>
    <select class="form-control" id="DropListType_one">
    <?php while($rows = $result_to_dropList_enter_stock->fetch_assoc()):;?>
    <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>

    
    <button type="button" onclick="openForm2(); updateCookie(DropListOneResult() )" id="submit_Components" class="btn">Submit</button>
    
  </form>
</div>


<script>


function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function openForm2() {
    document.getElementById("myForm2").style.display = "block";
    document.getElementById("myForm").style.display = "none";
  }

  function closeForm2() {
    document.getElementById("myForm2").style.display = "none";
  }



  function DropListOneResult() { // return the value of selected option of Drop list one (component type)
    return document.getElementById('DropListType_one').options[document.getElementById('DropListType_one').selectedIndex].innerHTML;
  }

 function updateCookie(x){
  document.cookie = "headvalue="+x; // store value of DropListOneResult in JS cookie
 } 

 function reload(){
    var container = document.getElementById("myForm");
    var content = container.innerHTML;
    container.innerHTML= content; 
    
   
}

</script>



</html>