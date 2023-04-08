<?php
$pages = new \App\models\Pages();

view('pages/index', ['pages' => $pages->get()]);
