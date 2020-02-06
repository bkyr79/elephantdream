<?php
  include 'include/login.php';
  setcookie('desire', "", time()-60*60*24*365);
  setcookie('desire2', "", time()-60*60*24*365);
  setcookie('desire3', "", time()-60*60*24*365);
  setcookie('desire4', "", time()-60*60*24*365);
  setcookie('desire5', "", time()-60*60*24*365);
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet/form.css">
  <title>夢を叶えるゾウ</title>
</head>
<body>
<form method="POST" action="form2.php">
<div class="top">
<label>叶えたい夢を入力してください</label><br/>
<textarea name="desire"></textarea>
<input type="submit" value="押す" onClick="location.href='/form2.php'"/>
<input type="button" value="カレンダー" onClick="location.href='calendar.php'"/>
</div>
</form>
</body>
</html>
