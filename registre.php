<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "projet";

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "CONNECTION FAILED: " . $e->getMessage();
}

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (username, email, password) VALUES (:name, :email, :pass)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':pass', $pass);

try {
    $stmt->execute();
    echo "<script>
            var username = '$name';
            alert(username + 'is well registered in our DATABASE 🥰;');
            window.location.href = 'index.php';
          </script>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
