<html>
<?php
	if ($c=OCILogon("ora_cazhang", "a34466326", "dbhost.students.cs.ubc.ca:1522/stu")) {
		/*echo "Successfully connected to Oracle.\n";*/
		OCILogoff($c);
	} else {
		$err = OCIError();
		echo "Oracle Connect Error " . $err['message'];
	}
?>
</html>