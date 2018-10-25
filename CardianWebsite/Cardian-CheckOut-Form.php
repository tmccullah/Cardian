<?php
    $servername = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'Cardian_SignUp';

    $conn = new mysqli($servername, $user, $pw, $db) or die("Connection Failed");

    /* billing info */
    $name = $_GET["name"];
    $email = $_GET["email"];
    $address = $_GET["address"];
    $city = $_GET["city"];
    $state = $_GET["state"];
    $zip = $_GET["zip"];
    
    // FIX THIS
    $shippingIsSame = 0;
    if (isset($_GET["shippingIsSame"]))
    {
        if ($_GET["shippingIsSame"] == "on")
            $shippingIsSame = 1;
        else
            $shippingIsSame = 0;
    }
    else
    {
        $shippingIsSame = 0;
    }
    
    /* credit card info */
    $nameOnCard = $_GET["nameOnCard"];
    $ccNum = $_GET["ccNum"];
    $expMonth = $_GET["expMonth"];
    $expYr = $_GET["expYr"];
    $cvv = $_GET["cvv"];
    
    $sql1 = "INSERT INTO BillingAddress (name, email, address, city, state, zip, shippingIsSame) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$shippingIsSame')";
    
    $sql2 = "INSERT INTO CreditCardInfo (nameOnCard, ccNum, expMonth, expYr, cvv) VALUES ('$nameOnCard', '$ccNum', '$expMonth', '$expYr', '$cvv')";

    $conn -> query($sql1);
    $conn -> query($sql2);


    echo "<link rel='stylesheet' href='Cardian-StyleSheet-CheckOut.css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
            <style>
                body, nav, footer, header, button
                {
                    font-family: 'Montserrat', sans-serif
                }
            </style>";
    echo "<h1>Order submitted!</h1>";
    echo "<h3>SQL1 :</h3>";
    echo $name."<br>".$email."<br>".$address."<br>".$city."<br>";
    echo $state."<br>".$zip."<br>".$shippingIsSame;
    echo "<h3>SQL 2:</h3>";
    echo $nameOnCard."<br>".$ccNum."<br>".$expMonth."<br>".$expYr."<br>".$cvv;

    $conn -> close();
?>