<html>
<head>
  <meta http-equiv="Content-Type" content = "text/html; charset=utf-8>

</head>
<body>

<?php
mysql_connect("localhost" , "root" , "");
mysql_select_db("steam");

$sql = mysql_query("SELECT * FROM GameInfo");

$AppID = 'AppID';
$GameName = 'GameName';
$GameDesc = 'GameDesc';
$ImgUrl = 'ImgUrl';
$GamePrice = 'GamePrice';
$GameRating = 'GameRating';
$GameGenre = 'GameGenre';

$rows = mysql_fetch_assoc($sql);

echo $rows[$GameName] . </br> .  $rows[$GameDesc] . </br> . $rows[$GamePrice] . </br> . $rows[$GameRating] . </br> . $rows[$GameGenre];


?>
</body>
</html>