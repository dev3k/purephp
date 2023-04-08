<?php
$pages = new \App\models\Pages();

view('Pages/index', ['pages' => $pages->get()]);
