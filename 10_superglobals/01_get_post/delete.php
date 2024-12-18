<?php
//establish database connection

$conn = mysqli_connect("localhost", "testuserdb", "Admin@whyglobal", "test_project_mysql");
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
}

$query = "delete from user where id=".$user_id;
$q = $conn->query($query);
// print_r($q);
if ($q) {
    echo "Values deleted";
    header("location:postnew.php");
} else {
    echo "Values not deleted";
}