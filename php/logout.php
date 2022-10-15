<?php
session_start();
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
if (session_status() === PHP_SESSION_ACTIVE) {
   
  session_destroy();
   header("Location: ../forms/login.html");
}

}
logout();

