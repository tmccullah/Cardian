<?php
    $servername = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'Cardian_SignUp';

    $conn = new mysqli($servername, $user, $pw, $db) or die("Connection Failed");

    $f_name = $_GET["f_name"];
    $l_name = $_GET["l_name"];
    $phone_num = $_GET["phone_num"];
    $product_code = $_GET["product_code"];
    $email = $_GET["email"];
    $password = $_GET["password"];


    $result = mysqli_query($conn, "SELECT * FROM SignUp WHERE product_code='$product_code'");
    $row = $result->fetch_assoc();
    
    if(count($row) == 0)
    {
        $sql = "INSERT INTO SignUp (f_name, l_name, phone_num, product_code, email, password) VALUES ('$f_name', '$l_name', '$phone_num', '$product_code', '$email', '$password')";

        $conn -> query($sql);

        echo "<link rel='stylesheet' href='Cardian-StyleSheet-CheckOut.css'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
            <style>
                body, nav, footer, header, button
                {
                    font-family: 'Montserrat', sans-serif
                }
            </style>";
        echo "<h1>Registration complete!</h1>";
        echo $f_name."<br>".$l_name."<br>".$phone_num."<br>";
        echo $product_code."<br>".$email."<br>".$password;
    }

    else
    {
        echo "<link rel='stylesheet' href='Cardian-StyleSheet-CheckOut.css'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
            <style>
                body, nav, footer, header, button
                {
                    font-family: 'Montserrat', sans-serif
                }
            </style>";
        echo "<br><h2>Cannot sign up.<br>Product code already registered to a device.</h2>";
    }

    $conn -> close();
?>