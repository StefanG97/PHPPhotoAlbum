<html>
<head>
<title><?= $_GET['name']; ?></title>
<link rel='stylesheet' href='style.css' />
</head>
<body>
<?php include 'connect.php';?>
<div id='body'>
	<?php include 'title_bar.php';?>
	<div id='container'>
		<?php 
			
			$album_id = $_GET['id'];
			$name = $_GET['name'];
		?>	
			
		<div>
   			<table align='center'>
   				<tr>
					<td >
	 					<div style="margin: 10px; max_heigth: 90%">
         					<img src="uploads/<?= $name;?>.jpg"/><br/>
         				</div>
   					</td>
   				</tr>
   			</table>
   		</div>	
		<div class='clear'></div>
	</div>
</div>

</body>
</html>
