<?php

include 'connectdb.php';

session_start();
if(isset($_SESSION['user'])){
}else header('Location:connexion.php?log_err=noconnect');

$orderid = $_GET['cmd'];
if(!isset($orderid)){
    header('Location: gestion.php');
    exit();
}

$orderinfo = $bdd->query("SELECT order_id, order_date, total_price, users.prenom, users.email, users.nom, orders.address, orders.postal, orders.city FROM `orders` INNER JOIN users ON orders.user_id = users.id WHERE orders.order_id LIKE '" . $orderid . "';");
if (!$orderinfo){
    echo "invalid q";
}
$dataorder = $orderinfo->fetch();


$articleinfo = $bdd->query("SELECT order_id, product_id, article.libele, article.marque, article.repimage, article.prixu, article.spce_data, article.color, quantity FROM `order_items` INNER JOIN article ON order_items.product_id = article.id WHERE order_id LIKE '" . $orderid . "';
;");
if (!$articleinfo){
    echo "invalid q";
}

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
<body class="min-h-screen">

<?php
include 'navbar.php';
?>



<div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <div class="flex justify-start item-start space-y-2 flex-col">
                <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Commande #<?php echo $dataorder['order_id']; ?></h1>
                <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600"><?php echo $dataorder['order_date']; ?></p>
            </div> 
            <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                        <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Panier</p>
                        


                        <?php

                            while($row = $articleinfo->fetch()){
                             echo "

                             <div class='mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full'>
                             <div class='pb-4 md:pb-8 w-full md:w-40'>
                                 <img class='w-full hidden md:block' src='" . $row['repimage'] . "' alt='dress' />
                                 <img class='w-full md:hidden' src='" . $row['repimage'] . "' alt='dress' />
                             </div>
                             <div class='border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0'>
                                 <div class='w-full flex flex-col justify-start items-start space-y-8'>
                                     <h3 class='text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800'>" . $row['marque'] . ' ' . $row['libele'] . "</h3>
                                     <div class='flex justify-start items-start flex-col space-y-2'>
                                         <p class='text-sm dark:text-white leading-none text-gray-800'><span class='dark:text-gray-400 text-black'>Couleur: </span> " . $row['color'] . "</p>
                                         <p class='text-sm dark:text-white leading-none text-gray-800'><span class='dark:text-gray-400 text-black'>Capacité: </span> " . $row['spce_data'] . " Go</p>
                                     </div>
                                 </div>
                                 <div class='flex justify-between space-x-8 items-start w-full'>
                                     <p class='text-base dark:text-white xl:text-lg leading-6'>" . $row['prixu'] . " €</p>
                                     <p class='text-base dark:text-white xl:text-lg leading-6 text-gray-800'>Quantité : " . $row['quantity'] . "</p>
                                     <p class='text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800'>" . $row['prixu'] * $row['quantity'] . "€</p>
                                 </div>
                             </div>
                         </div>

                             ";

                            };

                        ?>
                        
                    </div>
                    <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Résumé</h3>
                            <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                <div class="flex justify-between w-full">
                                    <p class="text-base dark:text-white leading-4 text-gray-800">Articles</p>
                                    <p class="text-base dark:text-gray-300 leading-4 text-gray-600"><?php echo $dataorder['total_price'] . '.00€'; ?></p>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-base dark:text-white leading-4 text-gray-800">Livraison</p>
                                    <p class="text-base dark:text-gray-300 leading-4 text-gray-600">Offerte</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center w-full">
                                <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                                <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600"><?php echo $dataorder['total_price'] . '.00€'; ?></p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Livraison</h3>
                            <div class="flex justify-between items-start w-full">
                                <div class="flex justify-center items-center space-x-4">
                                    <div class="w-8 h-8">
                                        <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />
                                    </div>
                                    <div class="flex flex-col justify-start items-center">
                                        <p class="text-lg leading-6 dark:text-white font-semibold text-gray-800">Livreur : DPD<br /><span class="font-normal">Livraison en 24 heures</span></p>
                                    </div>
                                </div>
                                <p class="text-lg font-semibold leading-6 dark:text-white text-gray-800">Offerte</p>
                            </div>
                            <div class="w-full flex justify-center items-center">
                                <button class="hover:bg-black dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">Suivre mon colis</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                    <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Client</h3>
                    <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                        <div class="flex flex-col justify-start items-start flex-shrink-0">
                            <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                                <img src="../content/img/avatar.jpeg" class="mr-2 w-16 h-13 rounded-full" alt="avatar" />
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800"><?php echo ucfirst($dataorder['nom']); echo' '; echo ucfirst($dataorder['prenom']); ?></p>
                                </div>
                            </div>
    
                            <div class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg" alt="email">
                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg" alt="email">
                                <p class="cursor-pointer text-sm leading-5 "><?php echo $dataorder['email']; ?></p>
                            </div>
                        </div>
                        <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                            <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                                <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                                    <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Adresse de livraison</p>
                                    <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"><?php echo $dataorder['address'] . ' ' . $dataorder['postal'] . ' ' . $dataorder['city']; ?></p>
                                </div>

                            </div>
                            <div class="flex w-full justify-center items-center md:justify-start md:items-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


<?php
include 'footer.php';
?>

</body>
</html>