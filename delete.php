<?php
$connect=mysqli_connect("localhost","root","","shkolla");
mysqli_select_db($connect,"shkolla");

if(isset($_GET['delete'])){ // e merr vleren e delete
	
	$delete_id = $_GET['delete'];
	
	$delete_query = "DELETE FROM nxenesi WHERE nid='$delete_id' ";
	
	if(mysqli_query($connect, $delete_query)){
	
	echo "<script>alert('Nxenesi eshte Fshire');</script>";
        
    echo "<script>window.open('viewFile(Update&Delete).php','_self');</script>";

	}
}
?>