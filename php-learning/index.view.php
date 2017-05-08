<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>
		<?= "Hello " . htmlspecialchars($_GET['name']) . ', ' . $greeting; ?>
	</h1>
</body>
</html>