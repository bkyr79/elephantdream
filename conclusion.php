<?php
  include 'include/login.php';
  setcookie('desire5', $_POST['desire5'], time()+60*60);
  session_start();

  echo $_COOKIE['desire'];
  echo "→";
  echo $_COOKIE['desire2'];
  echo "→";
  echo $_COOKIE['desire3'];
  echo "→";
  echo $_COOKIE['desire4'];
  echo "→";
  echo "あなたは今日から『";
  echo $_POST['desire5'];
  echo "』に取り組もう!!";
?>

<div class="twitter">
　<a href="//twitter.com/share" class="twitter-share-button" data-text="<!-- ここにTweetしたときにデフォルトでいれておきたい文字列を入れる -->" data-url="<!-- ここにTweetしたときに入れたいURLを入れる -->" data-lang="ja<!-- 日本語の場合 -->">
 Tweet
 </a>
</div>