<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
 $file=  fopen("../storage/users.csv","a");
 $arr = ["username"=>$username,"email"=>$email,"password"=>$password];
 fputcsv($file,$arr);
 fclose($file);
   echo "User Successfully registered";
}



