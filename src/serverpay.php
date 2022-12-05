<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include 'connectdb.php';
session_start();
if(isset($_SESSION['user'])){
}else header('Location:connexion.php?log_err=noconnect');
$user = $_SESSION['user'];
$userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
$data = $userinfo->fetch();

echo("ici");
$items = $_POST['items'];

foreach($items as $item){
  print_r(" ");

  print_r($item['marque']);
  print_r($item['prix']);
  print_r($item['incart']);


};

require '../vendor/autoload.php';

  
\Stripe\Stripe::setApiKey('REMOVED');



header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://localhost/site/amahzonee/src';

$checkout_session = \Stripe\Checkout\Session::create([
'line_items' => [
    'price_data' => [
      'currency' => 'eur',
      'unit_amount' => 21,
      'product_data' => [
          'name' => 'rr',
      ],
    ],
    'quantity' => 'Commande',
  ],
'customer_email' => $data['email'],
'billing_address_collection' => 'required',
'shipping_address_collection' => [
  'allowed_countries' => ['FR', 'BE'],
],
'payment_method_types' => ['card'],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

print_r("la");

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);




?>