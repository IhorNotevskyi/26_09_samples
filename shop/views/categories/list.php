<?php

/**
 * @var array $categories
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
            <th><?= getArrayValue($category, 'id') ?></th>
            <th><?= getArrayValue($category, 'title') ?></th>
            <th><?= getArrayValue($category, 'created_at') ?></th>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>