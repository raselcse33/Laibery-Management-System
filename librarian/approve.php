<?php include "connection.php";?>

<?php
$id = $_GET['id'];
$sql = "UPDATE student_registation SET status='yes' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
     header("location: display_student_info.php");
} 

mysqli_close($conn);


?>