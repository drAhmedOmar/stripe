<?php
include 'connect.php';

$stmt = $con->prepare('SELECT * FROM customers');
$stmt->execute();
$custs = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment-App</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <h2 class="text-center" style="margin:30px auto; color:#888; font-weight:bold">Customers Page</h2>
        <table class="table table-striped">
            <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E Mail</th>
            </tr>

            <?php foreach ($custs as $cust) { ?>
                <tr>
                    <td><?php echo $cust['Id']; ?></td>
                    <td><?php echo $cust['First_Name']; ?></td>
                    <td><?php echo $cust['Last_Name']; ?></td>
                    <td><?php echo $cust['Email']; ?></td>
                </tr>
            <?php } ?>

        </table>
        <hr>
        <a class="btn btn-secondary" href="index.php">Payment Page</a>
    </div>
    <!--End Coding Area-->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/charge.js"></script>
</body>

</html>