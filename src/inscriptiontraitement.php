<?php

require_once 'connectdb.php';

if(isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['passwordcontrol'])){

    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = htmlspecialchars($_POST['password']);
    $passwordcontrol = htmlspecialchars($_POST['passwordcontrol']);

    $check = $bdd->prepare('SELECT email, password FROM users WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
        if(strlen($nom) <= 20){
            if(strlen($prenom) <= 20){
                if(strlen($email) <= 30){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                         if($password == $passwordcontrol){
                            $password = hash('sha256', $password);

                            $insert = $bdd->prepare('INSERT INTO users(email, nom, prenom, password) VALUES(:email, :nom, :prenom, :password)');
                             $insert ->execute(array(
                                'email' => $email,
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'password' => $password,
                             ));
                            header('Location:inscription.php?log_err=succes_ins');
                        }else header('Location:inscription.php?log_err=passwordretype');
                    }else header('Location:inscription.php?log_err=email');
                }else header('Location:inscription.php?log_err=email');
            }else header('Location:inscription.php?log_err=prenom');
        }else header('Location:inscription.php?log_err=nom');
    }else header('Location:inscription.php?log_err=already');
}else header('Location:inscription.php?log_err=noallinput');

?>