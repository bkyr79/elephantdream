<?php 
  // session_start();

  // define('DB_DATABASE', 'desire');
  // define('DB_USERNAME', 'desireuser');
  // define('DB_PASSWORD', 'taka8479');
  // define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . desire);

  if (isset($_SESSION['id'])){
    header('Location: form.php');
  } else if (isset($_POST['name']) && isset($_POST['password'])){
    $dsn = 'mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e58da4378ec57aa;charset=utf8';
    $user = 'b5d9b2d1576d08';
    $password = 'b9a09ecd';
    // $dsn = 'mysql:host=localhost;dbname=desire;charset=utf8';
    // $user = 'desireuser';
    // $password = 'taka8479';

    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $stmt = $db->prepare(" SELECT * FROM users WHERE name=:name AND password=:pass ");
      $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
      $stmt->bindParam(':pass', sha1($_POST['password']), PDO::PARAM_STR);
      $stmt->execute();
      
      if ($row = $stmt->fetch()){
        $_SESSION['id'] = $row['id'];
        header('Location: form.php');
        exit();

      } else {
        header('Location: index.php');
        exit();
      }
    } catch(PDOException $e) {
      die ('エラー：' . $e->getMessage());
    }
  } else {
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>desire</title>
  <style type="text/css">
    body {
      width: 400px;
      height: 50px;
      background-color: coral;
      position: absolute;
      top:200px;
      right:0;
      left:0;
      margin:auto;
    }
    /* h2 { 
    } */
    p {
      font-size: 20px;
      font-family: "メイリオ";
    }
  </style>
</head>
<body>
  <h1></h1>
  <h2></h2>
  <!-- 関数名をwopenとする -->
  <A href="javascript:wopen()">
  <form action="index.php" method="post">
    <p>username：<input type="text" name="name"></p>
    <p>password ：<input type="password" name="password"></p>
    <p><input type="submit" value="ログイン" onClick="wopen()"></p>
  </form>
  </body>
  
</html>
<?php } ?>

