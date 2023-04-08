<?php
$pages = new \App\models\Pages();
$page = $pages->findOne($_GET['id']);
view('Pages/view', ['page' => $page]);
