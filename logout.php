<?php 
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  echo "logging you out.... ";
session_unset();
session_destroy();
 unset($_SESSION['access_token']);
  unset($_SESSION['state']);
unset($_SESSION['oauth_token'] );
   unset($_SESSION['oauth_token_secret']); 


    if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
    

  header("Location:index.php");

?>