<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet/form.css">
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
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->seAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'データベースに接続しました';
    $db = NULL;
  } catch (Exception $e) {
    echo '<span class="error">エラーがでました</span><br>';
    echo $e->getMessage();
    exit();
  }
  ?>
</div>
</body>
</html>