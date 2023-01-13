<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
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
          <div class="member">
            <form action="">
            <table>
               
                <thead>
                    <center><h2>Membership Packages</h2></center>
                  <tr>
                    <th>Package Name</th>
                    <th>Price</th>
                    <th>Hours</th>
                    <th>Selection</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Basic</td>
                    <td>$50</td>
                    <td>5</td>
                    <td><input type="radio" name="selection"></td>
                  </tr>
                  <tr>
                    <td>Standard</td>
                    <td>$100</td>
                    <td>10</td>
                    <td><input type="radio" name="selection"></td>
                  </tr>
                  <tr>
                    <td>Premium</td>
                    <td>$150</td>
                    <td>15</td>
                    <td><input type="radio" name="selection"></td>
                  </tr>
              
                </tbody>
              </table>
              <button type="submit" name="select" style="float: right; background-color: #f58709; padding: 5px 20px; margin-right: 380px; margin-top: 15px;">Select</button>
            </form>
              
          </div>

    </div>
    
</body>
</html>