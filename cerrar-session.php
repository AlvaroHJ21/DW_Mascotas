<?php 
session_start();
session_destroy();
echo "<script>alert('cerrando sesion');</script>";
header("Location:login.php");

?>