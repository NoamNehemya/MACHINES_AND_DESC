

<?php//Creating this server page is meant to save us the code writing on one server page to create order

$conn = mysqli_connect('localhost','root','','test_project');//New connection to the database

if (!$conn) {
	echo "failed";

}

$myPhpVar= $_COOKIE['myJavascriptVar_error']; //Creates a machine name page variable within the search bar if it is not found and returns it to a machine error page

$myPhpVar_support= $_COOKIE['myJavascriptVar']; //Creating a Variable for Component Replacement Page This variable returns to the Component Replacement Page strp one and step two as the machine support

$myPhpVar_type_Component= $_COOKIE['myJavascriptVar_type']; //Creates a variable for the machine component type that a user wants to replace and returns to a step two in component replacement

?>