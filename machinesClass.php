
<?php

$conn = mysqli_connect('localhost','root','','test_project');

if (!$conn) {
	echo "failed";

}


$query = "SELECT support,Machine_type,machineStatus FROM machines WHERE Machine_type LIKE 'VIBRATION MACHINES' OR Machine_type LIKE 'ELECTROTHERM BO FURNACE'";
$resultQ = mysqli_query($db, $query);
    while ($row = mysqli_fetch_object($resultQ)) {
		printf($row->support);
		printf("->");
		printf($row->Machine_type);
		printf("->");
		printf($row->machineStatus);
        printf(", ");
	}
	
	mysqli_free_result($resultQ);
?>