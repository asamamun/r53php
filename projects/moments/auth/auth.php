<?php   
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']=="true"){

}
else{
   header('Location:login.php'); 
}
?>

