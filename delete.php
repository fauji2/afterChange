<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$sql = "DELETE FROM student WHERE id=7";
	if(mysqli_query($conn, $sql)) {
		echo "data deleted";
		header ("Location: index.php");
	}else{
		echo "Ereor: ".sql."<br>".mysqli_error($conn);
	}
}
?>