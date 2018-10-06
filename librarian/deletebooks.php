<?php include "connection.php";?>

<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM addbook WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);

	if($result){
		 header("location: booksdisplay.php");
	}
}


?>