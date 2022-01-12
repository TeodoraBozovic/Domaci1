<?php
include("Fruits.php");
$id = $_GET['id'];

$fruit = new Fruits();
$fruit->delete_fruit($id);
