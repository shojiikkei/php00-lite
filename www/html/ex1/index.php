<html>
 <body>

<h3>今日の日付は？</h3>

<?php echo date('Y年m月d日</p>');?>

<h3>今日は何曜日？</h3>
<?php
$week = array('日', '月', '火', '水', '木', '金', '土');


$w = date('w');


$date = new DateTime();
$w = $date->format('w');

echo $week[$w].'曜日';

?>
</body>
</html>
