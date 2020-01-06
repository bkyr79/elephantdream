<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);

  session_start();

  if (isset($_SESSION['id'])){
    header('Location: form.php');

  } else if (isset($_POST['name']) && isset($_POST['password'])){

    $dsn = 'mysql:host=localhost;dbname=desire;charset=utf8';
    $user = 'desireuser';
    $password = 'password';

    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
      $stmt = $db->prepare("
        SELECT * FROM users WHERE name=:name AND password=:pass  
      ");

      $stmt->bindParam(':name', $POST['name'], PDO::PARAM_STR);
      $stmt->bindParam(':pass', sha1($_POST['password']), PDO::PARAM_STR);
      $stmt->execute();

      if ($row = $stmt->fetch()){
        $_SESSION['id'] = $row['id'];
        header('Location: form.php');
        exit();
      }
    } catch(PDOException $e) {
      die ('エラー:' . $e->getMessage());
    }
  } else {
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>夢を叶えるゾウ</title>
</head>
<body>
  <h1>夢を叶えるゾウ</h1>
  <h2>ログイン</h2>
  <form action="login.php" method="post">
    <p>ユーザ名: <input type="text" name="name"></p>
    <p>パスワード: <input type="password" name="password"></p>
    <p><input type="submit" value="ログイン"></p>
  </form>
</body>
</html>
<?php } ?>