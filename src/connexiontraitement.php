<?php
require_once 'connectdb.php';

session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $bdd->prepare('SELECT id, email, password FROM users WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();


    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $password = hash('sha256', $password);
            if ($data['password'] === $password) {
                $_SESSION['user'] = $data['id'];
                header('Location:accueil.php');
            } else
                header('Location:connexion.php?log_err=password');
        } else
            header('Location:connexion.php?log_err=novalidmail');
    } else
        header('Location:connexion.php?log_err=noaccount');
} else
    header('Location:connexion.php');
?>