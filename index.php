<?php
include 'User.php';
$object = new User();

?>
<html>

<head>
    <title>User and favorite fruits</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('images/orange.jpg');
        }

        .box {
            width: 1000px;
            padding: 20px;
            background-color: #fbfff9;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }
    </style>


</head>

<body>
    <div class="container box">
        <h3 align="center">Users and fruits</h3><br />
        <a href="add_user.php">
            <button type="button" name="add_user" class="btn btn-success btn-xs">Add user</button>
        </a>
        <br>
        <br>
        <div id="user_table" class="table-responsive">


        </div>

    </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {

        load_data();

        function load_data() {
            var action = "Load";

            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function(data) {
                    $('#user_table').html(data);
                }
            });
        }
    });


    $(document).on("click", ".delete", function(e) {
        e.preventDefault();
        e.stopPropagation();
        var user_id = $(this).attr("id");
        let val = confirm("Are you sure you want to delete this?");
        if (val === true) {
            $.ajax({
                url: "delete_user.php",
                method: "POST",
                data: {
                    user_id: user_id
                },
            })
            window.location.reload();

        }
    })

    $(document).on("click", ".update", function() {
        var user_id = $(this).attr("id");
        console.log(user_id);
        window.location.replace('update_user.php?user_id=' + user_id);

    })
</script>