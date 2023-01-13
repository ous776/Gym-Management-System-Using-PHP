<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Package</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
  
            <nav>
                <ul>
                    <li><a href="index.php"><img src="img/home.png" height="20px" width="20px"></a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="members.php">Members</a></li>
                  <li><a href="add_package.php">Add Package</a></li>
                  <li><a href="package_list.php">List Package</a></li>
                </ul>
              </nav>
<div class="add">
    <form method="Post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <center>
            <h2>Add Package</h2>
        </center>
        <label for="package-name">Package Name:</label>
        <input type="text" id="package-name" name="name" class="package-input"><br><br>
        
        <label for="package-price">Package Price:</label>
        <input type="text" id="package-price" name="price" class="package-input"><br><br>
        
        <label for="start-time">Start Time:</label>
        <input type="time" id="time" name="start_time" class="package-input"><br><br>
        
        <label for="end-time">End Time:</label>
        <input type="time" id="time" name="end_time" class="package-input"><br><br>
        
        <input type="submit" value="Create" class="submit">
      </form>
</div>

    </div>

    <?php
    require_once 'db.php';
    require_once 'function.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];

        $result = addPackage($conn, $name, $price, $start_time, $end_time);
        echo $result;
    }
    ?>
    
</body>
</html>