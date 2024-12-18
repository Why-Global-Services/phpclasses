<?php
//establish database connection

$conn = mysqli_connect("localhost", "testuserdb", "Admin@whyglobal", "test_project_mysql");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $password = trim($_POST['pass']);
    //prepration of query
    $query = "insert into user(name, pass) values('" . $name . "','" . $password . "')";
    //echo $query;
    //executing the query
    $q = $conn->query($query);
    // print_r($q);
    if ($q) {
        echo "Values instered";
    } else {
        echo "Values not inserted";
    }
}
$users = [];
$getQuery = "select * from user order by id asc";
$res = $conn->query($getQuery);
while ($row = $res->fetch_assoc()) {

    // print_r($row);
    $users[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="NAME" />
        <input type="password" name="pass" id="pass" placeholder="Password" />
        <button type="submit">Submit</button>
    </form>
    <table>
        <th>Name</th>
        <th>Password</th>
        <th>Action</th>

        <?php foreach ($users as $user) {
            // print_r($user);
            echo ' <tr><td>' . $user['name'] . '</td>';
            echo '<td>' . $user['pass'] . '</td>';
            echo '<td> <a href="edit.php?id='.$user['id'].'">Edit</a> &nbsp;&nbsp; <a href="delete.php?id='.$user['id'].'">Delete</a></td>';
            echo '</tr>';
        } ?>


    </table>
</body>

</html>