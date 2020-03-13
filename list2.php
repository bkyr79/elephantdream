<?php
  if ($("[name="checkbox1"]").prop("checked")) {
    header('Location: conclusion.php');
  }
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>やることリスト表示</title>
</head>
<body>
  <h1>できた項目にチェックを入れよう！</h1>
  <p><input type="checkbox" name="checkbox01" class="checkbox01-input"><input type="text" name="" placeholder="リスト１" class="personal"></p>
  <p><input type="checkbox" name="checkbox01" class="checkbox01-input"><input type="text" name="" placeholder="リスト２" class="personal"></p>
  <p><input type="checkbox" name="checkbox01" class="checkbox01-input"><input type="text" name="" placeholder="リスト３" class="personal"></p>
</body>
</html>