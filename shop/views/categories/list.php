<?php

/**
 * @var \models\Category[] $categories
 */

?>

<h1>Categories list</h1>
<p><a href="/categories/create" class="btn btn-success">Create category</a></p>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Category name</th>
        <th scope="col">Create date</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($categories as $category) : ?>
        <tr>
            <th><?= $category->id ?></th>
            <th><?= $category->title ?></th>
            <th><?= $category->getPreparedDate() ?></th>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>