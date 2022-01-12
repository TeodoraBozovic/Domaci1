<?php
include("Fruits.php");


$name = $_GET['fruit'];
$user_fruit = new Fruits();
$fruit = $user_fruit->get_fruit($name);

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
            background-color: #f1f1f1;
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
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"></th>
            <td><?php echo $fruit->fruit ?></td>
            <td> <?php if ($fruit->description) ?></td>
            <td><a href="delete_fruit.php?fruit=<?php echo $fruit->fruit ?>">
                    <button type="button" class="btn btn-danger btn-xs delete">Delete</button>
                </a></td>
        </tr>
        </tbody>
    </table>
    <br>