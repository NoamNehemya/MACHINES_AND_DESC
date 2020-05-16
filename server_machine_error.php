

<?php//Creating this server page is meant to save us the code writing on one server page to create order

$db = mysqli_connect('localhost','root','','test_project');//New connection to the database

if (!$db) {
	echo "failed";

}

$myPhpVar= $_COOKIE['myJavascriptVar_error']; //Creates a machine name page variable within the search bar if it is not found and returns it to a machine error page



/*********************************************************************************** */

$myPhpVar_ComponentType= $_COOKIE['myJavascriptVar']; //Creating a Variable for Component Replacement Page This variable returns to the Component Replacement Page strp one and step two as the machine support

$myPhpVar_support= $_COOKIE['myJavascriptVar_support']; //Creates a variable for the machine component type that a user wants to replace and returns to a step two in component replacement

//drop list two
$query_two = "SELECT s_n FROM components WHERE support NOT LIKE '".$myPhpVar_support."' AND Component_type LIKE '".$myPhpVar_ComponentType."' ";
$result_query_two = mysqli_query($db , $query_two);

//drop list three
$query_three = "SELECT s_n FROM components WHERE support LIKE '".$myPhpVar_support."' AND Component_type LIKE '".$myPhpVar_ComponentType."' ";
$result_query_three = mysqli_query($db , $query_three);
?>