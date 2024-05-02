<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "webproject";

    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "CONNECTION FAILED";
    }

    $sql_money = "SELECT SUM(money) AS total_money FROM donations";
    $result_money = mysqli_query($conn, $sql_money);
    $row_money = mysqli_fetch_assoc($result_money);
    $total_money = $row_money['total_money'];

    $sql_items = "SELECT item, SUM(qte) AS total_quantity FROM donations GROUP BY item";
    $result_items = mysqli_query($conn, $sql_items);

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <title>Charity Donation Dashboard</title>
    <style>
        body{
            margin: 0;
            font-family: "Inter", sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <a name="up"></a>
    <div class="navbar">
        <link rel="stylesheet" href="../PREFAB/navbar.css">
        <img src="../MEDIA/logo.png" alt="" style="height: 80%; border-radius: 100%; margin-right:50px ;">
        <div style="width: 50%;">Croissant Rouge Tunisien Comité Local Manouba</div>
        <a href="../index.php"><div class="navigation">HOME</div></a>
        <a href="../Events/Events.html"><div class="navigation">EVENTS</div></a>
        <a href=""><div class="navigation">STORE</div></a>
        <a href="../ABOUT US/index.html"><div class="navigation">ABOUT US</div></a>
    </div>  
    <h2>Charity Donation Dashboard</h2>

    <h3>Total Money Gathered: $<?php echo $total_money; ?></h3>

    <h3>Donated Items:</h3>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Total Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result_items)) {
                echo "<tr>";
                echo "<td>" . $row['item'] . "</td>";
                echo "<td>" . $row['total_quantity'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
