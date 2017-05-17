<div class="container">
<?php require('partials/head.php') ?>
<h1>Users page</h1>

<?php foreach($users as $user) : ?>
<li><?= $user->name ?></li>
<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form action="/users" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>

<?php require('partials/footer.php') ?>
</div>