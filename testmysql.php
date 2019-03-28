<?php
//Create Connection
    $conn = mysqli_connect('localhost', 'root', '',  'phpblog');

//check connection

if(mysqli_connect_errno()){
    // Connection failed..
    echo 'failed to connect to MYSQL'.mysqli_connect_errno();
}

$title = $_POST['title'];
$body = $_POST['body'];
$author = $_POST['author'];
//posts being the table in my database
$sql = "INSERT INTO posts (title, body, author) VALUES ('$title', '$body', '$author')";
//if the connection isn't being made, echo first message
if(!mysqli_query($conn, $sql))
{
    echo 'Not Inserted';
}
    else{
        echo 'Inserted';
        
    }
//else echo the latter





?>


