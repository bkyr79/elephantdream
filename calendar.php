<?php
  include 'include/login.php';
?>

<?php
date_default_timezone_set('Asia/Tokyo');

if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}

$timestamp = strtotime($ym . '-01');
if($timestamp == false){
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

$today = date('Y-m-j');
$title = date('Y年m月' , $timestamp);
$prev = date('Y-m',strtotime('-1 month',$timestamp));
$next = date('Y-m',strtotime('+1 month',$timestamp));
$day_count = date('t',$timestamp);
$youbi = date('w',$timestamp);
$week = '';
$weeks = [];
$week .= str_repeat('<td></td>' , $youbi);

for($day = 1; $day <= $day_count; $day++,$youbi++){
    $date = $ym . '-' . $day;
    if($today == $date){
    $week .= '<td class="today">' . $day;
    } else {
    $week .= '<td>' . $day;
    }
    $week .= '</td>';

if ($youbi % 7 == 6 || $day == $day_count) {
    if ($day == $day_count) {
        $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
    }

$weeks[]='<tr>' . $week . '</tr>';
$week = '';
}
}
?>

<!DOCTYPE html>
<html lang="la">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <table border="1">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
</body>
</html>