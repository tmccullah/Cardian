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
    
    <center>
    <h1>Sign Up Your Device</h1>
    <h4>Please fill the form out below to create an account with Cardian.</h4>
    </center>
    
    <div class="row">
    <div class="col">
    <div class="container">
        <form method=get action="Cardian-SignUp-Form-Completion.php">
        <div class="row">        
        <div class="col">
                    
            <label for="f_name"><br><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="f_name" required>

            <label for="l_name"><br><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="l_name" required>

            <label for="phone_num"><br><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone_num" required pattern="^\S{10,}$">

            <label for="product_code"><br><b>Product Code</b></label>
            <input type="text" placeholder="Enter Product Code" name="product_code" required pattern="^\S{9,}$">

            <label for="email"><br><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="pw"><br><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required                pattern="^\S{6,}$" 
                   onchange="this.setCustomValidity(this.validity.patternMismatch ? 
                             'Must have at least 6 characters' : ''); 
                             if(this.checkValidity()) 
                             form.password_two.pattern = this.value;">
            
            <label for="pw_repeat"><br><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pw_repeat" required 
                   pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 
                        'Passwords do not match! Try Again.' : '');">
            
            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me
            </label>

            <center>
            <input type="submit" value="Register New Device" class="btn">
            </center>

            <p>By creating an account you agree to our 
            <a href="#" style="color:goldenrod">Terms & Privacy</a>.</p>

        </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    
</body>
</html>