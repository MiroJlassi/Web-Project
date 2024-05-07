<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "projet";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("CONNECTION FAILED: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$sql_admin = "SELECT * FROM users WHERE username = 'admin' AND password = 'admin'";

$result = mysqli_query($conn, $sql);
$result_admin = mysqli_query($conn, $sql_admin);

if (mysqli_num_rows($result_admin) > 0) {
    echo "<script>
            var username = '$username';
            alert('You are logged in successfully as admin, ' + username + '!');
            window.location.href = 'USERS/users.php';
          </script>";
    exit();
}

if (mysqli_num_rows($result) > 0) {
    echo "<script>
            var username = '$username';
            alert('You are logged in successfully, ' + username + '!');
            window.location.href = 'index.php';
          </script>";
    exit();
} else {
    echo "<script>
            alert('Invalid username or password. Please try again.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

mysqli_close($conn);
