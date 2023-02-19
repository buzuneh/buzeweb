<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Image Upload in PHP and MYSQL database </title>
    <Style>
         tr:nth-child(even){
   background-color: #e7e9eb;
   }
   tr:nth-child(odd){
   background-color: #dadada;
   }
    </Style>
</head>
<body>
    <p style="font-size: 24px;" ><a href="index.html">Home</a></p>
	<?php
	require('connect.php');
   

		if(isset($_POST['form_submit']))
		{	
            $_NAME=$_POST['NAMES'];  
            $_CITY=$_POST['CITY'];
$_TIN=$_POST['TIN'];
$_SERVICE=$_POST['SERVICES'];
$_CONTACT=$_POST['CONTACT'];
$_COMMENT = $_POST['REMARKS'];  
$title=$_POST['title'];
$folder = "uploads/";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
//Set image upload size 
    if ($_FILES["image"]["size"] > 221048576) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size.';
}
if(!isset($error))
{
   /* $result=mysqli_query($mysqli,"INSERT INTO customers(NAMES,CITY,TIN,SERVICES,CONTACT,REG_DATES,REMARKS)
 VALUES('$_NAME','$_CITY','$_TIN','$_SERVICE','$_CONTACT','$_COMMENT')"); */
	//move image to the folder 
move_uploaded_file($file,$target_file); 
$result=mysqli_query($mysqli,"INSERT INTO customers(NAMES,CITY,TIN,SERVICES,CONTACT,title,image,REMARKS)
 VALUES('$_NAME','$_CITY','$_TIN','$_SERVICE','$_CONTACT','$title','$image_file','$_COMMENT')"); 
if($result)
{
	$image_success=1;  
}
else 
{
	echo 'Something went wrong'; 
}
}
		}
if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}
}
	
	if(isset($image_success))
		{
		echo '<div class="success">Image Uploaded successfully</div>'; 
		} 
        ?>
        <div class="container_display">
        <table  cellpadding="10">
            <tr style="background-color: darkcyan;" >
                <th> Image</th>
                <th>Title</th>
            </tr>
            <?php $res=mysqli_query($mysqli,"SELECT* from customers ORDER by id DESC");
                while($row=mysqli_fetch_array($res)) 
                {
                    echo '<tr> 
                      <td><img src="uploads/'.$row['image'].'" height="400"></td> 
                      <td>'.$row['title'].'</td> 
    
                    </tr>';
    
} ?>
		
	</table>
	</div>
    <?php include('foot.php'); ?>
</body>
</html>