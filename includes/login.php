<?php
  session_cache_limiter('none');
  session_start();
  if (!isset($_SESSION['id'])){
    header('Location: index.php');
    exit();
  }
?>