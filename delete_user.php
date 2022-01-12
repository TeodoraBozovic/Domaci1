<?php
include("User.php");
$id = $_GET['user_id'];

$user = new User();
$row = $user->delete_user($id);