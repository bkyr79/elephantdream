<?php
  include 'include/login.php';
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
<?php
  echo $_POST["desire2"];
?><br/>
  <textarea name="desire3"></textarea>
  <input type="submit" onClick="location.href='/form.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/>
</form>
</body>
</html>
