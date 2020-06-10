<?php
  include 'include/login.php';
  setcookie('desire2', $_POST['desire2'], time()+120);
  session_cache_limiter('none');
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylesheet/form.css">
<title></title>
<style type="text/css">

body {
  background-image: url("/images/Visit pwdReykjavik iPhone Facebook Post.png");
}

.top {
  width: 800px;
  text-align: center;
  margin: 100px 200px 0px;
  padding: 100px 200px 0px 100px;
}

.bottom {
  width: 800px;

  text-align: center;
  margin: 0px 50px 0px;
}

.container {
  text-align: center;
  padding: 0px 200px 0px;
}

.conclusion {
  text-align: center;
}
.twitter {
  font-weight: bold;
  text-align: center;
  height: 50px;
  padding-top: 10px;
  text-decoration: underline;
}

.twitter-share-button {
  border: rgb(29,161,242);
  color: rgb(29,161,242);
  border-radius: 5px;
  text-align: center;
  font-weight: bold;
  width: 205px;
  height: 45px;
  text-decoration: none;
  /* text-decoration: underline; */
}

h3 {
  font-size: 30px;
}

.kmain {
  text-align: center;
  margin: 100px 200px 0px;
  padding: 50px 200px 0px;
  border-radius: none;
}

table {
  border: none;
}

.modoru {
  text-align: center;
  margin-left: 130px;
  margin-top: 5px;
}
</style>
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
    echo $_COOKIE['desire'];
    echo "→";
    echo $_POST['desire2'];
  ?>
</div>
</form>
</body>
</html>
