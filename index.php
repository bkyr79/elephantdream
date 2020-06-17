<?php 
  if (isset($_SESSION['id'])){
    header('Location: preform.html');
  } else if (isset($_POST['name']) && isset($_POST['password'])){
    $dsn = 'mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e58da4378ec57aa;charset=utf8';
    $user = 'b5d9b2d1576d08';
    $password = 'b9a09ecd';

    try {
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $stmt = $db->prepare(" SELECT * FROM users WHERE name=:name AND password=:pass ");
      $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
      $stmt->bindParam(':pass', sha1($_POST['password']), PDO::PARAM_STR);
      $stmt->execute();
      
      if ($row = $stmt->fetch()){
        $_SESSION['id'] = $row['id'];
        header('Location: preform.html');
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
      position: absolute;
      background-image: url("Users/takaomiyamashita/Downloads/Visit Reykjavik iPhone Facebook Post.png");
      width: 400px;
      height: 360px;
      top: 50%;
      left: 50%;
      -webkit-transform : translate(-50%,-50%);
      transform : translate(-50%,-50%);
      font-size: 25px;
      font-family: "メイリオ";
    }

    form{
      right: 100px;
    }

    .submit_button {
      margin-left: 65px;
    }

    #personals {
      position: relative;
      top: 50%;
      left: 50%;
      margin-left: -135px;
    }

    .personal {
      width: 200px;
      height: 25px;
    }

    h1 {
      font-size: 25px;
    }

    .submit_button {
      border: 1px solid red;
      border-radius: 5px;
      background-color: red;
      color: white;
      text-align: center;
      width: 205px;
      height: 35px;

    }
    } */
  </style>
</head>
<body>
  <h1>"行動できる人になれる"アプリ</h1>
  <A href="javascript:wopen()">
  <form action="index.php" method="post">
    <div id="personals">
    <p><input type="text" name="name" placeholder="ユーザ名" class="personal"></p>
    <p><input type="password" name="password" placeholder="パスワード" class="personal"></p>
    </div>
    <input type="submit" value="ログイン" class="submit_button">
  </form>
  </body>
  
</html>
<?php } ?>

