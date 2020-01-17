<?php
  session_start();
  if (isset($_SESSION['id'])){
    header('Location: index.php');
  } else if (isset($_POST['name']) && isset($_POST['password'])){
    $dsn = 'mysql:host=localhost;dbname=desire;charset'=utf8;
    $user = 'desireuser';
    $password = 'password';

    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $stmt = $db->prepare("
        SELECT * FROM users WHERE name=:name AND password=:pass
      ");

      $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
      $stmt->bindParam(':pass', sha1($_POST['password']),PDO::PARAM_STR);
      $stmt->execute();
      if ($row = $stmt->fetch()){
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

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>夢を叶えるゾウ</title>
</head>
<body>
<form method="POST" action="form2.php">
<label>叶えたいことを入力してね</label><br/>
<textarea name="desire"></textarea>
<input type="submit" value="押す" onClick="location.href='/form2.php'"/>
<input type="button" value="カレンダー" onClick="location.href='/calendar.php'"/>
</form>
</body>
</html>
<?php } ?>