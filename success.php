<?php

    require_once('connect.php');

    //Get Id , Product
    if(!empty($_GET['tid']) && !empty($_GET['product'])){
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];
    } else{
        header('location:index.php');
    }

    //GEt Firstname , Lastname
    if(!empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['email'])){
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
    }
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

<div class="container alert alert-success text-center sucess">
    <div class="success mt-4">
        <h2>Thank You For Purchasing Our Course <?php echo $product; ?></h2>
        <p>Your Transaction Number Is <b><?php echo $tid; ?></b></p>
        <p>Chesk Your Email For More Informations</p>
        <a class="btn btn-primary" href="index.php">Back Home</a>
    </div>

<!--Add The New Customer To Payment Database-->
<?php

/* echo $tid . "<br>";
echo $firstname . "<br>";
echo $lastname . "<br>";
echo $email . "<br>"; */

    $stmt = $con->prepare('INSERT INTO 
                                customers 
                                    (Id, First_Name, Last_Name, Email)
                                Values
                                    (:Id, :First_Name, :Last_Name, :Email)
                        ');
    $stmt->execute(array(
        ':Id' => $tid,
        ':First_Name' => $firstname,
        ':Last_Name' => $lastname,
        ':Email' => $email
    ));
    $count = $stmt->rowCount();
    if($count > 0){
        echo '<div class="alert alert-success">Customer Has Been Added Successfully</div>';
    }else{
        echo 'Failed To Add Customer';
    }

?>

</div><!--for container -->
<!--End Coding Area-->
<script src="https://js.stripe.com/v3/"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/charge.js"></script>
</body>
</html>