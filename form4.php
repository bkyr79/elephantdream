<?php
  include 'include/login.php';
  setcookie('desire3', $_POST['desire3'], time()+120);
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form method="POST" action="form5.php">
<label>さらにそれをするためには？？</label><br/>
  <textarea name="desire4"></textarea>
  <input type="submit" onClick="location.href='/form5.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/><br/><br/>
  <?php
    echo $_COOKIE['desire'];
    echo "→";
    echo $_COOKIE['desire2'];
    echo "→";
    echo $_POST['desire3'];
    // echo $_COOKIE['desire2'];
  ?>
</form>
</body>
</html>
