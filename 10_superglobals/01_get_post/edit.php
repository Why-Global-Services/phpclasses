<?php
//establish database connection

$conn = mysqli_connect("localhost", "testuserdb", "Admin@whyglobal", "test_project_mysql");
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $password = trim($_POST['pass']);
    //prepration of query
    //$query = "insert into user(name, pass) values('" . $name . "','" . $password . "')";
    $query = "update user set name = '" . $name . "', pass='" . $password . "' where id=" . $user_id;
    //echo $query;
    //executing the query
    $q = $conn->query($query);
    // print_r($q);
    if ($q) {
        echo "Values Updated";
        header("location:postnew.php");
    } else {
        echo "Values not inserted";
    }
}
$getQuery = "select * from user where id=" . $user_id;
$res = $conn->query($getQuery);
$users = mysqli_fetch_assoc($res);


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
        <input type="text" name="name" id="name" placeholder="NAME" value="<?php echo $users['name'] ?>" />
        <input type="password" name="pass" id="pass" value="<?php echo $users['pass'] ?>" placeholder="Password" />
        <button type="submit">Submit</button>
    </form>
    <!-- <table>
        <th>Name</th>
        <th>Password</th>
        <th>Action</th>

        <?php foreach ($users as $user) {
            // print_r($user);
            echo ' <tr><td>' . $user['name'] . '</td>';
            echo '<td>' . $user['pass'] . '</td>';
            echo '<td> <a href="edit.php?id=<?php echo $user["id"];?>">view</span>     <a href="detele.php?id=<?php echo $user["id"];?>"> </td>';
            echo '</tr>';
        } ?>


    </table> -->
</body>

</html>