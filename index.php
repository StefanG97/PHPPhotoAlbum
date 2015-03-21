<html>
<head>
<title>Photo Album</title>
<link rel='stylesheet' href='style.css' />
</head>
<body>
<?php include 'connect.php';?>
<div id='body'>
	<?php include 'title_bar.php';?>
	<div id='container'>
		<?php 
		
			$query = mysql_query("SELECT id, name FROM albums");
			while($run = mysql_fetch_array($query)){
				$album_id = $run['id'];
				$album_name = $run['name'];
				
					$query1 = mysql_query("SELECT url FROM photos WHERE album_id='$album_id'");
					$run1 = mysql_fetch_array($query1);
					$pic = $run1['url'];
					
		?>
		
			<div id="view_box">
				<img src='uploads/<?= $pic?>' />
					<a href='view.php?id=<?= $album_id; ?>&name=<?= $album_name?>'>View Album</a>
					<a href='delete_album.php?id=<?= $album_id; ?>'>Delete Album</a>
			</div>
		
		</a>
		<?php 
		
		
		
			}	
		?>
		<div class='clear'>
		
		</div>
	</div>
</div>

</body>
</html>
