<?php

header("Access-Control-Allow-Origin: *");
//header('Content-Type: application/json');

include 'connectdb.php';
session_start();

if(isset($_SESSION['user'])){

  session_start();

  $user = $_SESSION['user'];
  $userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
  $data = $userinfo->fetch();
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
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
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
        <div class='pb-3'>
          <label class='font-medium inline-block mb-3 text-sm uppercase pt-8'>Livraison</label>
          <select class='block p-2 text-gray-600 w-full text-sm rounded-xl'>
            <option>Expédition standard - Offerte</option>
            <option>Expédition express - Offerte</option>
          </select>
        </div>
         <div class='border-t mt-8'>
          <div class='flex font-semibold justify-between py-6 text-sm uppercase'>
            <span>Prix total</span>
            <span class='totalprice'>0€</span>
          </div>
          <button id='orbtn' class='bg-orange-500 font-semibold hover:bg-orange-600 py-3 text-sm text-white uppercase w-full rounded-md'>Commander</button>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include 'footer.php';
?>
<script type="text/javascript">

if(<?php echo isset($_SESSION['user'])?'true':'false'; ?>){
  var userid = "<?php echo($data['id']); ?>";
  var userpre = "<?php echo($data['prenom']); ?>";
  var usernom = "<?php echo($data['nom']); ?>";
  var usermail = "<?php echo($data['email']); ?>";

}
var sessionset = "<?php echo isset($_SESSION['user'])?'true':'false'; ?>";
console.log(sessionset);


document.getElementById("orbtn").onclick = function () {

let cartItems = localStorage.getItem('productsInCart');
let nbitems = localStorage.getItem('cartNumbers');
let sessionset = localStorage.getItem('sessionset');
//console.log(JSON.parse(cartItems));



if(nbitems != 0){
    if(sessionset){
      //location.href = "pay.php";
       $.post({
        url: "pay.php",
        method: "post",
        data: {items : JSON.parse(cartItems)},
        success: function(res){
          console.log("res");      
          location.href = "pay.php";    
          },
        })
    }else {
        location.href = "connexion.php?log_err=noconnect";
    }
}else {
    document.getElementById("orbtn").className = "bg-orange-400 font-semibold py-3 text-sm text-white uppercase w-full rounded-md cursor-not-allowed";
}

};
</script>
<script type="text/javascript" src="paniertrait.js"></script>

</body>
</html>