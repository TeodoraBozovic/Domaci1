<?php
//action.php
include 'user.php';
$object = new User();


if (isset($_POST["action"])) {
    if ($_POST["action"] == "Load") {
        echo $object->get_data_in_table("SELECT * FROM users ORDER BY id DESC");
    }

}


