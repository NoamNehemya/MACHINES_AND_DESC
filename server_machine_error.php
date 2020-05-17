<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}

$myPhpVar= $_COOKIE['myJavascriptVar_error'];

$myPhpVar_support= $_COOKIE['myJavascriptVar'];

$myPhpVar_type_Component= $_COOKIE['myJavascriptVar_type'];

?>