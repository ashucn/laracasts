<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<h1>
    <ul>
        <?php foreach ($names as $name) :?>
        <li><?= $name; ?></li>
        <?php endforeach;?>
    </ul>
</h1>
</body>
</html>