<html>
<head>
<title>View Album</title>
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
		
			$album_id = $_GET['id'];
		
			$query = mysql_query("SELECT id, name, url FROM photos WHERE album_id='$album_id'");
			while($run = mysql_fetch_array($query)){
				$name = $run['name'];
				$url = $run['url'];
		?>		
		<a href='view_photo.php?id=<?= $album_id; ?>&name=<?= $name;?>'>
			<div id='view_box'>
				<img src='uploads/<?= $name?>.jpg' />
				<button>View Image</button>
				
				<br/>
			</div>
		</a>
		<div class='clear'></div>
		<?php 
			}
		?>
	</div>
</div>

</body>
</html>