<?php
include('db_connect.php');
?>


<?php

if(isset($_POST['submit_button']))
{

    $name = $_POST['user_name'];
    $age = $_POST['user_age'];

    

    //echo $name;
    //echo $age;

    $jegan_query = "INSERT INTO jegan_table (name_j, age_j) VALUES ('$name', '$age')";
    echo $jegan_query;


    if($conn->query($jegan_query) === TRUE)
    {
        echo "Data inserted successfully";
    }
    else {
        echo "data not inserted";
    }

}

?>

