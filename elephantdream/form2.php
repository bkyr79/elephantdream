<?php
  include 'includes/login.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form method="POST" action="form3.php">
<label>それを叶えるために何ができそう？？</label><br/>
<?php
  echo $_POST["desire"];
?><br/>
  <textarea name="desire2"></textarea>
  <input type="submit" onClick="location.href='/form3.php'" value="押す">
  <input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/>
</form>
</body>
</html>