
<?php include('server.php');?>

<html>

<button class="open-button" onclick="openForm()">Replace components</button>

<div class="form-popup" id="myForm" name="myForm" onchange="reload()">
  <form action="/action_page.php" class="form-container">
    <button type="button" onclick="closeForm()" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 id="title_Components_Modification" ><b>Components Modification</b></h3><br>
    
    <label><b>Component Type</b></label><br>
    <select class="form-control" id="DropListType_one" onChange="updateCookie(DropListOneResult() )">
    <?php while($rows = $result_to_dropList_enter_stock->fetch_assoc()):;?>
    <?php echo "<option value={$rows["Component_type"]}>{$rows["Component_type"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>

    <label><b>Add Component</b></label><br>
    <select class="form-control" id="DropListType_two" onChange="updateCookie(DropListOneResult() )">
    <?php while($rows = $result_query_two->fetch_assoc()):;?>
    <?php echo "<option value={$rows["s_n"]}>{$rows["s_n"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>
    
    <label><b>Remove Component</b></label><br>
    <select class="form-control" id="DropListType_three" onChange="updateCookie(DropListOneResult() )">
    <?php while($rows = $result_query_three->fetch_assoc()):;?>
    <?php echo "<option value={$rows["s_n"]}>{$rows["s_n"]}</option>";?>
    <?php endwhile;?>
    </select><br><br>

    <button type="button"  id="submit_Components" class="btn">Submit</button>
    
  </form>
</div>


<script>


function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
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