<!-- <?php
  include 'includes/login.php';
  session_start();
  if (!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
  }
?>
 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form method="POST" action="form4.php">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>desire</title>
</head>
<body>
  <h1>夢を叶えるゾウ</h1>
  <h1>ログイン</h2>
  <form action="login.php" method="post">
    <p>ユーザ名：<input type="text" name="name"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <p><input type="submit" value="ログイン"></p>
  </form>
</body>
</html>