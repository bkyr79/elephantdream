<?php
  include 'include/login.php';
  setcookie('desire4', $_POST['desire4'], time()+120);
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylesheet/form.css">
<title></title>
</head>
<body>
<form method="POST" action="conclusion.php">
<div class="top">
<label>またさらに具体的に言うと？</label><br/>
  <textarea name="desire5"></textarea>
  <input type="submit" onClick="location.href='/conclusion.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/><br/><br/>
</div>
<div class="bottom">
  <?php
    echo "具体的行動①".$_COOKIE['desire']."<br/>";
    echo "<br/>";
    echo " →具体的行動②".$_COOKIE['desire2']."<br/>";
    echo "<br/>";
    echo " →具体的行動③".$_COOKIE['desire3']."<br/>";
    echo "<br/>";
    echo " →具体的行動④".$_POST['desire4']."<br/>";
  ?>
</div>
</form>
</body>
</html>
