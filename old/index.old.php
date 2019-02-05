<?php

$notifications = array('0'=>array('28/10','Sir Hashim','There will be no class today.'),'1'=>array('28/12','Madam Sadia','There will be 2 classes tomorrow.'),'2'=>array('28/12','Sir Safi','There is ana assigment due on Tuesday.'));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Information Board</title>
	<style type="text/css">
		.folder{
			width: 150px;
			background: #ececec;
			margin: 16px;
			border: 1px solid #dadada;
			float:left;
		}
	</style>
</head>
<body>

	<div class="navigationFolders">

		<a href="firstyear.php"><div class="folder">
			<div class="folderTitle">First Year Electronics</div>
			<div class="folderDescription">Some description related to first year electronics</div>
		</div></a>

		<div class="folder">
			<div class="folderTitle">First Year Electronics</div>
			<div class="folderDescription">Some description related to first year electronics</div>
		</div>

		<div class="folder">
			<div class="folderTitle">First Year Electronics</div>
			<div class="folderDescription">Some description related to first year electronics</div>
		</div>

		<div class="folder">
			<div class="folderTitle">First Year Electronics</div>
			<div class="folderDescription">Some description related to first year electronics</div>
		</div>

		<div class="folder">
			<div class="folderTitle">First Year Electronics</div>
			<div class="folderDescription">Some description related to first year electronics</div>
		</div>

	</div>

	<br style="clear:both" />

	<center>

		<h1>Smart Information Board</h1>

		<p>This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. This is some long text and description of something. </p>

<table>
	<tr><th>Date</th><th>Teacher</th><th>Announcement</th></tr>

	<?php

		foreach ($notifications as $key ) {
			echo '<tr><td>'.$key[0].'</td><td>'.$key[1].'</td><td>'.$key[2].'</td></tr>';
		}

		?>


	
</table>

		

	</center>

</body>
</html>