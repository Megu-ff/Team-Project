<?php
session_start();
//connect to database
$db = mysqli_connect("localhost","root","pass","Steam");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- other -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

	<form method="post" action="index.php">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<h1>Steam Reviews</h1>

						<input type="text" name="search" placeholder="Search..">
						<button name="Get_btn" type="submit" value="HTML">Get Data</button>
						<button name="Run_btn" type="submit" value="HTML">Run Data</button>
						<button name="PriceAsc_btn" type="submit" value="HTML">Cheapest</button>
						<button name="PriceDesc_btn" type="submit" value="HTML">Most Expensive</button>
						
						
						
						
					</div>
				</div>
			</div>
			
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<a href="#"><img src="img/ex1.jpg" alt=featured></a>
					<div class="carousel-caption">
						<h3>Title</h3>
					</div>
				</div>
				<div class="item">
					<a href="#"><img src="img/ex2.jpg" alt=featured></a>
					<div class="carousel-caption">
						<h3>Title</h3>
					</div>
				</div>
				<div class="item">
					<a href="#"><img src="img/ex3.jpg" alt=featured></a>
					<div class="carousel-caption">
						<h3>Title</h3>
					</div>
				</div>
				<div class="item">
					<a href="#"><img src="img/ex4.jpg" alt=featured></a>
					<div class="carousel-caption">
						<h3>Title</h3>
					</div>
				</div>
				<div class="item">
					<a href="#"><img src="img/ex5.jpg" alt=featured></a>
					<div class="carousel-caption">
						<h3>Title</h3>
					</div>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous"</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
			
			<?php 
	if(isset($_POST['Run_btn']))
	{
				$xml=simplexml_load_file("games.xml") or die("Error: Cannot create object");
				foreach($xml->children() as $games) {  ?>
			
			<div class="col-sm-4">
			<div class="row">
				
				<div class="content_container">
					<div class="title">
						<?php echo $games->GameName; ?>
					</div>
					<div class = "price">
					€ <?php echo $games->GamePrice; ?>
					</div>
					<div class = "date">
						<?php echo $games->GameDate; ?>
					</div>
						<!-- Above Image content -->
					
					<div class = "image">		
						<a href="<?php echo $games->GameLink; ?>"><img class="img-responsive" src="<?php echo $games->GameImgUrl;?>" alt="picture"></a>
					</div>
						<!-- Below Image content -->
				</div>
			</div>
		</div>
				
	<?php }} ?>
			
			
		
			
<!-- 			Stream List -->
		
			
	<?php 
	if(isset($_POST['Get_btn']))
	{
	$sqlGet = "SELECT * FROM GameInfo";
	$sqldata = mysqli_query($db, $sqlGet) or die('you done fucked');
	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){  ?>
			
			<div class="col-sm-4 steam_stream">
			<div class="row">
				
				<div class="content_container">
					<div class="title">
						<h6><?php echo $row[GameName] ?><h6>
					</div>
					<div class = "price">
						<p>€ <?php echo $row[GamePrice]?></p>
					</div>
						<!-- Above Image content -->
							<a href="<?php echo $row[ImgLink] ?>"><img class="img-responsive" src="<?php echo $row[ImgUrl] ?>" alt="picture"></a>
						<!-- Below Image content -->
					<div class="genre">
						<h6><?php echo $row[GameGenre] ?></h6>	
					</div>
					<div class="masterdiv">
						<div class="description">
							<p><?php echo $row[GameDesc] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
				
	<?php }} ?>
				
		<?php 
	if(isset($_POST['PriceAsc_btn']))
	{

	$sqlGet = "SELECT * FROM GameInfo ORDER BY GamePrice ASC";
	$sqldata = mysqli_query($db, $sqlGet) or die('you done fucked');
	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){  ?>
			
			<div class="col-sm-4 steam_stream">
			<div class="row">
				
				<div class="content_container">
					<div class="title">
						<h6><?php echo $row[GameName] ?><h6>
					</div>
					<div class = "price">
						<p>€ <?php echo $row[GamePrice]?></p>
					</div>
						<!-- Above Image content -->
							<a href="<?php echo $row[ImgLink] ?>"><img class="img-responsive" src="<?php echo $row[ImgUrl] ?>" alt="picture"></a>
						<!-- Below Image content -->
					<div class="genre">
						<h6><?php echo $row[GameGenre] ?></h6>	
					</div>
					<div class="masterdiv">
						<div class="description">
							<p><?php echo $row[GameDesc] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
				
	<?php }} ?>
				
	<?php 
	if(isset($_POST['PriceDesc_btn']))
	{

	$sqlGet = "SELECT * FROM GameInfo ORDER BY GamePrice DESC";
	$sqldata = mysqli_query($db, $sqlGet) or die('you done fucked');
	while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){  ?>
			
			<div class="col-sm-4 steam_stream">
			<div class="row">
				
				<div class="content_container">
					<div class="title">
						<h6><?php echo $row[GameName] ?><h6>
					</div>
					<div class = "price">
						<p>€ <?php echo $row[GamePrice]?></p>
					</div>
						<!-- Above Image content -->
							<a href="<?php echo $row[ImgLink] ?>"><img class="img-responsive" src="<?php echo $row[ImgUrl] ?>" alt="picture"></a>
						<!-- Below Image content -->
					<div class="genre">
						<h6><?php echo $row[GameGenre] ?></h6>	
					</div>
					<div class="masterdiv">
						<div class="description">
							<p><?php echo $row[GameDesc] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
				
	<?php }} ?>
<!-- 			end stream list -->
			
			</div>
	</form>
	</body>
</html>