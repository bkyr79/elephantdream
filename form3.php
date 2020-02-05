<?php
  include 'include/login.php';
  setcookie('desire2', $_POST['desire2'], time()+120);
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form method="POST" action="form4.php">
<label>そのためにまず何をしよう？？</label><br/>
  <textarea name="desire3"></textarea>
  <input type="submit" onClick="location.href='/form4.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/><br/><br/>
  <?php
    echo $_COOKIE['desire'];
    echo "→";
    echo $_POST['desire2'];
  ?>
</form>
</body>
</html>
