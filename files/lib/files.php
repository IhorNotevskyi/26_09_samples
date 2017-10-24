<?php

/**
 * @param array $fileData
 * @param string $storage
 * @param array $allowedMimeTypes
 * @return bool
 */
function uploadFile(array $fileData, $storage, array $allowedMimeTypes = [])
{
    if ($fileData['size'] <= 0) {
        return false;
    }

    if ($allowedMimeTypes && !in_array($fileData['type'], $allowedMimeTypes)) {
        return false;
    }

    $storage = rtrim($storage, '/\\') . '/';
    $ext = pathinfo($fileData['name'], PATHINFO_EXTENSION);
    $newFileName = getUniqueName($storage, $ext);

    return move_uploaded_file($fileData['tmp_name'], "{$storage}/{$newFileName}");
}

/**
 * @param string $dir
 * @param string $ext
 * @return string
 */
function getUniqueName($dir, $ext)
{
    $dir = rtrim($dir, '/\\') . '/';
    do {
        $name = time() . '_' . uniqid() . ".{$ext}";
    } while (file_exists("{$dir}/{$name}"));

    return $name;
}
