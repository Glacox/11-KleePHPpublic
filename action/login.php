<?php
require_once "../config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_POST["email"])) {
    $_SESSION["error"] = "Adresse mail invalide !";
    header('Location:../pages/newNewLogin.php');
} elseif (empty($_POST["password"])) {
    $_SESSION["error"] = "Mot de passe invalide !";
    header('Location:../pages/newNewLogin.php');
} else {
    $sql = "SELECT * FROM users WHERE email=:email AND password=:password";
    $dataBinded = array(
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user = $pre->fetch(PDO::FETCH_ASSOC);

    if (empty($user)) { //vérifie si le resultat est vide !
        $_SESSION['error'] = "Email ou mot de passe incorrect !";
        header('Location:../pages/newNewLogin.php');
    } else {
        $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
        header('Location:../pages/search.php'); //on le redirige sur la page d'accueil du site !
    }
};