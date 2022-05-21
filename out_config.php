<?php 
include __DIR__.'/Model.php';

$model = new Model();
session_destroy();
$model->redirect('index.php');