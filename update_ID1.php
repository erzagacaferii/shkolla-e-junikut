

<?php
    $connect = mysqli_connect('localhost','root','','shkolla');
        mysqli_select_db($connect,'shkolla');
        error_reporting();// eshte metod nese ka gabime ne sql i gjen 
    if(isset($_POST['update']))
    {

        $id = $_POST['mid'];
        $emri1 = $_POST['emri'];
        $mbiemri1 = $_POST['mbiemri'];
        $email1 = $_POST['email'];
         $nrtelefonit1 = $_POST['nrtelefonit'];
        $mosha1 = $_POST['mosha'];
        $password1 = $_POST['PASSWORD'];
        $confirmpassword1 = $_POST['confirmpassword'];
        $drejtimi1 = $_POST['drejtimi'];
       
        
        $update = 'update.php?update='.$id; // per me shku tek fajlli i caktum

       
        if(empty($emri1) and empty($mbiemri1) and empty($email1) )
        {
            echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
        
          
            exit(); // nuk mujm edhe variabel edhe tekst
        }
        else 
        {   
            move_uploaded_file($fileUpload_tmp,"../Update&Delete1/file/$fileUpload");
                               
            $update_query="UPDATE mesimdhenesi SET
                emri = '$emri1',
                mbiemri = '$mbiemri1',
                email = '$email1',
                nrtelefonit = '$nrtelefonit1',
                mosha = '$mosha1',
                PASSWORD = '$password1',
                confirmpassword = '$confirmpassword1',
                drejtimi = '$drejtimi1'
                WHERE
                mid = '$id'";
                
            
            if(mysqli_query($connect, $update_query))
            {
        
                 echo "<script>alert('File is updated!')</script>";
                 echo "<script>window.open('viewFile(Update&Delete)1.php','_self');</script>";
                
            }
       }
    }

?>