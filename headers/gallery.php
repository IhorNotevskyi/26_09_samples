<?php

$files = scandir(__DIR__ . '/img');
$images = array_filter($files, function ($item) {
    return !in_array($item, ['.', '..']);
});

?>

<a href="download.php">Download</a>

<?php foreach ($images as $image) : ?>
    <img src="/headers/image.php?item=<?= $image ?>" width="200px">
<?php endforeach; ?>
