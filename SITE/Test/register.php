<?php
session_start();
//connect to database
$db = mysqli_connect("localhost","root","pass","Steam");
  if(isset($_POST['Save_btn']))
  {
	$GameName = $_POST['gamename'];
	$GameDesc = $_POST['gamedesc'];
  $ImgUrl = $_POST['imgurl'];
  $GamePrice = $_POST['gameprice'];
	$GameRating = $_POST['gamerating'];
  $GameGenre = $_POST['gamegenre'];  
		

	$sql="INSERT INTO GameInfo(GameName,GameDesc,ImgUrl,GamePrice,GameRating,GameGenre) VALUES('$GameName','$GameDesc','$ImgUrl','$GamePrice','$GameRating','$GameGenre')";
  (mysqli_query($db,$sql);
		
                           
  }

	if(isset($_POST['Get_btn']))
  {
	$sqlGet = "SELECT * FROM GameInfo";
	$sqldata = mysqli_query($db, $sqlGet) or die('you done fucked');
		
	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
		
		
		echo "Game Name: "; echo  $row['GameName'];
		echo '<br/>';
		echo "Game Description: ";echo  $row['GameDesc'];
		echo '<br/>';
		echo "Image Url: ";echo $row['ImgUrl'];
		echo '<br/>';
		echo "Game Price: ";echo $row['GamePrice'];
		echo '<br/>';
		echo "Game Rating: ";echo $row['GameRating'];
		echo '<br/>';
		echo "Game Genre: ";	echo $row['GameGenre'];
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
	}
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register , login and logout user php mysql</title>
</head>
<body>
<div class="header">
    <h1>Register, login and logout user php mysql</h1>
</div>
<form method="post" action="register.php">
  <table>
     <tr>
           <td>Game Name : </td>
           <td><input type="text" name="gamename" class="textInput"></td>
     </tr>
     <tr>
           <td>Game Desc: </td>
           <td><input type="text" name="gamedesc" class="textInput"></td>
     </tr>
      <tr>
           <td>img url : </td>
           <td><input type="text" name="imgurl" class="textInput"></td>
     </tr>
		<tr>
           <td>Game Price : </td>
           <td><input type="text" name="gameprice" class="textInput"></td>
     </tr>
		<tr>
           <td>Game rating: </td>
           <td><input type="text" name="gamerating" class="textInput"></td>
     </tr>
		<tr>
           <td>Game Genre : </td>
           <td><input type="text" name="gamegenre" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
				<td><button name="Save_btn" type="submit" value="HTML">Save Data</button></td>
				<td><button name="Get_btn" type="submit" value="HTML">Get Data</button></td>
				
     </tr>
  
</table>
</form>
</body>
</html>