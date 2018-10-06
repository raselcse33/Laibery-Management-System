<?php include "connection.php";?>

<?php
	$id = $_GET['id'];
	$date = date("d-m-Y");

	$sql = "UPDATE issubooks
	SET books_return_date = '$date'
	WHERE id =$id";
	$result =  mysqli_query($conn, $sql);


	$sql1 = "SELECT books_name FROM issubooks WHERE id = $id";
    $result = mysqli_query($conn, $sql1);
    while($row = mysqli_fetch_assoc($result)){
    	$books_name = $row['books_name'];
    }
    $string = str_replace(' ', '', $books_name); // Replaces all spaces with hyphens.
    $booksname = preg_replace('/[^A-Za-z0-9\-]/', '', $string);




    $sql3 = "UPDATE addbook SET avaiable_qty =avaiable_qty+1 WHERE books_name = '$booksname'";
    $result = mysqli_query($conn, $sql3);

	if($result)
	{
		header("location: returnbooks.php");
	}


?>