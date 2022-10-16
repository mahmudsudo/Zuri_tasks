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
   
    $myfile=fopen("../storage/users.csv","r");
    while(!feof($myfile)) {
        $ine = fgetcsv($myfile, filesize("../storage/users.csv"));
        if (in_array($email,$ine) && in_array($password,$ine) ){
            session_start();
            $_SESSION["username"]=$ine[0];
            header("Location: ../dashboard.php");
            break;
        }
       header("location: ../forms/login.html");
      }
      fclose($myfile);
    
}



