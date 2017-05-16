<div class="container">
<?php require('partials/head.php') ?>
<h1>Submit Your Name</h1>

<form action="/names" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </div>
</form>
<?php require('partials/footer.php') ?>
</div>