<?php
$config = [
    'site'     => ['html', 'php'],
    'site/img' => ['png', 'jpg', 'jpeg'],
    'site/css' => ['css'],
    'site/js'  => ['js']
];

$errors = [];

foreach ($config as $folder => $allowedExtensions) {
    if (!is_dir($folder)) {
        echo "Dossier manquant : $folder\n";
        continue;
    }

    $files = array_diff(scandir($folder), ['.', '..']);
    foreach ($files as $file) {
        $path = $folder . '/' . $file;
        if (is_file($path)) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($ext, $allowedExtensions)) {
                $errors[] = "Fichier interdit : $path (Attendu : ." . implode(', .', $allowedExtensions) . ")";
            }
        }
    }
}

if (count($errors) > 0) {
    foreach ($errors as $err) echo "$err\n";
    exit(1);
}

echo "Arborescence conforme !\n";
exit(0);