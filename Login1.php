<?php
    $connect=mysqli_connect('localhost','root','','shkolla');
        mysqli_select_db($connect,'shkolla');
            
        if(isset($_POST['login']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
                   
            $login = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                   
            $con=mysqli_query($connect, $login);
                   
                if(mysqli_num_rows($con)>0)
                {
                    $_SESSION['username']=$username;
                       
                    echo "<script>
                       window.open('admin.php','_self');
                       </script>";
                }
                elseif(empty($username)||empty($password))
                {
                    echo "<script>alert('Username ose Password jane te zbrazeta!');</script>";
                }
                else
                {
                    echo "<script>
                       alert('Username ose Password jane gabim!');
                       </script>";
                }
        } 
               
?>