<?php 
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

if(empty($pass) && empty($user)){
        echo "The username & password are mandatory!";
}
elseif(empty($user)){
    echo "The username is mandatory!";
}
elseif(empty($pass)){
    echo "The password is mandatory!";
}
elseif($user === "buzuneh" && $pass === "123" ){
    include('index.html');
}
else{
    echo "Invalid user or password";
    
}
}
?>