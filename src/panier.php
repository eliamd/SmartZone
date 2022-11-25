<?php
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
<body class='bg-gray-100'>


<?php
include 'navbar.php';
?>

<div class=' bg-gray-100'>
  <div class='container mx-auto mt-10'>
    <div class='flex shadow-md bg-gray-50 my-10 rounded-xl'>
      <div class='w-3/4 bg-white px-10 py-10 rounded-xl'>
        <div class='flex justify-between border-b pb-8'>
          <h1 class='font-semibold text-2xl'>Panier</h1>
          <h2 class='affitems font-semibold text-2xl'>0 Articles</h2>
        </div>
        <div class='flex mt-10 mb-5'>
          <h3 class='font-semibold text-gray-600 text-xs uppercase w-2/5'>Détails du produit</h3>
          <h3 class='font-semibold text-center text-gray-600 text-xs uppercase w-1/5'>Quantité</h3>
          <h3 class='font-semibold text-center text-gray-600 text-xs uppercase w-1/5'>Prix</h3>
          <h3 class='font-semibold text-center text-gray-600 text-xs uppercase w-1/5'>Total</h3>
       
        </div>

        <div class='prdcon'>

        </div>


        <a href='#' class='flex font-semibold text-indigo-600 text-sm mt-10'>
      
          <svg class='fill-current mr-2 text-indigo-600 w-4' viewBox='0 0 448 512'><path d='M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z'/></svg>
          Continuer les achats
        </a>
<div></div>
      </div>

      <div id='summary' class='w-1/4 px-8 py-10'>
        <h1 class='font-semibold text-2xl border-b pb-8'>Résumé de la commande</h1>
        <div>
          <label class='font-medium inline-block mb-3 text-sm uppercase pt-8'>Livraison</label>
          <select class='block p-2 text-gray-600 w-full text-sm rounded-xl'>
            <option>Expédition standard - 10,00€</option>
            <option>Expédition express - 20,00€</option>
          </select>
        </div>
        <div class='pt-10 pb-3'>
          <label for='promo' class='font-semibold inline-block mb-3 text-sm uppercase'>Code Promo</label>
          <input type='text' id='promo' placeholder='Entrez votre code' class='p-2 text-sm w-full rounded-xl'>
        </div>
        <button class='bg-orange-500 hover:bg-orange-600 px-5 py-2 text-sm text-white uppercase rounded-md'>Appliquer</button>
        <div class='border-t mt-8'>
          <div class='flex font-semibold justify-between py-6 text-sm uppercase'>
            <span>Prix total</span>
            <span class='totalprice'>$600</span>
          </div>
          <button class='bg-orange-500 font-semibold hover:bg-orange-600 py-3 text-sm text-white uppercase w-full rounded-md'>Commander</button>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

<script type="text/javascript" src="panier.js"></script>
</body>
</html>