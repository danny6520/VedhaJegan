<?php
include('db_connect.php');
$name = $_GET['send_name'];
$age = $_GET['send_age'];
echo $name;
echo $age;
?>
<form action="edit.php" method="POST">
<label>Enter new name: <label><br><br>
<input type="text" name="new_name"><br><br>
<button type="submit" name="submit">Edit Name </button>
</form>
<?php

if(isset($_POST['submit']))
{
    $user_new_name = $_POST['new_name'];

    $update_query = "UPDATE jegan_table SET name_j = '$user_new_name' WHERE name_j = '$name_get'";

echo $update_query;
if($conn->query($update_query) === TRUE)
{
    echo "Date updated successfully";
}
else {
    echo "NOT Success";
}
}
?>