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
<script type="text/javascript" src="paniertrait.js"></script>


<?php
include 'navbar.php';
?>


<section class='bg-white min-h-[850px]'>
    <div class='px-4 mx-auto max-w-screen-xl'>
        <div class='mx-auto max-w-screen-sm pt-[25%] text-center'>
            <h1 class='mb-4 text-7xl tracking-tight font-extrabold text-primary-600 '>Merci !</h1>
            <p class='mb-4 text-lg text-black'>Merci pour votre commande n°<?php echo($_GET['confirm']); ?></p>
            <p class='mb-4 text-lg font-bold text-black'>Vous recevrez rapidement un mail lorsque celle-ci sera envoyée.</p>

            <a href='gestion.php' class='inline-flex text-white bg-orange-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4'>Retourner à votre compte</a>
        </div>   
    </div>
</section>

"


<?php
include 'footer.php';
?>

</body>
</html>