<?php
  include 'include/login.php';
  setcookie('desire5', $_POST['desire5'], time()+60*60);
  session_start();

  echo $_COOKIE['desire'];
  echo "→";
  echo $_COOKIE['desire2'];
  echo "→";
  echo $_COOKIE['desire3'];
  echo "→";
  echo $_COOKIE['desire4'];
  echo "→";
  echo "あなたは今日から『";
  echo $_POST['desire5'];
  echo "』に取り組もう!!";
?>