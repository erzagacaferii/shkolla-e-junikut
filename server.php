<?php
    session_start();
    
    //Inicializimi i variablave
    $emri = "";
    $mbiemri = "";
    $email    = "";
    $errors = array();
    
    $conn=mysqli_connect("localhost","root","","shkolla");
        mysqli_select_db($conn,'shkolla');
        
    if(isset($_POST['login']))
    {
        //mysqli_real_escape_string(); eshte nje funksion qe i largon karakteret speciale. Përdoret për të krijuar një string legal SQL që mund të përdoret në një query te SQL.
        $emri=mysqli_real_escape_string($conn,$_POST['emri']);
        $mbiemri = mysqli_real_escape_string($conn,$_POST['mbiemri']);
        $mosha = mysqli_real_escape_string($conn,$_POST['mosha']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
        $nrtelefonit = mysqli_real_escape_string($conn,$_POST['nrtelefonit']);
        
              
        if (empty($emri)) 
        {
            array_push($errors, "emri eshte i zbrazet"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$emri) )
                {
                    array_push($errors, "vetem shkronjat lejohen");
                }
        if (empty($mbiemri)) 
        {
            array_push($errors, "mbiemri eshte i zbrazet"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$mbiemri)) 
                {
                    array_push($errors, "vetem shkronjat lejohen");
                }
                if (empty($mosha)) 
        {
            array_push($errors, "mosha eshte e zbrazet"); 
        }
        else if (!preg_match("/^[0-99 ]*$/",$mosha)) 
                {
                    array_push($errors, "vetem numrat lejohen");
                }
        if (empty($email)) 
        { 
            array_push($errors, "Email is required"); 
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    array_push($errors, "Invalid email format");
                }
        if (empty($password)) 
        { 
            array_push($errors, "Password is required"); 
        }
        
        if ($password != $confirmpassword) 
        {
            array_push($errors, "The two passwords do not match");
        }
         if (empty($nrtelefonit)) 
        {
            array_push($errors, "numri i telefonit eshte i zbrazet"); 
        }
        else if (!preg_match("/^[0-99 ]*$/",$nrtelefonit)) 
                {
                    array_push($errors, "sheno numrin e telefonit");
                }
            
        $query = "SELECT * FROM nxenesi WHERE emri='$emri' OR mbiemri='$mbiemri'OR email='$email' LIMIT 1";
            
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
  
        if ($user) 
        { // if user exists
            if ($user['emri'] === $emri) 
            {
                array_push($errors, "ky emer ekziston");
            }
            if ($user['mbiemri'] === $mbiemri) 
            {
                array_push($errors, "ky mbiemer ekziston");
            }
            if ($user['email'] === $email) 
            {
                array_push($errors, "kjo email ekziston");
            }
        }
        if (count($errors) == 0) 
        {
        //Kujdes!!! Kur e ruani passwordin ne SQL me gjatesi me te gjate.
         $password = md5($password);//encrypt i passwordit para se ta ruajme ne database
            
            //Kujdes te veqant tek insertimi i te dhenave!!!
           
                $regist ="INSERT INTO nxenesi (emri,mbiemri,mosha,email,password,confirmpassword,nrtelefonit )
                VALUES ('$emri','$mbiemri','$mosha','$email','$password','$confirmpassword','$nrtelefonit')";
                
                $rows = "SELECT * FROM nxenesi WHERE emri='$emri' AND mbiemri='$mbiemri'";
    
               $run = mysqli_query($conn, $rows);
    
               if(mysqli_num_rows($run)<10){
                   
                    mysqli_query($conn,$regist);
                    
                   echo "<script>alert('Registration Successfully!');*</script>";
                    $_SESSION['username'] = $username;
                     $_SESSION['success'] = "You are now logged in";
                     header('location: index.php');
                   
    
               }
        }
    }
?>
