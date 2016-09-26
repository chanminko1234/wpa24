<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Text Home</title>
</head>
<body>
	<h1><?php echo $title; ?></h1>
	<?php foreach ($students as $student) { ?>
		<h2><?php echo $student->name; ?></h2>
	<?php } ?>
</body>
</html>









