<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account</title>
    <link rel="stylesheet" href="customer.css">
</head>
<body class="bdysn">
     <form action="sinup.php" method="post" >

     <div class="sinup" >
        <h2>New Users</h2>
    <h2>Create New Account</h2>
    <label for="users">User Id</label><br>
    <input type="text" name="users" id=""><br>
    <label for="fname">First Name</label><br>
    <input type="username"  name="fname" placeholder="First Name"><br>
    <label for="lname">Last Name</label><br>
    <input type="username"  name="lname" placeholder="Last Name"><br>
    <label for="password">Password</label><br>
    <input type="password" name="pass" placeholder="password" id=""><br>
    <input type="submit" value="submit" name="submit" >
    <p style="font-size: 20px;" >If you are Existing user <a href="login.php">: login</a></p>
    </div>
     </form>
   
    
</body>
</html>
<?php 
require("connect.php");
 if (isset($_POST['submit'])) {
$TBL=$_POST['users'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['pass'];
$sql=  "CREATE TABLE $TBL(ID INT(10)  PRIMARY KEY,FIRST_NAMES VARCHAR(30),
LAST_NAME VARCHAR(15),PASSWORDS VARCHAR(30))";

if($mysqli->query($sql)){
    $sql= "INSERT INTO $TBL(FIRST_NAMES,LAST_NAME,PASSWORDS)VALUES('$fname','$lname','$password')";
echo "Account for".$TBL."created";
}else{
    
echo "User not created";
}
}
?>