<?php include "connection.php";?>
<?php
if(isset($_GET['books_name'])){
	$booksname = $_GET['books_name'];
}


 $string = str_replace(' ', '', $booksname); // Replaces all spaces with hyphens.
 $bookname = preg_replace('/[^A-Za-z0-9\-]/', '', $string);


var_dump($bookname);
var_dump("PHP");



?>



	


