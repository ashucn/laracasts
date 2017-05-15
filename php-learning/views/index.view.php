<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="/" title="Lorum ipsum dolor sit amet">home</a></li>
        <li><a href="/about" title="Lorum ipsum dolor sit amet">about</a></li>
        <li><a href="/contact" title="Aliquam tincidunt mauris eu risus">contact</a></li>
    </ul>
</nav>
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