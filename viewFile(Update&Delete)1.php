<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title> Delete &amp; Update File </title>
        <link rel ='stylesheet' href='style.css'>
 <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Raleway:ital,wght@1,300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    </head> 
    <body>
        
        <table>
            <div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Id
                </th>
                <th scope="col" class="py-3 px-6">
                   Emri
                </th>
                <th scope="col" class="py-3 px-6">
                    Mbiemri
                </th>
                <th scope="col" class="py-3 px-6">
                   Email
                </th>
                 <th scope="col" class="py-3 px-6">
                   Numri i telefonit
                </th>
                 <th scope="col" class="py-3 px-6">
                   Password
                </th>
                 <th scope="col" class="py-3 px-6">
                   Confirm Password
                </th>
                 <th scope="col" class="py-3 px-6">
                   drejtimi
                </th>
                 <th scope="col" class="py-3 px-6">
                   Update File
                </th>
                 <th scope="col" class="py-3 px-6">
                   Delete File
                </th>
            </tr>
        </thead>

</div>
        <!-- <table border='1' id='table'>
            <tr>
                <td class='td'>Id</td>
                <td class='td'>Emri</td>
                <td class='td'>Mbiemri</td>
                <td class='td'>Email</td>
                <td class='td'>Numri i telefonit</td>
                <td class='td'>Password</td>
                <td class='td'>Confirm Password</td>
                <td class='td'>drejtimi</td>
                <td class='td'>Delete File</td>
                <td class='td'>Update File</td>
            </tr> -->

           
                        <?php
             $con =mysqli_connect('localhost','root','','shkolla');
                 mysqli_select_db($con,'shkolla');

            $select = "SELECT * FROM mesimdhenesi;";
                
             $query = mysqli_query($con,$select);

                while($row = mysqli_fetch_array($query))
                {
                    $mid = $row['mid'];
                    $emri = $row['emri'];
                    $mbiemri = $row['mbiemri'];
                    $email = $row['email'];
                     $nrtelefonit = $row['nrtelefonit'];
                    $password = $row['PASSWORD'];
                    $confirmpassword = $row['confirmpassword'];
                    
                    $drejtimi = $row['drejtimi'];
            ?>
            
                        <tr>
                <td class="td1"><?php echo $mid; ?></td>
                <td class="td1"><?php echo $emri; ?></td>
                <td class="td1"><?php echo $mbiemri; ?></td>
                 <td class="td1"><?php echo $email; ?></td>
                  <td class="td1"><?php echo $nrtelefonit; ?></td>
                 <td class="td1"><?php echo $password; ?></td>
                 <td class="td1"><?php echo $confirmpassword; ?></td>
                 <td class="td1"><?php echo $drejtimi; ?></td>
                
               
                  <td class="td1"><button onclick="checkDelete(<?php echo $mid?>);" value="Delete" mid='delete'class="delete">Delete</button></td> 
                  <!-- i merret vlera e id i dergohet funksionit  -->
                <td class="td1"><a href="update1.php?update=<?php echo $mid; ?>" mid="update" class="update">Update</a></td>
            </tr>
              <?php  } ?>
            
        </table>

     <script language="JavaScript" type="text/javascript">
            
            function checkDelete(delId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete1.php?delete='+delId; //confirm eshte i njejte sikurse alert
                                     return true;
                }
            }
        </script>
        <br>
        <br>
        <br>
        <a href="admin.php" class="btn">Go back</a>
    </div>
    </body>
</html>
