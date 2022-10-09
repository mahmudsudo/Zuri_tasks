<?php 
$name = $_POST["Name"];
$email = $_POST["Email"];
$dob= $_POST["DOB"];
$gender= $_POST["Gender"];
$country=$_POST["Country"];
$assocArray = array(
    "name" => $name,"email" =>$email,"dob"=> $dob,"gender" => $gender,"country" => $country
);

$storefile = fopen("userdata.csv","a+");

fwrite($storefile,json_encode($assocArray));

print_r($assocArray);


?>