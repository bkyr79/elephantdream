<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet/form.css">
  <title></title>
</head>
<body>
  <div class="top">
  <?php
    include 'include/login.php';
    setcookie('desire5', $_POST['desire5'], time()+60*60);
    session_start();

    $act = $_POST['desire'];
    $act2 = $_POST['desire2'];
    $act3 = $_POST['desire3'];
    $act4 = $_POST['desire4'];
    $act5 = $_POST['desire5'];

    $dsn = 'mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e58da4378ec57aa;charset=utf8';
    $user = 'b5d9b2d1576d08';
    $password = 'b9a09ecd';

    echo "具体的行動①".$_COOKIE['desire']."<br/>";
    echo "<br/>";
    echo " →具体的行動②".$_COOKIE['desire2']."<br/>";
    echo "<br/>";
    echo " →具体的行動③".$_COOKIE['desire3']."<br/>";
    echo "<br/>";
    echo " →具体的行動④".$_COOKIE['desire4']."<br/>";
  ?>  
  </div>
  <div class="conclusion">
  <h2>
  <?php
    echo "今日から『";
    echo $_POST['desire5'];
    echo "』に取り組もう!!";
  ?>
  </h2>
  </div>
  <style type="text/css">
      a:link    { color: rgb(34,68,136); text-decoration: none; }
      a:visited { color: #0000CC; text-decoration: none; }
      a:hover   { color: rgb(29,161,242); text-decoration: underline; }
      a:active  { color: #0000cc; text-decoration: none; }
  </style>
  <div class="twitter">
  <a href="//twitter.com/share" class="twitter-share-button" data-text="↓今日から始めること↓" data-lang="ja">
  →twitterで行動宣言しよう！
  </a>
  </div>
  <div class="twitter">
  <a href="/calendar.php" class="twitter-share-button" data-text="↓今日から始めること↓" data-lang="ja">
  →各具体的行動を深掘りする
  </div>
</body>