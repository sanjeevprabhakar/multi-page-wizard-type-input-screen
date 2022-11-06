<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> page2 </title>
    <link rel ="stylesheet" href = "page2.css">
</head>


<body>
    <div class="form">
        <form action="pg3A3.php" method="post">
            <label>Age: </label> <br> <input type="number" name="userage"> <br><br>
            <label> Date of Birth:</label> <br> <input type="date" name="userdateofbirth"> <br><br>
            <label> City: </label> <br> <input type="text" name="cityname"> <br><br>
            <label> FatherName: </label> <br> <input type="text" name="fathername"> <br><br>
            <br> <br>
            <input type="submit" action="submit">
        </form>
        <a href = "pg1A3.html" > <button> back </button> </a>
    </div>
</body>


</html>

<?php
$name = $_POST["username"];
$email = $_POST["useremail"];
$phoneNumber = $_POST["phonenumber"];



            session_start();
            $_SESSION["username"] = $name;
            $_SESSION["useremail"] = $email;
            $_SESSION["phonenumber"] = $phoneNumber;
        
?>
