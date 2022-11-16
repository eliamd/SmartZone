<?php
include 'connectdb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>SmartZone</title>
    <link href="../content/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>


<?php
include 'navbar.php';
?>

<section class=' bg-gray-100 ml-auto mr-auto '>
    <div class='max-w-md flex flex-col items-center justify-center px-6 py-44 mx-auto'>
        <div class='w-full bg-white rounded-lg shadow'>
            <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                    Connectez vous à votre compte
                </h1>
                <form class='space-y-4 md:space-y-6' action='connexiontraitement.php' method="post">
                    <div>
                        <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                        <input type='email' name='email' id='email' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' placeholder='nom.prenom@gmail.com' required=''>
                    </div>
                    <div>
                        <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de passe</label>
                        <input type='password' name='password' id='password' placeholder='••••••••' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' required=''>
                    </div>
                    <button type='submit' class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                    <p class='text-sm font-light text-gray-500'>
                        Vous n'avez pas de compte ? <a href='inscription.php' class='font-medium text-primary-600 hover:underline'>S'inscrire</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>


<?php
include 'footer.php';
?>

</body>