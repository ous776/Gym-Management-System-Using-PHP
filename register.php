<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <nav>
                <nav>
                    <ul>
                        <li><a href="index.php"><img src="img/home.png" height="20px" width="20px"></a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="members.php">Members</a></li>
                        <li><a href="add_package.php">Add Package</a></li>
                        <li><a href="package_list.php">List Package</a></li>
                    </ul>
                </nav>
            </nav>
        </div>

        <div class="form2">
            <form method="Post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="register-input"><br>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" class="register-input"><br>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" class="register-input"><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="register-input"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="register-input"><br>
                <input type="submit" value="Sign up" class="rsubmit" >
            </form>
        </div>

    </div>

    <?php
    require_once 'db.php';
    require_once 'function.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $dob = $_POST['dob'];
        $password = $_POST['password'];

        $result = user_signup($conn, $name, $surname, $username, $dob, $password);
        echo $result;
    }
    ?>

</body>

</html>