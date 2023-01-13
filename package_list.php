<?php require_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package List</title>
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
        <div class="list">
            <table>

                <thead>
                    <center>
                        <h2>Package List</h2>
                    </center>





                    <tr>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Hours</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM package";
                    $result = $conn->query($sql);



                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>" . $row["start_time"] . " - " . $row["end_time"] . "</td>
              <td>" . ' <form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);">
              <input type="hidden" name="id" value="$row["id"]">
              <input type="submit" value="Delete" style="background-color: #f57621; padding: 5px 10px; border-radius: 6px; onclick="return confirm("Are you sure you want to delete this package?");">
            </form>' . "</td>
                    </tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    require_once 'function.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];

        $result = deletePackage($conn, $id);
        echo $result;
    }
    ?>

</body>

</html>