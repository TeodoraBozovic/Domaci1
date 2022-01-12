<?php
include("Fruits.php");

if(isset($_POST['add_fruit'])){
    $fruit = $_POST['fruit'];
    $description = $_POST['description'];
    $user_id = $_GET['user_id'];


    $user_fruit = new Fruits();
    $user_fruit->add_fruit($fruit, $description, $user_id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add user</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 jumbotron my-5">
                <a href='index.php'>
                    <button class='btn btn-success my-3'>Home page</button>
                </a>
                <h4 class="text-center my-2">Add new fruit</h4>

                <form method="post">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fruit</label>
                        <input type="text" class="form-control" name="fruit" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Description</label>
                        <textarea type= class="form-control" name="description" required></textarea>
                    </div>
                    <input  type="submit" name="add_fruit" value="add fruit" class="btn btn-success my-2">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>