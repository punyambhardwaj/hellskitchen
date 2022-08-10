<?php
$server = "localhost";

$username = "root";

$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con){echo "Success connecting to the db";}

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";}

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    @$name = $_POST['full_name'];
    @$number = $_POST['phone_number'];
   @ $email = $_POST['email'];
    @$address = $_POST['address'];
   
    $sql = "INSERT INTO `restaurant`.`orderfood` (`full_name`, `phone_number`, `email`, `address`) VALUES ('$name', '$number','$email',  '$address');";
    if($con->query($sql) == true){
        echo "Successfully inserted";}
 $con->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order here</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <div class="container">
            
        <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

        <form action="#" class="order">
            <fieldset>
                <legend>Selected Food</legend>

                <div class="food-menu-img">
                    <img src="images/burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h3>Food Title</h3>
                    <p class="food-price">145</p>

                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                    
                </div>


    <div class="submi">
     
      
        <form action="index.php" method="POST">
            <input type="text" name="full_name" id="f_name" placeholder="Enter your name">
            <input type="phone" name="phone_number" id="p_number" placeholder="Enter your phone">
            <input type="email" name="email" id="emal" placeholder="Enter your email">
            <textarea name="address" id="adress" cols="30" rows="10" placeholder="Enter address"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    
    
</body>
</html>