<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>pdoでデータベースに接続する</title>
</head>
<body>
<div>
  <?php
  $dsn = 'mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e58da4378ec57aa;charset=utf8';
  $user = 'b5d9b2d1576d08';
  $password = 'b9a09ecd';

  try {
    $db = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->seAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベースに接続しました";
    $db = NULL;
  } catch (Exception $e) {
    echo '<span class="error">エラーがでました</span><br>';
    exit();
  }
  ?>
</div>
</body>
</html>