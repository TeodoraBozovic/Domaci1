<?php
include("Fruits.php");

$user_id = $_GET['user_id'];
$user_fruit = new Fruits();

?>
<html>
<head>
    <title>Fruit</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }

    </style>
</head>
<div class="container">
    <h1>Fruit</h1>
    <a href='index.php'>
        <button class='btn btn-success my-3'>Home page</button>
    </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $user_fruit->user_fruits($user_id)
            ?>
        </tr>
        </tbody>
    </table>
    <br>