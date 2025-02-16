<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Client Orange</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    min-height: 100vh;
    background-color: #f5f5f5;
    margin: 0; /* Remove any default margin */
}
.btn{
  background-color: #FF6600;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

.sidebar {
    width: 25%;
    padding: 20px;
    background-color: white;
    display: none; /* Hide sidebar to focus on the login form */
}

.main-content {
    width: 100%; /* Use full width for the content area */
    padding: 0;
    display: flex;
    justify-content: center; /* Center the login form inside */
}

.login-section {
    background: white;
    padding: 30px;
    max-width: 500px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    width: 100%; /* Ensures it doesn't overflow */
}

input[type="text"], 
input[type="password"],
input[type="email"],
input[type="tel"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #FF6600;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

.separator {
    text-align: center;
    margin: 20px 0;
    color: #666;
}

.social-icons {
    text-align: center;
    margin: 20px 0;
}

.social-icons i {
    font-size: 24px;
    margin: 0 10px;
    color: #666;
}

.create-account {
    margin-top: 20px;
    text-align: center;
}

table {
    width: 100%;
    margin: 15px 0;
    border-collapse: collapse;
}

td {
    padding: 12px;
    border: 1px solid #ddd;
}

.checkbox-group {
    margin: 15px 0;
}

.promo-text {
    margin-top: 30px;
    color: #666;
    line-height: 1.6;
}
    </style>
</head>
<body>
    

    <div class="main-content">
        <!-- Login Form -->
        <div class="login-section" id="signIn">
            <h2>Se connecter</h2>
            <form method="post" action="register.php">
                <input type="email" name="email" placeholder="E-mail/Numéro de téléphone *" id="email">
                <input type="password" name="password" placeholder="Mot de passe *"  id="password">
                <p style="margin: 10px 0;">
                    <a href="#" style="color: #FF6600; text-decoration: none;">Mot de passe oublié?</a>
                </p>
                <input type="submit" class="btn" value="Se Connecter" name="signIn">            </form>

            <div class="separator">Ou se connecter avec :</div>
            <div class="social-icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>

            <div class="create-account">
                <p>Pas de compte client?</p>
                <button id="signUpButton" style="background: #fff; color: #FF6600; border: 1px solid #FF6600; margin-top: 10px;">
                    Créer un compte
                </button>
            </div>
        </div>

        <!-- Registration Form (Hidden by default) -->
        <div class="login-section" id="signup" style="display: none;">
            <h2>S'inscrire à l'espace client orange :</h2>
            

            <form method="post" action="register.php">
              
                <input type="text" placeholder="Prénom *" id="fName" name="fName" required>
                <input type="text" placeholder="Nom *" id="lName" name="lName" required>
                <input type="email" placeholder="Adresse E-mail *" id="email" name="email" required>
                <input type="password" placeholder="Mot de passe *" id="password" name="password" required>
                <input type="tel" placeholder="Numéro de contact *" id="phone" name="phone" required>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" required>
                    <label for="terms" style="color: #666;">
                    J’ai lu et j’accepte les Conditions Générales d’Utilisation ainsi que la Politique de protection des données d'Orange.
                    </label>
                </div>

                <input type="submit" class="btn" value="S'inscrire" name="signUp">
                </form>

            
        </div>
    </div>

    <script src="assets/script.js"></script>
</body>
</html>