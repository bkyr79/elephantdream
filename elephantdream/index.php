<?php
  include 'include/login.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <title>夢を叶えるゾウ</title>
</head>
<body>
<form method="POST" action="form2.php">
<label>叶えたいことを入力してね</label><br/>
<textarea name="desire"></textarea>
<input type="submit" value="押す" onClick="location.href='/form2.php'"/>
<input type="button" value="カレンダー" onClick="location.href='calendar.php'"/>
</form>
</body>
</html>

