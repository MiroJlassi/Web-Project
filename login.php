<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "projet";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("CONNECTION FAILED: " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($conn, $_POST['username']); 
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if ($user['username'] === 'admin' && $user['password'] === 'admin') {
        // Admin login
        echo "<script>
            var username = '$username';
            alert('You are logged in successfully as admin, ' + username + '!');
            window.location.href = 'USERS/users.php';
            </script>";
        exit();
    } else {
        // Regular user login
        echo "<script>
            var username = '$username';
            alert('You are logged in successfully, ' + username + '!');
            window.location.href = 'index.php';
            </script>";
        exit();
    }
} else {
    // Invalid username or password
    echo "<script>
            alert('Invalid username or password. Please try again.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

mysqli_close($conn);
?>
