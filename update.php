<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Update </title>
    </head>
    
    <body>
    <?php
        $connect=mysqli_connect("localhost","root","","shkolla");
            mysqli_select_db($connect,"shkolla");

        if(isset($_GET['update'])){

            $update_id = $_GET['update'];

            $select = "SELECT * FROM nxenesi WHERE nid='$update_id'";
	
            $query = mysqli_query($connect, $select);

          
	  $row=mysqli_fetch_array($query)
    ?>
     <form method='post' action="update_ID.php" enctype="multipart/form-data">
        <input type="hidden" name="nid" value="<?php echo $row['nid'];?>">
         Emri:<input type="text" name="emri" value="<?php echo $row['emri'];?>">
        <br><br>
          mbiemri:<input type="text" name="mbiemri" value="<?php echo $row['mbiemri'];?>">
        <br><br>
          email:<input type="email" name="email" value="<?php echo $row['email'];?>">
        <br><br>
          mosha:<input type="text" name="mosha" value="<?php echo $row['mosha'];?>">
        <br><br>
          password:<input type="password" name="password" value="<?php echo $row['password'];?>">
        <br><br>
          confirmpassword:<input type="password" name="confirmpassword" value="<?php echo $row['confirmpassword'];?>">
        <br><br>
          Numri i Telefonit:<input type="text" name="nrtelefonit" value="<?php echo $row['nrtelefonit'];?>">
        <br><br>
         
       
        <input type="submit" name="update" value="Update"> <!-- butoni na qon te update_ID -->
    
        <?php } ?>  
    </form>
    </body>
</html>