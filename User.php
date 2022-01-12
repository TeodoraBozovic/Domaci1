<?php
include('Database.php');

class User extends Database
{

    public function get_user($id)
    {
        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = $this->execute_query($sql);

        $row = mysqli_fetch_array($result);

        return $row;
    }

    public function add_user($first_name, $last_name, $job)
    {
        $query = "INSERT INTO users(first_name, last_name, job) VALUES ('$first_name', '$last_name', '$job')";
        $result = $this->execute_query($query);


        if ($result) {
            echo "<script>('You have successfully add new user')</script>";

            header("Location:index.php");
        } else {
            echo "<script>('Failed to add new user')</script>";
        }
    }

    public function delete_user($id)
    {
        $query = "DELETE FROM users WHERE id=$id";

        $result = $this->execute_query($query);

        if ($result) {
            header("Location:index.php");
        } else {
            echo "Failed to edit new user";
        }

    }

    public function update_user($first_name, $last_name, $job, $id)
    {
        $query = "UPDATE users SET first_name='$first_name', last_name='$last_name', job='$job' WHERE id = '$id'";
        $result = $this->execute_query($query);
        if ($result) {
            header("Location:index.php");
        } else {
            echo "Failed to edit new user";
        }
    }



    public function get_data_in_table($query)
    {
        $output = '';
        $result = $this->execute_query($query);
        $output .= '
        <form action="filter.php" method="post">
            <div>
                <input type="text" name="value_to_search"   placeholder="Search" >
                <input type="submit" name="search" >
            </div>
            <br>
           <table id="user_table" class="user_table table-bordered table-striped">  
                <tr>  
                     <th width="10%">#</th>  
                     <th width="20%">First Name</th>  
                     <th width="20%">Last Name</th>  
                     <th width="10%">Job</th>  
                     <th width="10%">Update</th>  
                     <th width="10%">Delete</th>  
                     <th width="10%">Add fruit</th>  
                </tr>  
           ';
        while ($row = mysqli_fetch_object($result)) {
            $output .= '  
                
                  <tr>       
                     <td><a href="user_fruits.php?user_id=' . $row->id . '">Favorite fruits</a></td>  
                     <td>' . $row->first_name . '</td>  
                     <td>' . $row->last_name . '</td>  
                     <td>' . $row->job . '</td>  
                     <td><a href="update_user.php?user_id=' . $row->id   .'"><button type="button" name="update"  class="btn btn-success btn-xs update">Update</button></a></td>  
                     <td><a href="delete_user.php?user_id=' . $row->id   .'" <button type="button" name="delete" class="btn btn-danger btn-xs delete">Delete</button></td>  
                     <td><a href="add_fruit.php?user_id=' . $row->id   .'" <button type="button" class="btn btn-success btn-xs">Add fruit</button></td>  
                </tr>  
                ';
        }


        $output .= '</table> </form>';
        return $output;
    }

}

?>