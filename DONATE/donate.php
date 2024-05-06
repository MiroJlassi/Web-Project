<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">

    <link href="donate.css" rel="stylesheet">
    <title>Charity Donation Form</title>
</head>

<body>
    <a name="up"></a>
    <div class="navbar">
        <link rel="stylesheet" href="../PREFAB/navbar.css">
        <img src="../MEDIA/logo.png" alt="" style="height: 80%; border-radius: 100%; margin-right:50px ;">
        <div style="width: 50%;">Croissant Rouge Tunisien Comité Local Manouba</div>
        <a href="../index.php"><div class="navigation">HOME</div></a>
        <a href="../Events/Events.php"><div class="navigation">EVENTS</div></a>
        <a href="../Store/store.php"><div class="navigation">STORE</div></a>
        <a href="../ABOUT US/index.php"><div class="navigation">ABOUT US</div></a>
    </div>

    <form action="base.php" method="post">
        <h2>Charity Donation Form</h2>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" required><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" required><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br>

        <h3>Donation Type:</h3>
        <div style="display: flex;">
            <label for="donate_money" style="width: 50%;">Donate Money</label><br>
            <input type="radio" id="donate_money" name="donation_type" value="money" required >
        </div>

        <div style="display: flex;">
            <label for="donate_items" style="width: 50%;">Donate Items</label><br>
            <input type="radio" id="donate_items" name="donation_type" value="items">
        </div>

        <div id="money_fields">
            <label for="money_amount">Money Amount:</label><br>
            <input type="number" id="money_amount" name="money_amount" value="0"><br>
        </div>

        <div id="item_fields">
            <label for="item_name">Item Name:</label><br>
            <input type="text" id="item_name" name="item_name" required><br>

            <label for="quantity">Quantity:</label><br>
            <input type="number" id="quantity" name="quantity" required><br>
        </div>

        <button type="submit">SUBMIT</button>
    </form>
    <a href="index.html#up " style="position: fixed;background-origin: 10px; right: 15px;opacity: 70%; color: white;width: 50px;height: 50px; background-color: rgb(255, 53, 53);border-radius: 100%; display: flex;justify-content: center; align-items: center;font-size: 150%;">↑</a>

</body>
</html>

