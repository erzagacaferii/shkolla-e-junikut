<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title> Delete &amp; Update File </title>
      
        <link rel ='stylesheet' href='style.css'>
        <script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&family=Libre+Baskerville:ital@1&family=Permanent+Marker&family=Rubik+Moonrocks&family=Varela+Round&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&family=Libre+Baskerville:ital@1&family=Permanent+Marker&family=Quicksand&family=Rubik+Moonrocks&family=Varela+Round&display=swap" rel="stylesheet">
    </head> 
    <body>
    <input type="text" placeholder="Search..">


        <table>
       <div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-700">
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
                    Mosha
                </th>
                <th scope="col" class="py-3 px-6">
                    Password
                </th>
                <th scope="col" class="py-3 px-6">
                    Comfirm Password
                </th>
                <th scope="col" class="py-3 px-6">
                    Numri i Telefonit
                </th>
                <th scope="col" class="py-3 px-6">
                    Delete File
                </th>
                <th scope="col" class="py-3 px-6">
                    Update File
                </th>
            </tr>
        </thead>
        <tbody>
            
</div>
      <!--   <table border='1' id='table'>
            <tr>
                <td class='td'>Id</td>
                <td class='td'>Emri</td>
                <td class='td'>Mbiemri</td>
                <td class='td'>Email</td>
                <td class='td'>Mosha</td>
                <td class='td'>Password</td>
                <td class='td'>Confirm Password</td>
                
                <td class='td'>Numri i telefonit</td>
                <td class='td' class=>Delete File</td>
                <td class='td'>Update File</td>
            </tr> -->
                        <?php
             $con =mysqli_connect('localhost','root','','shkolla');
                 mysqli_select_db($con,'shkolla');

            $select = "SELECT * FROM nxenesi;";
                
             $query = mysqli_query($con,$select);

                while($row = mysqli_fetch_array($query))
                {
                    $nid = $row['nid'];
                    $emri = $row['emri'];
                    $mbiemri = $row['mbiemri'];
                    $email = $row['email'];
                    $mosha = $row['mosha'];
                    $password = $row['password'];
                    $confirmpassword = $row['confirmpassword'];
                    
                    $nrtelefonit = $row['nrtelefonit'];
            ?>
            
                        <tr>
                <td class="td1"><?php echo $nid; ?></td>
                <td class="td1"><?php echo $emri; ?></td>
                <td class="td1"><?php echo $mbiemri; ?></td>
                 <td class="td1"><?php echo $email; ?></td>
                 <td class="td1"><?php echo $mosha; ?></td>
                 <td class="td1"><?php echo $password; ?></td>
                 <td class="td1"><?php echo $confirmpassword; ?></td>
                 <td class="td1"><?php echo $nrtelefonit; ?></td>
                
               
                  <td class="td1"><button onclick="checkDelete(<?php echo $nid?>);" value="Delete" nid='delete' class="delete">Delete</button></td> 
                  <!-- i merret vlera e id i dergohet funksionit  -->
                <td class="td1"><a href="update.php?update=<?php echo $nid; ?>" nid="update" class="update">Update</a></td>
            </tr>
              <?php  } ?>
            
        </table>

     <script language="JavaScript" type="text/javascript">
            
            function checkDelete(delId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete.php?delete='+delId; //confirm eshte i njejte sikurse alert
                                     return true;
                }
            }
        </script>
        <br>
        <br>
        <br>
        <a href="admin.php" class="btn">Go back</a>
    </body>
</html>
