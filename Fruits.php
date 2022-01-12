<?php
include("Database.php");

class Fruits extends Database
{
    public function get_fruit($fruit)
    {
        $sql = "SELECT * FROM fruits WHERE fruit='$fruit'";
        $result = $this->execute_query($sql);

        $row = mysqli_fetch_object($result);

        return $row;
    }

    public function delete_fruit($id)
    {
        $query = "DELETE FROM fruits WHERE id='$id'";

        $result = $this->execute_query($query);

        if ($result) {
            header("Location:index.php");
        } else {
            echo "Failed to delete fruit";
        }

    }

    public function add_fruit($fruit, $description, $user_id)
    {
        $query = "INSERT INTO fruits(fruit, description, user_id) VALUES ('$fruit', '$description', '$user_id')";

        $result = $this->execute_query($query);


        if ($result) {
            echo "<script>('You have successfully add new fruit')</script>";

            header("Location:index.php");
        } else {
            echo "<script>('Failed to add new fruit')</script>";
        }
    }

    public function user_fruits($user_id)
    {
        $sql = "SELECT * FROM fruits WHERE user_id='$user_id'";
        $result = $this->execute_query($sql);
        $fruits = "";
        while($row = mysqli_fetch_array($result))

        $fruits .="
            <tr>
                <td>" . $row['fruit'] . "</td>
                <td>" . $row['description'] . "</td>
                <td><a href='delete_fruit.php?id=" . $row['id'] . "'><button class='btn btn-danger col-md-12'>Delete</button></a></td>
            </tr>
                
            ";
        echo $fruits;
    }
}