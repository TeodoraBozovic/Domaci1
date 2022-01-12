<?php
include("User.php");

if(isset($_POST['add_user'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $job = $_POST['job'];

    $user = new User($first_name, $last_name, $job );
    $user->add_user($first_name, $last_name, $job);
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
                <h4 class="text-center my-2">Add new User</h4>

                <form method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">First name</label>
                        <input type="text" class="form-control" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last name</label>
                        <input type="text" class="form-control" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Job</label>
                        <input type="text" class="form-control" name="job" required>
                    </div>
                    <input  type="submit" name="add_user" value="add user" class="btn btn-success my-2">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>