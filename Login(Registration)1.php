<?php
session_start();
?>

<html>
	<head>
		<title>Login</title>
		
        <link rel="stylesheet" href="style.css" media="all">
	</head>

    <body>
        <form method="post" action="Login(Registration)1.php">
            Email: <input type="text" name="email"><br><br>
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
                $email = mysqli_real_escape_string($connect,$_POST['email']);
                $password = mysqli_real_escape_string($connect,$_POST['password']);
                
                if(empty($email)&&empty($password))
		              {
                        echo "<script>alert('Email ose Password jane te zbrazeta!')</script>";
		              }
                else if($email!='' || $password!='')
                 {
                //Kujdes!!! Kur e ruani passwordin ne SQL me gjatesi me te gjate.
                   $password=md5($password);
                   // echo $password.'<br>';
                    
                   $login = "SELECT * FROM mesimdhenesi WHERE email='$email' AND password='$password'";
                   
                   $con=mysqli_query($connect, $login);
                   
                   if(mysqli_num_rows($con)>0)
                   {
                       $_SESSION['email']=$email;
                       
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