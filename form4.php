<?php
  include 'include/login.php';
  setcookie('desire3', $_POST['desire3'], time()+120);
  session_cache_limiter('none');
  session_start();
?>

<?php
  $msg = null;
  if (isset($_FILES['image']) && is_uploaded_file ($_FILES['image']['tmp_name'])) {
    $old_name = $_FILES['image']['tmp_name'];
    $new_name = date("YmdHis");
    $new_name .= mt_rand();
    switch (exif_imagetype($_FILES['image']['tmp_name'])){
      case IMAGETYPE_JPEG:
        $new_name .= '.jpg';
        break;
      case IMAGETYPE_GIF:
        $new_name .= '.gif';
        break;
      case IMAGETYPE_PNG:
        $new_name .= '.png';
        break;
      default:
        header('Location: form4.php');
        exit();
    }
    if (move_uploaded_file($old_name, 'album/' . $new_name)) {
      $msg = 'アップロードしました。';
    } else {
      $msg = 'アップロードできませんでした。';
    }
  }
?>

<?php
  $images = array();
  if ($handle = opendir('./album')){
    
    while($entry = readdir($handle)){
      
      if ($entry != "." && $entry != ".."){
        $images[] =$entry;
        
      }
      
    }
    
    closedir($handle);
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylesheet/form.css">
<title></title>
<style type="text/css">

body {
  background-image: url("/images/Visit pwdReykjavik iPhone Facebook Post.png");
}

.top {
  width: 800px;
  text-align: center;
  margin: 100px 200px 0px;
  padding: 100px 200px 0px 100px;
  position: fixed;
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

.explanation {
  color: #66FFFF;
  font-size: 18px;
  font-weight: bold;
  font-family: Georgia, serif;
}

.textarea {
  width: 250px;
  height: 100px;
  background-color: rgb(205,255,255);
  color: rgb(69,71,74);
}

.next {
  width: 125px;
  height: 40px;
  font-weight: bold;20:
}

.calendar {
  width: 120px;
  height: 40px;
}

html, body{
  width: 100%;
  height: 100%;
}

.gazo {
  width: 100%;
  height: 100%;
  object-fit: contain;
}
</style>
</head>

<body>
  <div class="top">
    <form method="POST" action="form5.php">
      <div class="explanation">さらに具体的に言うと？</div>
      <textarea name="desire4" class="textarea"></textarea><br>
      <input type="submit" value="次へ" class="next" onClick="location.href='/form5.php'"/>
      <input type="button" value="カレンダーを使う" class="calendar" onClick="location.href='calendar.php'"/><br><br>
    </form>  
  </div>
  <div class="bottom">
  <?php
    echo $_COOKIE['desire'];
    echo "→";
    echo $_COOKIE['desire2'];
    echo "→";
    echo $_POST['desire3'];
  ?>
</div>
<?php

$column = 1;
$width = 1000;
$dir = './album';
// 
$list = scandir($dir);

$files = array();
foreach($list as $value){
  if(is_file($dir . $value)){
    $files[] = $dir . $value;
  }
}

function columnGallery($files, $column, $width){

  $div = array();
   
  for($i=0;$i<$column;$i++){
    $heightTotal[$i] = 0;
  }
   
  foreach($files as $file){
    asort($heightTotal);
    $keys   = array_keys($heightTotal);
    $target   = reset($keys);
    $size   = getimagesize($file);
    $height   = $size[1];
    if(!isset($div[$target])) $div[$target] = array();
    $div[$target][] = $file;
    $heightTotal[$target] += $height;
  }
   
  // foreach($div as $files){
  //   echo "<div class=\"column\">\n";
  //   foreach($files as $file){
  //     echo "<img src=\"{$file}\" style=\"width:{$width}px;\" /><br />\n";
  //   }
  //   echo "</div>\n";
  // }
  // foreach($div as $files){
  //   echo "<div class=\"column\">\n";
  //   foreach($files as $file){
  //     echo "<img src=\"{$file}\" style=\"width:{$width}px;\" /><br />\n";
  //   }
  //   echo "</div>\n";
  // }

}

if (count($images) >= 0){
  echo '<img class="gazo" src="./album/' . $images[rand(0, count($images))].'">';
} else {
  echo '<p>画像はまだありません。</p>';
}   
?>
</body>
</html>
