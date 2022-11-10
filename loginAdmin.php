<?php
session_start();
?>

<html>
	<head>
		<title>Login</title>
		
        <link rel="stylesheet" href="style.css" media="all">
	</head>

    <body>
        <form method="post" action="loginAdmin.php">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" name="login" value="Log in">
            <input type="reset" name="cancel" value="Cancel">
        </form>
        <p>Not yet a member? <a href="Registration.php">Sign up</a></p>
        <?php
            $connect=mysqli_connect('localhost','root','','shkolla');
            mysqli_select_db($connect,'shkolla');
            
            if(isset($_POST['login']))
               {
                $username = mysqli_real_escape_string($connect,$_POST['username']);
                $password = mysqli_real_escape_string($connect,$_POST['password']);
                
                if(empty($username)&&empty($password))
		              {
                        echo "<script>alert('Email ose Password jane te zbrazeta!')</script>";
		              }
                else if($username!='' || $password!='')
                 {
                //Kujdes!!! Kur e ruani passwordin ne SQL me gjatesi me te gjate.
                   $password=md5($password);
                   // echo $password.'<br>';
                    
                   $login = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                   
                   $con=mysqli_query($connect, $login);
                   
                   if(mysqli_num_rows($con)>0)
                   {
                       $_SESSION['username']=$username;
                       
                       /*echo "<script>
                       window.open('admin.php','_self')
                       </script>";*/
                        
                       
                       $_SESSION['success'] = "You are now logged in";
                       header('location: index.php');
                   }
                   else
                   {
                       echo "<script>
                       alert('Email ose Password jane gabim!')
                       </script>";
                   }
                }
           }
               
        ?>
        
    </body>
</html>