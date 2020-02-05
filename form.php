<?php
  include 'includes/login.php';
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
  <title>夢を叶えるゾウ</title>
  <SCRIPT language="JavaScript">
  <!--
  function wopen(){
  win=window.open("form.php","new","width=350,height=250");
  win.moveTo(100,100);
  }
  // -->
  </SCRIPT>
</head>
<body>
<form method="POST" action="form2.php">
<!-- <form method="POST" action="form3.php"> -->
<label>叶えたいことを入力してね</label><br/>
<textarea name="desire"></textarea>
<input type="submit" value="押す" onClick="location.href='/form2.php'"/>
<input type="button" value="カレンダー" onClick="location.href='calendar.php'"/>
</form>
</body>
</html>
