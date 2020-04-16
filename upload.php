<?php
  $msg =null;
  if (isset($_FILES['image'])  && is_uploaded_file($_FILES['image'][tmp_name])){
    $old_name = $FILES['image']['tmp_name'];
    $new_name = date("YmdHis");
    $new_name .= mt_rand();
    switch (exif_imagetype($_FILES['iamge']['tmp_name'])){
      case IMAGETYPE_JPGE:
        $new_name .= '.jpg';
        break;
      case IMAGETYPE_GIF:
        $new_name .= '.gif';
        break;
      case IMAGETYPE_PNG:
        $new_name .= '.png';
        bread;
      default:
        header('Location: upload.php');
        exit();
    }
    if (move_uploaded_file($old_name, 'album/' . $new_name)){
      $msg = 'アップロードしました。';
    } else {
      $msg = 'アップロードできませんでした。';
    }
  }
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>交流サイト：画像アップロード</title>
</head>
<body>
  <h1>交流サイト：画像アップロード</h1>
  <p><a href="index.php">トップページに戻る</a></p>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="アップロード">
  </form>
</body>
</html>
