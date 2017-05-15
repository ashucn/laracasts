<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<h1>Task for the day</h1>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description ?></strike>
            <?php else: ?>

                <?= $task->description ?>
            <?php endif; ?>

        </li>

    <?php endforeach; ?>
</ul>

</body>
</html>