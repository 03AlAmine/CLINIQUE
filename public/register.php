<?php
ob_start();
$message = "";
$success = "";
include_once(__DIR__ . "/../config/connectAll.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $phone = htmlspecialchars($_POST['phone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $age = htmlspecialchars($_POST['age']); // Récupération de l'âge
    $password = htmlspecialchars($_POST['password']);
    $confirm = htmlspecialchars($_POST['confirm']);
    $message = "";

    if (empty($username) || empty($email) || empty($sexe) || empty($phone) || empty($adresse) || empty($password) || empty($confirm) || empty($age)) {
        $message = "<div class='error text-white fs-4'>Veuillez remplir tous les champs</div>";
    } else {
        if ($password !== $confirm) {
            $message = "<div class='error text-white fs-4'>Les mots de passe ne correspondent pas.</div>";
        } else {
            if ($conn) {
                // Vérification si l'utilisateur ou l'email existe déjà
                $select = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
                $select->bind_param("ss", $username, $email);
                $select->execute();
                $result = $select->get_result();

                if ($result->num_rows > 0) {
                    $message = "<div class='error text-white fs-4'>Cet utilisateur ou cette adresse e-mail existe déjà.</div>";
                } else {
                    // Hacher le mot de passe
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                    // Insérer le nouvel utilisateur avec l'âge
                    // Correction dans la requête SQL et dans le bind_param
                    $insert = $conn->prepare("INSERT INTO users (username, email, verified, token, password, sexe, age, phone, oldPatient, adresse, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
                    $insert->bind_param("ssisssisss", $username, $email, $verified, $token, $hashed_password, $sexe, $age, $phone, $oldPatient, $adresse);


                    if ($insert->execute()) {
                        $success = "<div class='success text-white fs-4'>Inscription réussie. Redirection en cours...</div>";
                    } else {
                        $message = "<div class='error text-white fs-4'>Une erreur s'est produite lors de l'inscription.</div>";
                    }
                }
            } else {
                $message = "<div class='error text-white fs-4'>Erreur de connexion à la base de données.</div>";
            }
        }
    }
}

ob_end_flush();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/login-style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }

        .container {
            max-width: 350px;
            background: linear-gradient(0deg, #fff 0%, #f4f7fb 100%);
            border-radius: 40px;
            padding: 25px 35px;
            border: 5px solid #fff;
            box-shadow: rgba(133, 189, 215, 0.88) 0px 30px 30px -20px;
            margin: 20px;
        }

        .heading {
            text-align: center;
            font-weight: 900;
            font-size: 30px;
            color: rgb(16, 137, 211);
        }

        .form {
            margin-top: 20px;
        }

        .form .input {
            width: 90%;
            background: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 20px;
            margin-top: 15px;
            box-shadow: #cff0ff 0px 10px 10px -5px;
            border-inline: 2px solid transparent;
        }

        .form .input::placeholder {
            color: rgb(170, 170, 170);
        }

        .form .input:focus {
            outline: none;
            border-inline: 2px solid #12b1d1;
        }

        .form .forgot-password {
            display: block;
            margin-top: 10px;
            margin-left: 10px;
        }

        .form .forgot-password a {
            font-size: 11px;
            color: #0099ff;
            text-decoration: none;
        }

        .form .login-button {
            display: block;
            width: 100%;
            font-weight: bold;
            background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
            color: #fff;
            padding: 15px;
            margin: 20px auto;
            border-radius: 20px;
            box-shadow: rgba(133, 189, 215, 0.88) 0px 20px 10px -15px;
            border: none;
            transition: all 0.2s ease-in-out;
        }

        .form .login-button:hover {
            transform: scale(1.03);
            box-shadow: rgba(133, 189, 215, 0.88) 0px 23px 10px -20px;
        }

        .form .login-button:active {
            transform: scale(0.95);
            box-shadow: rgba(133, 189, 215, 0.88) 0px 15px 10px -10px;
        }

        .social-account-container {
            margin-top: 25px;
        }

        .social-account-container .title {
            display: block;
            text-align: center;
            font-size: 10px;
            color: rgb(170, 170, 170);
        }

        .social-account-container .social-accounts {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 5px;
        }

        .social-account-container .social-button {
            background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
            border: 5px solid #fff;
            padding: 5px;
            border-radius: 50%;
            width: 40px;
            aspect-ratio: 1;
            display: grid;
            place-content: center;
            box-shadow: rgba(133, 189, 215, 0.88) 0px 12px 10px -8px;
            transition: all 0.2s ease-in-out;
        }

        .social-account-container .social-button .svg {
            fill: #fff;
            margin: auto;
        }

        .social-account-container .social-button:hover {
            transform: scale(1.2);
        }

        .social-account-container .social-button:active {
            transform: scale(0.9);
        }

        .agreement {
            text-align: center;
            margin-top: 15px;
        }

        .agreement a {
            text-decoration: none;
            color: #0099ff;
            font-size: 9px;
        }

        h4 {
            text-align: center;
        }

        h4 a {
            color: black;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: border-color 0.3s;
        }

        h4 a:hover {
            color: #0099ff;
            border-color: #0099ff;
        }

        .white-icon {
            color: #fff;
        }

        .input-group {
            position: relative;
        }

        .input-group .input {
            width: calc(100% - 30px);
            /* ajustez la valeur selon vos besoins */
            padding-right: 30px;
            /* espace pour l'icône */
        }

        .input-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="heading">S'inscrire</div>
        <?php echo $message ?>
        <?php echo $success ?>
        <form action="" method="post" class="form">
            <input required class="input" type="text" name="username" placeholder="Nom d'utilisateur">
            <input required class="input" type="int" name="age" placeholder="Old">
            <input required class="input" type="email" name="email" placeholder="Email">
            <select required class="input" name="sexe">
                <option value="">Sélectionnez le sexe</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
            <input required class="input" type="text" name="phone" placeholder="Numéro de téléphone">
            <input required class="input" type="text" name="adresse" placeholder="Adresse">
            <div class="input-group">
                <input required class="input" type="password" name="password" placeholder="Mot de passe">
                <i id="toggle-password" class="fas fa-eye-slash"></i>
            </div>
            <div class="input-group">
                <input required class="input" type="password" name="confirm" placeholder="Confirmez le mot de passe">
                <i id="toggle-confirm-password" class="fas fa-eye-slash"></i>
            </div>
            <h4>Déjà un compte? <a href="login.php">Se connecter !</a></h4>
            <input class="login-button" type="submit" value="S'inscrire">
        </form>
        <script>
            const togglePasswordButton = document.getElementById('toggle-password');
            const passwordInput = document.querySelector('input[name="password"]');
            togglePasswordButton.addEventListener('click', function() {
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
                togglePasswordButton.classList.toggle('fa-eye');
                togglePasswordButton.classList.toggle('fa-eye-slash');
            });

            const toggleConfirmPasswordButton = document.getElementById('toggle-confirm-password');
            const confirmPasswordInput = document.querySelector('input[name="confirm"]');
            toggleConfirmPasswordButton.addEventListener('click', function() {
                const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
                confirmPasswordInput.type = type;
                toggleConfirmPasswordButton.classList.toggle('fa-eye');
                toggleConfirmPasswordButton.classList.toggle('fa-eye-slash');
            });

            <?php if (!empty($success)): ?>
                setTimeout(function() {
                    window.location.href = 'login.php';
                }, 2000); // Délai de 2 secondes
            <?php endif; ?>
        </script>
    </div>
</body>

</html>