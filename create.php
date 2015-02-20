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
	
		<h3>Create Album</h3>
		
		<form method='post'>
		<?php 
		
		if(isset($_POST['name'])){
			
			$name = $_POST['name'];
			
			if(empty($name)){
				echo "<b>Please enter a valid name for the album!</b> <br/></br>";
			}
			else{
				mysql_query("INSERT INTO albums VALUES ('', '$name')");
				
				echo "<b>Album created successfully!</b><br/><br/>";
			}
		}
		?>
			Album Name : <input type='text' name='name' /> <input type='submit' value='Create'/>
		</form>
	</div>
</div>

</body>
</html>