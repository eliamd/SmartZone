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

    <?php
if (isset($_GET['log_err'])) {
    $err = $_GET['log_err'];

    switch ($err) {

        case 'succes_ins':
?>
    <section class=' bg-gray-100 ml-auto mr-auto '>
        <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
            <div class='w-full bg-white rounded-lg shadow'>
                <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                    <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                        Créer un nouveau compte
                    </h1>
                    <div class='p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800'
                        role='alert'>
                        <span class='font-medium'>Compte créer avec succes ! </span> Vous pouvez désormais vous <a
                            class='underline' href='connexion.php'>connecter.</a>
                    </div>
                    <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                        <div>
                            <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                            <input type='email' name='email' id='email'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='nom.prenom@gmail.com' required=''>

                        </div>
                        <div>
                            <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                            <input type='text' name='nom' id='nom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Dupont' required=''>


                        </div>
                        <div>
                            <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                            <input type='text' name='prenom' id='prenom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Pierre' required=''>

                        </div>
                        <div>
                            <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de
                                passe</label>
                            <input type='password' name='password' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <div>
                            <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez
                                le mot de passe</label>
                            <input type='password' name='passwordcontrol' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <button type='submit'
                            class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                        <p class='text-sm font-light text-gray-500'>
                            Vous avez déja un compte ? <a href='connexion.php'
                                class='font-medium text-primary-600 hover:underline'>Connexion</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
            break;

        case 'prenom':
                ?>
    <section class=' bg-gray-100 ml-auto mr-auto '>
        <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
            <div class='w-full bg-white rounded-lg shadow'>
                <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                    <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                        Créer un nouveau compte
                    </h1>
                    <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                        <div>
                            <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                            <input type='email' name='email' id='email'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='nom.prenom@gmail.com' required=''>

                        </div>
                        <div>
                            <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                            <input type='text' name='nom' id='nom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Dupont' required=''>


                        </div>
                        <div>
                            <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                            <input type='text' name='prenom' id='prenom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Pierre' required=''>
                            <div class='p-3 mt-4 text-sm text-red-700 bg-red-300 rounded-lg' role='alert'>
                                <span class='font-medium'>Prénom invalide. </span>Le nom doit faire entre 3 et 20
                                caractères.
                            </div>

                        </div>
                        <div>
                            <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de
                                passe</label>
                            <input type='password' name='password' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <div>
                            <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez
                                le mot de passe</label>
                            <input type='password' name='passwordcontrol' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <button type='submit'
                            class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                        <p class='text-sm font-light text-gray-500'>
                            Vous avez déja un compte ? <a href='connexion.php'
                                class='font-medium text-primary-600 hover:underline'>Connexion</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
            break;

        case 'passwordretype':
                ?>
    <section class=' bg-gray-100 ml-auto mr-auto '>
        <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
            <div class='w-full bg-white rounded-lg shadow'>
                <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                    <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                        Créer un nouveau compte
                    </h1>
                    <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                        <div>
                            <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                            <input type='email' name='email' id='email'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='nom.prenom@gmail.com' required=''>

                        </div>
                        <div>
                            <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                            <input type='text' name='nom' id='nom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Dupont' required=''>


                        </div>
                        <div>
                            <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                            <input type='text' name='prenom' id='prenom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Pierre' required=''>
                        </div>
                        <div>
                            <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de
                                passe</label>
                            <input type='password' name='password' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <div>
                            <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez
                                le mot de passe</label>
                            <input type='password' name='passwordcontrol' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>

                            <div class='p-3 mt-4 text-sm text-red-700 bg-red-300 rounded-lg' role='alert'>
                                <span class='font-medium'>Les mots de passe ne correspondent pas. </span>Veuillez
                                réessayer.
                            </div>

                        </div>
                        <button type='submit'
                            class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                        <p class='text-sm font-light text-gray-500'>
                            Vous avez déja un compte ? <a href='connexion.php'
                                class='font-medium text-primary-600 hover:underline'>Connexion</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
            break;

        case 'email':
                ?>
    <section class=' bg-gray-100 ml-auto mr-auto '>
        <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
            <div class='w-full bg-white rounded-lg shadow'>
                <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                    <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                        Créer un nouveau compte
                    </h1>
                    <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                        <div>
                            <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                            <input type='email' name='email' id='email'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='nom.prenom@gmail.com' required=''>
                            <div class='p-3 mt-4 text-sm text-red-700 bg-red-300 rounded-lg' role='alert'>
                                <span class='font-medium'>E-Mail invalide. </span>L'e-mail doit etre au format
                                xxx@xxxx.xx et faire entre 5 et 30 caractères.
                            </div>
                        </div>
                        <div>
                            <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                            <input type='text' name='nom' id='nom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Dupont' required=''>


                        </div>
                        <div>
                            <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                            <input type='text' name='prenom' id='prenom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Pierre' required=''>
                        </div>
                        <div>
                            <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de
                                passe</label>
                            <input type='password' name='password' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <div>
                            <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez
                                le mot de passe</label>
                            <input type='password' name='passwordcontrol' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <button type='submit'
                            class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                        <p class='text-sm font-light text-gray-500'>
                            Vous avez déja un compte ? <a href='connexion.php'
                                class='font-medium text-primary-600 hover:underline'>Connexion</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
            break;

        case 'nom':
                ?>
    <section class=' bg-gray-100 ml-auto mr-auto '>
        <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
            <div class='w-full bg-white rounded-lg shadow'>
                <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                    <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                        Créer un nouveau compte
                    </h1>
                    <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                        <div>
                            <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                            <input type='email' name='email' id='email'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='nom.prenom@gmail.com' required=''>
                        </div>
                        <div>
                            <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                            <input type='text' name='nom' id='nom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Dupont' required=''>
                            <div class='p-3 mt-4 text-sm text-red-700 bg-red-300 rounded-lg' role='alert'>
                                <span class='font-medium'>Nom invalide. </span>Le nom doit faire entre 3 et 20
                                caractères.
                            </div>

                        </div>
                        <div>
                            <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                            <input type='text' name='prenom' id='prenom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Pierre' required=''>
                        </div>
                        <div>
                            <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de
                                passe</label>
                            <input type='password' name='password' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <div>
                            <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez
                                le mot de passe</label>
                            <input type='password' name='passwordcontrol' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <button type='submit'
                            class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                        <p class='text-sm font-light text-gray-500'>
                            Vous avez déja un compte ? <a href='connexion.php'
                                class='font-medium text-primary-600 hover:underline'>Connexion</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
            break;
        case 'already':
            ?>
    <section class=' bg-gray-100 ml-auto mr-auto '>
        <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
            <div class='w-full bg-white rounded-lg shadow'>
                <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                    <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                        Créer un nouveau compte
                    </h1>
                    <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                        <div>
                            <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                            <input type='email' name='email' id='email'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='nom.prenom@gmail.com' required=''>
                            <div class='p-3 mt-4 text-sm text-red-700 bg-red-300 rounded-lg' role='alert'>
                                <span class='font-medium'>Adresse E-Mail déja utilisé. </span><a href="connexion.php"
                                    class='underline'>Se connecter</a>
                            </div>
                        </div>
                        <div>
                            <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                            <input type='text' name='nom' id='nom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Dupont' required=''>
                        </div>
                        <div>
                            <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                            <input type='text' name='prenom' id='prenom'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                placeholder='Pierre' required=''>
                        </div>
                        <div>
                            <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de
                                passe</label>
                            <input type='password' name='password' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <div>
                            <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez
                                le mot de passe</label>
                            <input type='password' name='passwordcontrol' id='password' placeholder='••••••••'
                                class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5'
                                required=''>
                        </div>
                        <button type='submit'
                            class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                        <p class='text-sm font-light text-gray-500'>
                            Vous avez déja un compte ? <a href='connexion.php'
                                class='font-medium text-primary-600 hover:underline'>Connexion</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
            break;
    }
} else
    echo "

