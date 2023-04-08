<?php
$pages = new \App\models\Pages();
$page = $pages->findOne($_GET['id']);
view('pages/edit', ['page' => $page]);
