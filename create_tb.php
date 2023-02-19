<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="customer.css">
    
    <title>Document</title>
</head>
<body class="bd" >

            <div class="crt">
            <p style="text-align: center;">create table:</p>
            <form style="margin-left: 35%;" action="create_tb.php" method="post">
            <input style="padding: 15px;" type="text" name="TBL"><br>
            <input style="padding: 10px;" type="submit" name="submit" value="submit">
            </form>
            <p style="text-align:center ;"><a href="customer.html">Back</a></p>
            </div>
            
        <?php
        
      require("connect.php");
            if (isset($_POST['submit'])) {
    $TBL=$_POST['TBL'];
          $sql=  "CREATE TABLE $TBL(ID INT(10)  PRIMARY KEY,NAMES VARCHAR(30),
CONTACTS VARCHAR(15),PRODUCTS VARCHAR(30))";

if($mysqli->query($sql)){
    echo "table created";
}else{
    echo "table not created";
}
}
?>  

</body>
</html>
