<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Client Orange</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style2.css">
</head>
<body>
    

    <div class="main-content">
        <img src="img/oran.png" alt="Mon Logo" class="logo">
        <!-- Login Form -->
        <div class="login-section" id="signIn">
            <h2>Login</h2>
            <form method="post" action="register.php">
                <input type="email" name="email" placeholder="Email/Phone number *" id="email">
                <input type="password" name="password" placeholder="Password *"  id="password">
                <p style="margin: 10px 0;">
                    <a href="#" style="color: #FF6600; text-decoration: none;">Forgot your password?</a>
                </p>
                <input type="submit" class="btn" value="Login" name="signIn">            </form>

            <div class="separator">Or connect with:</div>
            <div class="social-icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>

            <div class="create-account">
                <p>No customer account?</p>
                <button id="signUpButton" style="background: #fff; color: #FF6600; border: 1px solid #FF6600; margin-top: 10px;">
                Create an account
                </button>
            </div>
        </div>

        <!-- Registration Form (Hidden by default) -->
        <div class="login-section" id="signup" style="display: none;">
            <h2>Register</h2>
            

            <form method="post" action="register.php">
              
                <input type="text" placeholder="First Name *" id="fName" name="fName" required>
                <input type="text" placeholder="Last Name *" id="lName" name="lName" required>
                <input type="email" placeholder="E-mail address *" id="email" name="email" required>
                <input type="password" placeholder="Password*" id="password" name="password" required>
                <input type="tel" placeholder="Contact number *" id="phone" name="phone" required>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" required>
                    <label for="terms" style="color: #666;">
                    I have read and accept the General Conditions of Use and the Orange Data Protection Policy.                    </label>
                </div>

                <input type="submit" class="btn" value="Register" name="signUp">
                </form>

            
        </div>
    </div>

    <script src="assets/script.js"></script>
</body>
</html>