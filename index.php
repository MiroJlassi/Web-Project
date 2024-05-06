<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body onload="ChangeImage()">

    <div class="navbar">
        <link rel="stylesheet" href="PREFAB/navbar.css">
        <img src="MEDIA/logo.png" alt="" style="height: 80%; border-radius: 100%; margin-right:50px ;">
        <div style="width: 50%;">Croissant Rouge Tunisien Comité Local Manouba</div>
        <a href=""><div class="navigation">HOME</div></a>
        <a href="Events/Events.php"><div class="navigation">EVENTS</div></a>
        <a href="Store/store.php"><div class="navigation">STORE</div></a>
        <a href="ABOUT US/index.php"><div class="navigation">ABOUT US</div></a>
        <div id="loginIcon" class="login-icon">
            <img src="MEDIA/login_icon.png" id="loginIcon" alt="Login Icon" width="40" height="auto" />
        </div>
    </div>


    <div class="container" id="loginContainer">
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <p>
                Don't have an account? <a href="#" id="showRegister">Register</a>
            </p>
            <button type="submit">Login</button>
        </form>
        <button onclick="closeContainer1()" class="close-button">Close</button>
    </div>

    <div class="container" id="registerContainer">
        <h2>Register</h2>
        <form id="registerForm" action="registre.php" method="post">
            <input type="text" name="username" placeholder="Username" required />
            <input type="text" name="email" placeholder="email" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="confirm_password" placeholder="Confirm Password" required />
            <button type="submit">Register</button>
        </form>
        <button onclick="closeContainer2()" class="close-button">Close</button>
    </div>



    <div class="timer" style="border-bottom: 5px solid rgba(255, 255, 255, 0.5);">
        <h1 id="nbDays"></h1>
        <p>إذا كنت لا تستطيع رفع الظّلم، على الأقلّ أخبر الجميع عنه</p>
    </div>

    <div style="width: 400px; height: 60px">
        <a href="DONATE/donate.php">
            <h1 class="donatebtn">DONATE NOW!</h1>
        </a>
    </div>

    <script src="login.js"></script>
    <script src="image.js"></script>
</body>

</html>