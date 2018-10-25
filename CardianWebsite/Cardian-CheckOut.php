<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Cardian-StyleSheet-CheckOut.css">
<!-- Import font available for re-use via Google Apis Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<head>
    <style>
        body, nav, footer, header, button
        {
            font-family: 'Montserrat', sans-serif
        }
    </style>
</head>
    
<body>

    <div class="row">
    <div class="col">
    <div class="container">        
    
        <div class="row">    
        <div class="col">
            
            <?php 
                $shipping = 5.99;
                $product = 199.99;
                $tax = $product * 0.08;
                $tax = number_format((float)$tax, 2, '.', '');
                $total = $tax + $shipping + $product;
                $total = number_format((float)$total, 2, '.', '')
            ?>
            
            <h2><center>Cart</center> 
                <span class="price" style="color:black"> </span></h2>
            
            <p> Cardian 1.0 <span class="price"> 
                <?php echo "$".$product;?> </span> </p>
            <p> Shipping <span class="price"> 
                <?php echo "$".$shipping;?> </span> </p>
            <p> Taxes (at 8%) <span class="price"> 
                <?php echo "$".$tax;?> </span> </p>
            
            <hr>
            
            <p> Total <span class="price" style="color:black">
                <b> <?php echo "$".$total;?> </b> </span> </p>
        </div>
        </div>
        
    </div>
        
        <br><br>
        
    <div class="container">
        
        <form method=GET action="Cardian-CheckOut-Form.php">    
        <div class="row">
            
            <div class="col">
            <h3><center>Payment</center></h3>
              
                <label>Accepted Cards</label>
                <div class="icon-container">
                    <img src="images/VisaLogo.svg" width=50 height=30>
                    <img src="images/MasterCardLogo.png" width=50 height=30>
                    <img src="images/DiscoverLogo.jpg" width=50 height=30>
                    <img src="images/AmexLogo.svg" width=50 height=30>
                </div>
                    
                <label>Name on Card</label>
                <input type="text" id="cardname" name="nameOnCard" placeholder="Jane Doe" required>
            
                <label>Credit Card Number</label>
                <input type="number" id="cardnumber" name="ccNum" placeholder="0000-0000-0000-0000" min="1000000000000000" max="9999999999999999" required>
                    
                <label>Exp Month</label>
                <select size=1 name='expMonth' single>
                    <?php
                        for ($i = 1; $i <= 12; $i++)
                            echo "<option>".$i."</option>";
                    ?>
                </select>
                <!--<input type="number" id="expmonth" name="expMonth" placeholder="09" min="1" max="12" required>-->
                    
                <label>Exp Year</label>
                <input type="number" id="expYr" name="expYr" placeholder="2025" min="2019" max="2040" required>

                <label>CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="123" min="100" max="999" required>
                
            </div>
                
            <div class="col">
                
                <br><hr><br>
                <h3><center>Billing Address</center></h3>
                    
                <label> Full Name</label>
                <input type="text" id="fullname" name="name" placeholder="Jane Doe" required>
                    
                <label> Email</label>
                <input type="email" id="email" name="email" placeholder="jane@example.com" required>
                    
                <label> Address</label>
                <input type="text" id="adr" name="address" placeholder="123 Owl Pkwy" required>
                    
                <label> City</label>
                <input type="text" id="city" name="city" placeholder="Marietta" required>
                    
                <label>State</label>
                <input type="text" id="state" name="state" placeholder="GA" required>
        
                <label>Zip</label>
                <input type="number" id="zip" name="zip" placeholder="30060" min="00000" max="99999" required>
        
            </div>
    
        </div>
            
        <div class="ship">
        <input type="checkbox" checked="checked" name="shippingIsSame"> 
            Shipping address same as billing
        </div>
        
        <br>
        <input type="submit" value="Continue to Checkout" class="btn">
        
    </form>
    </div>
    </div>
    </div>
</body>
</html>