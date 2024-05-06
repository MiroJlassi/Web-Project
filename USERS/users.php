<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "projet";

    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "CONNECTION FAILED";
    }

    $sql_items = "SELECT username,email, password FROM users";
    $result_items = mysqli_query($conn, $sql_items);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard USERS</title>
</head>
<body>

    <a name="up"></a>
    <div class="navbar">
        <link rel="stylesheet" href="../PREFAB/navbar.css">
        <img src="../MEDIA/logo.png" alt="" style="height: 80%; border-radius: 100%; margin-right:50px; ">
        <div style="width: 50%;">Croissant Rouge Tunisien Comité Local Manouba</div>
        <a href="../index.php"><div class="navigation">HOME</div></a>
        <a href="../Events/Events.php"><div class="navigation">EVENTS</div></a>
        <a href=""><div class="navigation">STORE</div></a>
        <a href="../About us/index.php"><div class="navigation">ABOUT US</div></a>
    </div>  


    <div class="main">
        <h2>USERS</h2>

        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result_items)) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
