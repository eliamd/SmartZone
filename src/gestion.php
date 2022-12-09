<?php
include 'connectdb.php';
session_start();
if(isset($_SESSION['user'])){
}else header('Location:connexion.php?log_err=noconnect');

session_start();

$user = $_SESSION['user'];

$orderinfo = $bdd->query("SELECT order_id, total_price, users.prenom, users.nom, orders.address, orders.postal, orders.city FROM `orders` INNER JOIN users ON orders.user_id = users.id WHERE user_id LIKE '" . $user . "';");
if (!$orderinfo){
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

<div class="ml-auto mr-auto flex flex-col pt-10 min-h-screen max-w-[1200px]">
  <div class="max">
  <h2 class="text-4xl font-bold">Tableau de bord.</h2>
  </div>    <div class="flex w-fit ml-auto mr-auto gap-40">
    <div>
         <h1 class="text-2xl font-bold text-center">Informations personnelles</h1>
    </div>
    <div class="pt-5">
<div class='w-full p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700'>
    <div class='flex items-center justify-between mb-4'>
        <h5 class='text-xl font-bold leading-none text-gray-900 dark:text-white'>Résumé de vos commandes</h5>
        <a href='#' class='text-sm font-medium text-blue-600 hover:underline dark:text-blue-500'>
        </a>
   </div>
   <div class='flow-root'>
        <ul role='list' class='divide-y divide-gray-200 dark:divide-gray-700'>

        <?php 
          while($row = $orderinfo->fetch()){
            echo "

            <li class='py-3 sm:py-4 hover:bg-slate-50 rounded-sm'>
            <a href='order?cmd=" . $row['order_id'] . "'>
                <div class='flex items-center'>
                    <div class='font-semibold'>
                        
                    </div>
                    <div class='flex-1 min-w-0'>
                        <p class='text-sm font-medium text-gray-900 truncate dark:text-white'>
                        Commande #" . $row['order_id'] . "
                        </p>
                        <p class='text-sm text-gray-500 truncate dark:text-gray-400 max-w-xs'>
                            Livraison : " . $row['address'] . ', ' . $row['city'] . ' ' . $row['postal'] . "
                        </p>
                    </div>
                    <div class='inline-flex ml-auto text-base font-semibold text-gray-900 dark:text-white'>
                    " . $row['total_price'] . "€ 
                    </div>
                </div>
            </a>
            </li>
            ";
          };
            ?>
        </ul>
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