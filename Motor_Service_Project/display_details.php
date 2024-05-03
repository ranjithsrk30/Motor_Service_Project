<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ece2e2aa;
            padding: 20px;
        }

        h2 {
            color: #007bff;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ece2e2aa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <style>
body {
background-image: url('sunset.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4"style="background-color: bisque;">Form Details</h2>
        <?php
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
        $vehicleModel = $_SESSION['vehicleModel'];
        $motorType = $_SESSION['motorType'];
        $manufacturedYear = $_SESSION['manufacturedYear'];
        $pincode = $_SESSION['pincode'];
        $city = $_SESSION['city'];
        $state = $_SESSION['state'];
        $address = $_SESSION['address'];
        $issue = $_SESSION['issue'];
        ?>
        <p style=background-color:red><strong style=background-color:aqua>Name:</strong> <?php echo $name; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Email:</strong> <?php echo $email; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Phone:</strong> <?php echo $phone; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Vehicle Model:</strong> <?php echo $vehicleModel; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Motor Type:</strong> <?php echo $motorType; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Manufactured Year:</strong> <?php echo $manufacturedYear; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Pincode:</strong> <?php echo $pincode; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>City:</strong> <?php echo $city; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>State:</strong> <?php echo $state; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Address:</strong> <?php echo $address; ?></p>
        <p style=background-color:red><strong style=background-color:aqua>Issue:</strong> <?php echo $issue; ?></p>
    </div>
</body>
</html>
