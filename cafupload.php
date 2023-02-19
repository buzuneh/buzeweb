<!DOCTYPE html> 
<html> 
    <head>   
          <title>File Upload</title>
         </head>
          <body>
             <form method="post" enctype="multipart/form-data">   
                  <label>Title</label>   
                    <input type="text" name="title">     
                    <label>File Upload</label>   
                      <input type="file" name="CAF">   
                        <input type="submit" name="submit"> 
                    </form> 
                </body> 
                </html> 
                <?php $localhost = "localhost"; 
                #localhost 
                $dbusername = "root";
                 #username of phpmyadmin 
                 $dbpassword = ""; 
                 #password of phpmyadmin
                  $dbname = "buzuneh";
                   #database name  #connection string 
                   $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
                if (isset($_POST["submit"])) {
                    #retrieve file title        
                    $title = $_POST["title"];
                    #file name with a random number so that similar dont get replaced     
                    $pname = rand(1000, 10000) . "-" . $_FILES["CAF"]["name"];
                    #temporary file name to store file    
                    $tname = $_FILES["CAF"]["tmp_name"];
                    #upload directory path   
                    $uploads_dir = 'ECAF/';
                    #TO move the uploaded file to specific location     
                    move_uploaded_file($tname, $uploads_dir . '/' . $pname);
                    #sql query to insert into database    
                    $sql = "INSERT into customers(title,CAF) VALUES('$title','$pname')";
                    if (mysqli_query($conn, $sql)) {
                        echo "File Sucessfully uploaded";
                    } else {
                        echo "Error";
                    }
                }
                 ?>