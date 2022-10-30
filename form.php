<html>
    <head>
        <title>Form</title>
</head>
<body>
    <form action="form_process.php" method="POST">

        <label>Name: </label>
        <input type="text" name="user_name"><br><br>

        <label>Age: </label>
        <input type="text" name="user_age"><br><br>

        <button type="submit" name="submit_button">Submit</button>

</form>





<?php
include('db_connect.php');
?>
<table border="1">
<th>Name</th><th>Age</th><th>Edit</th>
<?php
$sql = "SELECT * FROM jegan_table";
if($result=$conn->query($sql))
{
if($result->num_rows)
{
while($row=$result->fetch_object())
{
    echo "<tr>";
    echo "<td>".$row->name_j."</td>";
    echo "<td>".$row->age_j."</td>";
    echo "<td><a href='edit.php?send_name=$row->name_j && send_age=$row->age_j && my_name=DANNY'><button>Edit</button></a></td>";
    echo "</tr>";
}
}
}
?>
</table>

</body>
</html>

