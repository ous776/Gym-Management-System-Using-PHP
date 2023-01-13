<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">

            <nav>
                <ul>
                    <li><a href="index.php"><img src="img/home.png" height="20px" width="20px"></a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="members.php">Members</a></li>
                    <li><a href="add_package.php">Add Package</a></li>
                    <li><a href="package_list.php">List Package</a></li>
                </ul>
            </nav>


        </div>

        <div class="form">
            <form method="Post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <h2>Sign-in</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="login-input">
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="login-input">
                <br>
                <input type="submit" value="Login" class="submit">

                <p>Don't have account? <a href="register.php">Sign-up</a></p>
            </form>
        </div>

    </div>

    <?php
    require_once 'db.php';
    require_once 'function.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = login($conn, $username, $password);
        echo $result;
    }
    ?>
</body>

</html>