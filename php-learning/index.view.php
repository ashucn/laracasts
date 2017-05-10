<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<h1>Task for the day</h1>

<ul>
    <li>Name: <?= $task['title'] ?></li>
    <li>Due Date: <?= $task['due'] ?></li>
    <li>Person Responsible: <?= $task['assigned_to'] ?></li>
    <li>Done: <?= $task['done'] ?'done':'incomplete' ?></li>
</ul>

</body>
</html>