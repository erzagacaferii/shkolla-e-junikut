<?php
    session_start();
?>

<html>
	<head>
		<title>Login</title>
		
    <!--     <link rel="stylesheet" > -->
	</head>

    <body>
      <form method="post" action="">
         user: <input type="text" name="username"><br><br>
           password: <input type="password" name="password"><br><br>
            <input type="submit" name="login" value="Log in">
            <input type="reset" name="cancel" value="Cancel">
        </form>
        
    <?php
     $connect=mysqli_connect('localhost','root','','shkolla');//conect me phpmyadmin 
    mysqli_select_db($connect,'shkolla');
         //selekton vetem databazen spitali

        if(isset($_POST['login'])) // autoincrement dhe primary key mos me harru me ja qit. 
            { // lidhet me inputin 
             $username=$_POST['username'];

            $password=$_POST['password'];


                   
         $l = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                   
    $con=mysqli_query($connect, $l);
                   
    if(mysqli_num_rows($con)>0)// rreshtat brenda databazes i kontrollon a jane me shume se zero, nese skena te dhena brenda nuk vazhdojme me if kushti i pare  bjere poshte se ska ku me i marr te dhenat. 
             {
                       
         echo "<script>alert('Mireseerdhet')</script>";}

     elseif(empty($username)&& empty($password))
                    {
                 echo "<script>alert('Username ose Password jane te zbrazeta!')</script>";
                    }
     else
            {
         echo "<script>
                       alert('Username ose Password jane gabim!');
                       </script>";
                    }
            } 
               
        ?>
    </body>
</html>