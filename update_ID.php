

<?php
    $connect = mysqli_connect('localhost','root','','shkolla');
        mysqli_select_db($connect,'shkolla');
        error_reporting();// eshte metod nese ka gabime ne sql i gjen 
    if(isset($_POST['update']))
    {

        $id = $_POST['nid'];
        $emri1 = $_POST['emri'];
        $mbiemri1 = $_POST['mbiemri'];
        $email1 = $_POST['email'];
        $mosha1 = $_POST['mosha'];
        $password1 = $_POST['password'];
 $confirmpassword1=$_POST['confirmpassword'];
        $nrtelefonit1 = $_POST['nrtelefonit'];
       
        
        $update = 'update.php?update='.$id; // per me shku tek fajlli i caktum

       
        if(empty($emri1) and empty($mbiemri1) and empty($email1) )
        {
            echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
        
          
            exit(); // nuk mujm edhe variabel edhe tekst
        }
        else 
        {   
             move_uploaded_file($fileUpload1_tmp,"../Update&Delete/file/$fileUpload1");
                               
            $update_query="UPDATE nxenesi SET
                emri = '$emri1',
                mbiemri = '$mbiemri1',
                email = '$email1',
                mosha = '$mosha1',
                password = '$password1',
                confirmpassword = '$confirmpassword1',
                nrtelefonit = '$nrtelefonit1'
                WHERE
                nid = '$id'";
                
            
            if(mysqli_query($connect, $update_query))
            {
        
                 echo "<script>alert('File is updated!')</script>";
                 echo "<script>window.open('viewFile(Update&Delete).php','_self');</script>";
                
            }
       }
    }

?>