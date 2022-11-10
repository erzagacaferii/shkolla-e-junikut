<?php
session_start();
?>

<html>
	<head>
		<title>Login</title>
		
        <link rel="stylesheet" href="style.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	</head>

    <body>
    <div id="signin">
                    <h1>Please try again </h1>
                    <form method="post" action="Login(Registration).php">
                        <input type="email" required autocomplete="off" placeholder="Email Adress" id="signin"
                            class="fadeIn " name="email">
                        <input type="password" required autocomplete="off" placeholder="Password" id="password"
                            class="fadeIn " name="password">
                        <input type="submit" value="Sign In" name="login"></input>
                        
                    </form>
                </div>
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
                    
                   $login = "SELECT * FROM nxenesi WHERE email='$email' AND password='$password'";
                   
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