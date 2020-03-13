<?php
  include 'include/login.php';
  setcookie('desire', $_POST["desire"], time()+120);
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
<form method="POST" action="form3.php">
  <div class="top">
  <label>それを叶えるために何ができますか？</label><br/>
  <textarea name="desire2"></textarea>
  <input type="submit" onClick="location.href='/form3.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/><br/><br/>
  </div>
  <div class="bottom">
    <?php
      echo "具体的行動①".$_POST["desire"]."<br/>";
    ?>
  </div>
</form>
</body>
</html>