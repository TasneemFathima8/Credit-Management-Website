<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
?>
<html>
<head>
   <title>
   viewUser
    </title>
        <style>
     body {
        background-image: url('h2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
          }
       </style>
    
</head>
    <body>
    <div class="view">
        <h2 style=" font-family:Agency FB; font-size: 55px ;text-align: center; margin: 80px  "> User Information  </h2>
        <table align="center" width="50%" border="1" bgcolor="#538cc6"  width="50%" text-align="center" font-family="Lato,Calibri,Arial,sans-serif">  

          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr align="center">
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        <br><br><br><br><br>
            <a href="viewuser.php"><input type="button" name=" TRANSFER TO " value=" TRANSFER TO "  style="width=500px; height=250px; position:absolute;
           left:48%; margin:auto;background-color:#002b80; border:2px solid #d5402b; color:#fff; text-align: center" >
           
        <br><br>
            <a href="selectuser.php"><input type="button" name="  BACK  " value="  BACK "  style="width=500px; height=250px; position:absolute;
            left:50%; margin:auto;background-color:#002b80; border:2px solid #d5402b; color:#fff; text-align: center" >
               


 </body>
</html>
