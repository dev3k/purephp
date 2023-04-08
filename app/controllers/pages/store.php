<?php

use System\Validation;

$errors = [];
if (!Validation::string($_POST['title'], 1, 250)) {
    $errors['title'] = 'Title is required';
}
if (!Validation::string($_POST['content'], 1, 1000)) {
    $errors['content'] = 'Content is required';
}

if (!empty($errors)) {
    return view("pages/create", [
        'errors' => $errors
    ]);
}

$page = new \App\models\Pages();
$page->create([
    'title' => $_POST['title'],
    'content' => $_POST['content'],
]);
header('location: /pages');
exit();