<section class=' bg-gray-100 ml-auto mr-auto '>
    <div class='max-w-md flex flex-col items-center justify-center px-6 py-14 mx-auto'>
        <div class='w-full bg-white rounded-lg shadow'>
            <div class='p-6 space-y-4 md:space-y-6 sm:p-8'>
                <h1 class='text-xl font-bold leading-tight tracking-tight text-gray-900'>
                    Créer un nouveau compte
                </h1>
                <form class='space-y-4 md:space-y-6' action='inscriptiontraitement.php' method='post'>
                    <div>
                        <label for='email' class='block mb-2 text-sm font-medium text-gray-900'>E-Mail</label>
                        <input type='email' name='email' id='email' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' placeholder='nom.prenom@gmail.com' required=''>
                    </div>
                    <div>
                        <label for='nom' class='block mb-2 text-sm font-medium text-gray-900'>Nom</label>
                        <input type='text' name='nom' id='nom' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' placeholder='Dupont' required=''>
                    </div>
                    <div>
                        <label for='prenom' class='block mb-2 text-sm font-medium text-gray-900'>Prénom</label>
                        <input type='text' name='prenom' id='prenom' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' placeholder='Pierre' required=''>
                    </div>
                    <div>
                        <label for='password' class='block mb-2 text-sm font-medium text-gray-900'>Mot de passe</label>
                        <input type='password' name='password' id='password' placeholder='••••••••' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' required=''>
                    </div>
                    <div>
                        <label for='passwordcontrol' class='block mb-2 text-sm font-medium text-gray-900'>Re-tapez le mot de passe</label>
                        <input type='password' name='passwordcontrol' id='password' placeholder='••••••••' class='bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5' required=''>
                    </div>
                    <button type='submit' class='w-full text-white bg-orange-500 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'>Connexion</button>
                    <p class='text-sm font-light text-gray-500'>
                        Vous avez déja un compte ? <a href='connexion.php' class='font-medium text-primary-600 hover:underline'>Connexion</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>";


            ?>





    <?php
include 'footer.php';
?>

</body>