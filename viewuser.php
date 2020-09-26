<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
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
         <h1 style=" font-family:Agency FB; font-size: 70px ;text-align: center; margin: 50px "><u> Choose name for credit transfer</u></h1>
         <form action="transfer.php" method="post" style="position: relative; left: 40%;">
        <table>
           <th><h2 style=" font-family:Agency FB; font-size: 55px ;text-align: center "> Name </h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>
     
     <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
       <?php }
        ?>
    <tr>
          
           <td><input type="submit" name="credit" value="credit" style="width=500px; height=250px; position:absolute;
            margin:auto;background-color:#002b80; border:2px solid #d5402b; color:#fff; text-align: center"></td>
           </tr>
        </table>
        </form>
    </body>
</html>