<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="index.html">Home</a></p>
<script>
  var question = "Do you want to delete all?";
 var defaultAnswer = "Delete all";
 var clear = prompt(question, defaultAnswer);
 if(clear != defaultAnswer){
    exit;
 }
</script>
<?php 
   
    if($mysqli="DELETE * FROM customers"){
        echo "All your data is deleted";
    }else{
        
            echo "Not deleted";
    }
     include('foot.php');
            ?>  
</body>
</html>
