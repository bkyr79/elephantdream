<?php 
  session_start();

  // define('DB_DATABASE', 'desire');
  // define('DB_USERNAME', 'desireuser');
  // define('DB_PASSWORD', 'taka8479');
  // define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . desire);

  if (isset($_SESSION['id'])){
    header('Location: index.php');
  } else if (isset($_POST['name']) && isset($_POST['password'])){
    $dsn = 'mysql:host=localhost;dbname=desire;charset=utf8';
    $user = 'desireuser';
    $password = 'taka8479';

    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $stmt = $db->prepare(" SELECT * FROM users WHERE name=:name AND password=:pass ");
      $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
      $stmt->bindParam(':pass', sha1($_POST['password']), PDO::PARAM_STR);
      $stmt->execute();
      
      if ($row = $stmt->fetch()){
        #以下の内容を実行したい
        $_SESSION['id'] = $row['id'];
        header('Location: index.php');
        exit();

      } else {
        header('Location: login.php');
        exit();
      }
    } catch(PDOException $e) {
      die ('エラー：' . $e->getMessage());
    }
  } else {
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>desire</title>
</head>
<body>
  <h1></h1>
  <h1>ログイン</h2>
  <form action="login.php" method="post">
    <p>ユーザ名：<input type="text" name="name"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <p><input type="submit" value="ログイン"></p>
  </form>
  </body>
</html>
<?php } ?>