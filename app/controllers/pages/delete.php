<?php
$pages = new \App\models\Pages();
$pages->delete($_POST['id']);
header('location: /pages');
exit();

