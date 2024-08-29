<?php
$username = $_post['username'];
$password = $_post['password'];

$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into(username, password)values(?,?)");
    $stmt->bind_param("si", $username, $password);
    $stmt->execute();
    echo"You are registered sucessfully";
    $stmt->close();
    $conn->close();
}
?>