<?php
require 'user.php';
$object = new User();

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['value_to_search'];

    echo $object->get_data_in_table("SELECT * FROM `users` WHERE CONCAT(`id`, `first_name`, `last_name`, `job`) LIKE '%" . $valueToSearch . "%'");
};
?>

<head>
    <title>User and favorite fruits</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }
    </style>
</head>
<a href='index.php'>
    <button class='btn btn-success my-3'>Home page</button>
</a>

</html>