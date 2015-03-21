<html>
<head>
<title><?= $_GET['name']; ?></title>
<link rel='stylesheet' href='style.css' />
<style>
img{
float:left;
}
</style>
</head>
<body>
<?php include 'connect.php';?>
<div id='body'>
	<?php include 'title_bar.php';?>
	<div id='container'>
		<?php 
		if(empty($_GET)){
			echo "No pictures in this album!";
		}
		else{
			$album_id = $_GET['id'];
		
			$query = mysql_query("SELECT id, name, url FROM photos WHERE album_id='$album_id'");
			while($run = mysql_fetch_array($query)){
				$name = $run['name'];
				$url = $run['url'];
		?>		

			<div id='view_box'>
				<img src='uploads/<?= $name?>.jpg' />
					<a href='view_photo.php?id=<?= $album_id; ?>&name=<?= $name;?>'>View Photo</a>
					<a href='delete_photo.php?name=<?= $name?>'>Delete Photo</a>
				<br/>
			</div>
		</a>
		<div class='clear'></div>
		<?php 
			}}
		?>
	</div>
</div>

</body>
</html>
