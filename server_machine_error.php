
<?php

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}

$myPhpVar= $_COOKIE['myJavascriptVar_error'];

?>