<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("items.xml");
$mysql_hostname = "localhost"; // Example : localhost
$mysql_user = "root";
$mysql_password = "pass";
$mysql_database = "Steam";

$dbh = new PDO("mysql:dbname={$mysql_database};host={$mysql_hostname};port=3306", $mysql_user, $mysql_password);

$xmlObject = $xmlDoc->getElementsByTagName('item');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
   $title = $xmlObject->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
   $link = $xmlObject->item($i)->getElementsByTagName('url')->item(0)->childNodes->item(0)->nodeValue;
   $sql = $dbh->prepare("INSERT INTO `Test` (`title`, `url`) VALUES (?, ?)");
   $sql->execute(array(
     $title,
     $link
   ));
   echo "Finished Item $title n<br/>";
}
php test.php
?>
