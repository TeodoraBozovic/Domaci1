<?php
include("User.php");
$id = $_GET['user_id'];
$user = new User();
$row = $user->get_user($id);

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$job = $row['job'];


if (isset($_POST['edit_user'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $job = $_POST['job'];

    $user->update_user($first_name, $last_name, $job, $id);

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task1</title>

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
                <h4 class="text-center my-2">Edit User</h4>

                <form method="post">
                    <label>First name</label>
                    <input type="text" name="first_name" class="form-control" autocomplete="on" required
                           value="<?php echo $first_name ?>">

                    <label>Last name</label>
                    <input type="text" name="last_name" class="form-control" autocomplete="on" required
                           value="<?php echo $last_name ?>">

                    <label>Job</label>
                    <input type="text" name="job" class="form-control" autocomplete="on" required
                           value="<?php echo $job ?>">

                    <input type="submit" name="edit_user" value="Edit user" class="btn btn-success my-2">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>