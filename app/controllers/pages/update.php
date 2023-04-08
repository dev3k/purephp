<?php

use System\Validation;

$pages = new \App\models\Pages();
$page = $pages->findOne($_GET['id']);

$errors = [];
if (!Validation::string($_POST['title'], 1, 250)) {
    $errors['title'] = 'Title is required';
}
if (!Validation::string($_POST['content'], 1, 1000)) {
    $errors['content'] = 'Content is required';
}

if (!empty($errors)) {
    return view("pages/edit", [
        'errors' => $errors,
        'page' => $page
    ]);
}
$pages->update($_POST['id'], [
    'title' => $_POST['title'],
    'content' => $_POST['content']
]);

header('location: /pages');
die();
