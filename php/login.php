<?php
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
   
    $myfile=fopen("../storage/users.csv","a+");
    while(!feof($myfile)) {
        $ine = (array) json_decode(fgets($myfile, filesize("../storage/users.csv")),true);
        if (in_array($email,array_values($ine)) && in_array($password,array_values($ine)) ){
            session_start();
            $_SESSION["username"]=$ine['username'];
            header("Location: ../dashboard.php");
            break;
        }
       header("location: ../forms/login.html");
      }
      fclose($myfile);
    
}


