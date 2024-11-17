<?php
include_once("connectAll.php");

// Exemple de logique pour vérifier si l'utilisateur est déjà vérifié
$user_verified = false; // Changez cette logique en fonction de la vérification réelle

if ($user_verified) {
    // Affichage du message de redirection si l'utilisateur est vérifié
    echo "
    <div class='flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen'>
        <div class='max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12'>
            <h3 class='text-2xl'>Vos informations sont déjà vérifiées</h3>
            <p>Il semble que vous ayez déjà vérifié votre compte, vous serez redirigé vers la page de connexion dans 5 secondes.</p>
            <div class='sa'>
                <div class='sa-warning'>
                    <div class='sa-warning-body'></div>
                    <div class='sa-warning-dot'></div>
                </div>
            </div>
            <div class='mt-4'>
                <p class='mt-4 text-sm'>Si vous n'êtes pas redirigé automatiquement, veuillez
                    <a href='login.php' class='text-blue-600'>cliquer ici</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function(){
            window.location.href = 'login.php';
        }, 5000);
    </script>
    ";
} else {
    echo "<p>Erreur: Utilisateur non vérifié.</p>"; // Message d'erreur si l'utilisateur n'est pas vérifié
}
?>
