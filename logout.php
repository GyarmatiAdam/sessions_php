<?php
/* logout.php: this page contains only a few lines of 
php code to unset and destroy the current logged in users session, 
and after destroying the session the page automatically 
redirect to the ‘index/login’ page. */
session_start();
if (!isset($_SESSION['user'])) {
 header( "Location: index.php");
} else if(isset($_SESSION[ 'user'])!="") {
 header("Location: home.php");
}

if  (isset($_GET['logout'])) {
 unset($_SESSION['user' ]);
 session_unset();
 session_destroy();
 header("Location: index.php");
 exit;
}
?>