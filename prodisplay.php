<?php
  $dream = $_POST['dream'];

  if ($dream == ''){
    header('Location: form.php');
    exit();
  }
  $dsn = 'mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e58da4378ec57aa;charset=utf8';
  $user = 'b5d9b2d1576d08';
  $password = 'b9a09ecd';

  try {
    $db = new PDO ($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $stmt = $db->prepare("
      INSERT INTO desire (dream)
      VALUES (:dream)"
    );
    $stmt->bindParam(':dream', $dream, PDO::PARAM_STR);
    $stmt->execute();

    header('Location: form.php');
    exit();
  } catch(PDOException $e) {
    die ('エラー：' . $e->getMessage());
  }
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>仮表示</title>
</head>
<body>
   <h1>夢リスト</h1>
   <p><a href="form.php">トップページへ戻る</a></p>

</body>
</html>