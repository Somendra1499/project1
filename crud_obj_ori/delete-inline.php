<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = $conn->query($sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

$conn->close();

?>
