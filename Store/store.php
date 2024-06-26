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

    $sql_money = "SELECT SUM(moneyamount) AS total_money FROM donations";
    $result_money = mysqli_query($conn, $sql_money);
    $row_money = mysqli_fetch_assoc($result_money);
    $total_money = $row_money['total_money'];

    $sql_items = "SELECT item, SUM(qte) AS total_quantity FROM donations WHERE qte != 0 GROUP BY item";
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
    <title>Charity Donation Dashboard</title>
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
        <h2>Charity Donation Dashboard</h2>

        <div>
            <img src="money.jpg" alt="" style="width: 200px;height:150px; border-radius:100%">
            <h3>Total Money Gathered: $<?php echo $total_money; ?></h3>
        </div>
        

        <div style="width: 100%; height:3px; border-radius: 20px; background-color: gray;"></div>
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


        <div style="width: 400px; height: 60px">
            <a href="../DONATE/donate.php">
                <h1 class="donatebtn">DONATE NOW!</h1>
            </a>
        </div>
    </div>

</body>
</html>
