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
        <form action="charge.php" method="post" id="payment-form">
            <h3 class="text-center">Add Your Payment Data</h3>
            <div class="form-row">
                <div class="data-style form-control">
                    <input type="text" name="firstName" placeholder="First Name" />
                </div>
                <div class="data-style form-control">
                    <input type="text" name="lastName" placeholder="Last Name" />
                </div>
                <div class="data-style form-control">
                    <input type="email" name="email" placeholder="E mail" />
                </div>
                <div id="card-element" class="form-control">
                <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>

        <button class="btn btn-success">Submit Payment</button>
        </form>
    </div>
    <!--End Coding Area-->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/charge.js"></script>
</body>
</html>