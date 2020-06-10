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
    session_cache_limiter('none');
    session_start();

    echo $_COOKIE['desire'];
    echo "→";
    echo $_COOKIE['desire2'];
    echo "→";
    echo $_COOKIE['desire3'];
    echo "→";
    echo $_COOKIE['desire4'];
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

      body {
        background-image: url("/images/Visit pwdReykjavik iPhone Facebook Post.png");
      }

      .top {
        width: 800px;
        text-align: center;
        margin: 100px 200px 0px;
        padding: 100px 200px 0px 100px;
      }

      .bottom {
        width: 800px;

        text-align: center;
        margin: 0px 50px 0px;
      }

      .container {
        text-align: center;
        padding: 0px 200px 0px;
      }

      .conclusion {
        text-align: center;
      }
      .twitter {
        font-weight: bold;
        text-align: center;
        height: 50px;
        padding-top: 10px;
        text-decoration: underline;
      }

      .twitter-share-button {
        border: rgb(29,161,242);
        color: rgb(29,161,242);
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        width: 205px;
        height: 45px;
        text-decoration: none;
        /* text-decoration: underline; */
      }

      h3 {
        font-size: 30px;
      }

      .kmain {
        text-align: center;
        margin: 100px 200px 0px;
        padding: 50px 200px 0px;
        border-radius: none;
      }

      table {
        border: none;
      }

      .modoru {
        text-align: center;
        margin-left: 130px;
        margin-top: 5px;
      }
  </style>
  <div class="twitter">
  <a href="//twitter.com/share" class="twitter-share-button" data-text="↓今日から始めること↓" data-lang="ja">
  twitterで行動宣言しよう！
  </a>
  </div>
</body>