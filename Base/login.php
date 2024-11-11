<?php
session_start();
include 'ConnectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_input = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password_input = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

    if (empty($email_input) || empty($password_input)) {
        $message = "<div class='error text-white fs-4'>Veuillez remplir tous les champs</div>";
    } else {
        $select = $bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $select->bindValue(':email', $email_input);
        $select->bindValue(':password', $password_input);

        if ($select->execute()) {
            if ($select->rowCount() > 0) {
                // Connexion réussie
               // $_SESSION['email'] = $email_input;

               // $user = $select->fetch();
               // $first_name = $user['first_name'];
               // $last_name = $user['last_name'];
               // $initials = strtoupper(substr($first_name, 0, 1) . substr($last_name, 0, 1)); 
               // $_SESSION['initials'] = $initials;

                $message = "<div class='success text-white fs-4'>Connexion réussie !</div>";
                header('Location: ../index.php'); 
                exit();
            } else {
                $message = "<div class='error text-white fs-4'>Email ou mot de pass incorrect. Veuillez réessayer !</div>";
            }
        } else {
            $message = "<div class='error text-white fs-4'>Une erreur s'est produite lors de la tentative de connexion.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/login-style.css">
</head>
<body>
    <div class="container">
        <div class="heading">Sign In</div>

        <!-- Affichage du message en cas de réussite ou d'échec -->
        <?php if (isset($message)) echo $message; ?>

        <form action="" method="post" class="form">
            <input required="" class="input" type="email" name="email" id="email" placeholder="Email">
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
            <span class="forgot-password"><a href="forgot_password.php">Mot de passe oublié?</a></span>
            <hr style="width: 30%;margin-top:30px;border:1px solid rgba(133, 189, 215, 0.8784313725)">
            <h4>Vous êtes nouveau? <a href="register.php">S'inscrire</a></h4>
            <input class="login-button" type="submit" value="Se connecter">
        </form>

        <div class="social-account-container">
            <span class="title">Or Sign in with</span>
            <div class="social-accounts">
                <button class="social-button google white-icon">
                    <i class="fab fa-google"></i>
                </button>
                <button class="social-button apple white-icon">
                    <i class="fab fa-apple"></i>
                </button>
                <button class="social-button facebook white-icon">
                    <i class="fab fa-facebook"></i>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
