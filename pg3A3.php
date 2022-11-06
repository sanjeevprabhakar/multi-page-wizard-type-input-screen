<?php
$Age = $_POST["userage"];
$Dob = $_POST["userdateofbirth"];
$city = $_POST["cityname"];
$fathername = $_POST["fathername"];

?>


<table>
     <tr>
          <td> Name</td>
          <td>
               <?php
               session_start();

               echo $_SESSION["username"]; 
               
               ?>
          </td>
     </tr>

     <tr>
          <td> Email</td>
          <td> <?php
               session_start();

               echo $_SESSION["useremail"]; ?>
          </td>
     </tr>

     <tr>
          <td> phonenumber</td>
          <td> <?php
               session_start();
               echo $_SESSION["phonenumber"]; ?>
          </td>
     </tr>


     <tr>
          <td> Age</td>
          <td> <?php echo "$Age"; ?> </td>
     </tr>


     <tr>
          <td> Dob</td>
          <td> <?php echo "$Dob"; ?> </td>
     </tr>

     <tr>
          <td> city</td>
          <td> <?php echo "$city"; ?> </td>
     </tr>

     <tr>
          <td> fatherName</td>
          <td> <?php echo "$fathername"; ?> </td>
     </tr>
</table>