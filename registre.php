<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "projet";
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    try{
        $conn = mysqli_connect($db_server, $db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "CONNECTION FAILED";
    }

    $name=$_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users (username,email, password)
    VALUES ('$name','$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                var username = '$name';
                alert(username + 'is well registered in our DATABASE 🥰;');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>