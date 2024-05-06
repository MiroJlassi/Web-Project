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

    $name=$_POST['fname'];
    $lastname = $_POST['lname'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $adr = $_POST['location'];
    $type = 1;
    $money = $_POST['money_amount'];
    $item = $_POST['item_name']; 
    $qte = $_POST['quantity']; 

    $sql = "INSERT INTO donations (name, lastname, tel, email, adr, donationtype, moneyamount, item, qte)
    VALUES ('$name', '$lastname', '$tel', '$email', '$adr', '$type', '$money', '$item', '$qte')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../Store/store.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>