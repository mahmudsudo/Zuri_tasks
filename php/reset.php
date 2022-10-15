<?php
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $newpassword = $_POST["password"];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
    $myfile=fopen("../storage/users.csv","r");
    while(!feof($myfile)) {

        $ine = (array) json_decode(fgetcsv($myfile),true);
        if (in_array($email,array_values($ine)) ){
           $ine["password"] = $newpassword;
            $filepointer = fopen("../storage/users.csv","r+");
           fwrite($filepointer,json_encode($ine));
           echo "password changed succesfully";
           break;
        }

       echo "<h1>user not found</h1>";
      }
      fclose($myfile);
}


