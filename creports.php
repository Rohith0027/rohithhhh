<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="merchant.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sales & Purchase</title>
</head>
<body style="margin: 50px; padding-top: 50px;">
    <header>
        <h1 class="brand"><?php echo $_SESSION['name']; ?></h1>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <a href="customer.php">Home</a>
            <a href="item.php">Search</a>
            <a href="hospital.php">Register</a>
            <a href="sales.php">Purchase & Sales</a>
            <a href="creports.php">Reports</a>
            <a href="logout.php">Logout</a>
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>
    <h1>List of Comments</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Industry</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'config.php';
            $sql = mysqli_query($conn, "SELECT * FROM `comment` WHERE uname = '".$_SESSION['name']."'");
            while($row = $sql->fetch_assoc()){
            echo "<tr>
                    <td>" . $row["title"] . "</td>
                    <td>" . $row["uname"] . "</td>
                    <td>" . $row["comment"] . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="merchant.js"></script>
</body>
</html>