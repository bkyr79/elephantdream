<?php
  include 'include/login.php';
  setcookie('desire2', $_POST['desire2'], time()+120);
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
<form method="POST" action="form4.php">
<div class="top">
<label>もう少し具体的に言うと？</label><br/>
  <textarea name="desire3"></textarea>
  <input type="submit" onClick="location.href='/form4.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/><br/><br/>
</div>
<div class="bottom">
  <?php
    echo "具体的行動①".$_COOKIE['desire']."<br/>";
    echo "<br/>";
    echo " →具体的行動②".$_POST['desire2'];
  ?>
</div>
</form>
</body>
</html>
