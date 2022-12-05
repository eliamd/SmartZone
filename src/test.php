<?php



include 'connectdb.php';
session_start();
if(isset($_SESSION['user'])){
}else header('Location:connexion.php?log_err=noconnect');
$user = $_SESSION['user'];
$userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
$data = $userinfo->fetch();

echo("ici");
print_r($_POST);

//header('Access-Control-Allow-Origin: *');

require '../vendor/autoload.php';

  
\Stripe\Stripe::setApiKey('REMOVED');


//header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://localhost/site/amahzonee/src';

$checkout_session = \Stripe\Checkout\Session::create([
  'customer_email' => $data['email'],
  'billing_address_collection' => 'required',
  'shipping_address_collection' => [
    'allowed_countries' => ['FR', 'BE'],
  ],
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'eur',
      'unit_amount' => 2100,
      'product_data' => [
        'name' => 'T-shirt',
      ],
    ],
    'quantity' => 5,
  ],
  [
    'price_data' => [
      'currency' => 'eur',
      'unit_amount' => 2100,
      'product_data' => [
        'name' => 'T-shssirt',
      ],
    ],
    'quantity' => 5,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

// header("HTTP/1.1 303 See Other");
//header("Location: " . $checkout_session->url);




?>