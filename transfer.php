<?php
session_start();
$con=mysqli_connect('localhost','id14969232_tasneem','Creditmanagement#16','id14969232_com');
$q="select name from user";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
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
        <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
             <h2 style=" font-family:Agency FB; font-size: 55px ;text-align: center  "> Transfer Amount</h2>
          <br><br><br>
          <input type=" text " name="transfer"style="width=500px; height=250px; position:absolute;
           left:44%; margin:auto; border:2px solid #d5402b; ">
          <br><br><br><br><br><br>
          
          <input type="submit" name=" SUBMIT " value=" SUBMIT " style="width=500px; height=250px; position:absolute;
           left:47%; margin:auto; background-color:#002b80; border:2px solid #d5402b; color:#fff; text-align: center" >
    </body>
</html>
