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

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
                var username = '$username';
                alert('You are Logged in successfully !! Welcome Again 🤗'+ username);
                window.location.href = 'index.php';
              </script>";
        exit();
    } else {
        echo "<script>
        alert('Invalid UserName Or Password 😭');
        window.location.href = 'index.php';
        </script>";
        exit();
    }

    mysqli_close($conn);

?>


