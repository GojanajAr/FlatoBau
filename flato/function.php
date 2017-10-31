<?php 
  function check_user(){
    session_start();
  
  
if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
    
} else {
    echo"Please log in first to see this page.";
    
  header('location:loggin.php');
}
  
} ?>