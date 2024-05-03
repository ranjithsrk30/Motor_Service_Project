<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $vehicleModel = $_POST['vehicleModel'];
    $motorType = $_POST['motorType'];
    $manufacturedYear = $_POST['manufacturedYear'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $issue = $_POST['issue'];
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['vehicleModel'] = $vehicleModel;
    $_SESSION['motorType'] = $motorType;
    $_SESSION['manufacturedYear'] = $manufacturedYear;
    $_SESSION['pincode'] = $pincode;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;
    $_SESSION['address'] = $address;
    $_SESSION['issue'] = $issue;
    header("Location: display_details.php");
    exit();
}
?>

