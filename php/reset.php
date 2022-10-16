<?php
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $newpassword = $_POST["password"];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
    $myfile=fopen("../storage/users.csv","ra+");
    while(!feof($myfile)) {

        $ine = fgetcsv($myfile);
        if (in_array($email,array_values($ine)) ){
           $ine[2] = $newpassword;
           fputcsv($myfile,$ine);
           echo "password changed succesfully";
           exit();
        }

       echo "<h1>user not found</h1>";
      }
      fclose($myfile);
}


