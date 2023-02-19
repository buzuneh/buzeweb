<!DOCTYPE html> 
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

 <title>Database Records</title>
<style>
.bk, table{ 
  width: 70%;
  margin: auto; 
  font-family: Arial, Helvetica, sans-serif; 
 } 
.bk, table, tr, th, td{
   border: 1px solid #d4d4d4;
   border-collapse: collapse;
   padding: 12px; 
  } 
th, td{
      text-align: left; 
      vertical-align: top; 
      }
  tr:nth-child(even){
   background-color: #e7e9eb;
   }
  
   tr:nth-child(odd){
   background-color: #dadada;
   }
 img{
  width: 100px;
  height: 100px;
 }
 th{
  background-color: darkcyan;
 }
   
    </style>
     <body>
  <P class="bk" ><a href="index.html">Back</a></P>
   <?php 
    //storing database details in variables. 
    require("connect.php");
                                  
    //Output Form Entries from the Database 
   $sql = "SELECT ID,NAMES,CITY,TIN,SERVICES,CONTACT,REG_DATES,title,image,REMARKS FROM customers"; 
    //fire query
   $result = mysqli_query($mysqli, $sql); 
   if(mysqli_num_rows($result) > 0){
                                        
 echo '<table> <tr>
  <th> ID </th>
  <th> NAME </th>
   <th> CITY </th> 
   <th> TIN </th> 
   <th> SERVICES </th> 
   <th> CONTACT </th>
   <th> REG_DATES</th> 
   <th> title</th> 
   <th> CAF</th>.  
   <th> REMARKS</th>  
   </tr>'; 
   while($row = mysqli_fetch_assoc($result)){ 
    // to output mysql data in HTML table format 
  
    echo '<tr> <td >' . $row["ID"] . '</td> <td>' . $row["NAMES"] .
     '</td> <td> ' . $row["CITY"] . '</td> <td>' . $row["TIN"] . '</td> <td>.' 
    . $row["SERVICES"] . '</td> <td>' . $row["CONTACT"] . '</td>
     <td>'.$row["REG_DATES"].'</td> <td>'.$row["title"].'</td> 
     <td><img src="uploads/'.$row['image'].'" height="50"></td> <td>' . $row["REMARKS"] . '</td> </tr>'; 
    } 
    echo '</table>';
     } else {
     echo "0 results";
     } 
// closing connection 
  mysqli_close($mysqli);
  include('foot.php'); 
?> 
  </body>
  </html>