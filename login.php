<?php
  include 'includes/login.php';
  session_start();
  if (!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
  }
?>