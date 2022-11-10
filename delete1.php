<?php
$connect=mysqli_connect("localhost","root","","shkolla");
mysqli_select_db($connect,"shkolla");

if(isset($_GET['delete'])){ // e merr vleren e delete
	
	$delete_id = $_GET['delete'];
	
	$delete_query = "DELETE FROM mesimdhenesi WHERE mid='$delete_id' ";
	
	if(mysqli_query($connect, $delete_query)){
	
	echo "<script>alert('Mesimdhenesi eshte Fshire');</script>";
        
    echo "<script>window.open('viewFile(Update&Delete)1.php','_self');</script>";

	}
}
?>