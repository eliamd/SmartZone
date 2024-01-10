<?php

include 'connectdb.php';
session_start();
if (isset($_SESSION['user'])) {
} else
  header('Location:connexion.php?log_err=noconnect');
$user = $_SESSION['user'];
$userinfo = $bdd->query("SELECT * FROM users WHERE id like '" . $user . "'");
$data = $userinfo->fetch();

$items = $_POST['items'];

require '../vendor/autoload.php';
\Stripe\Stripe::setApiKey('REMOVED');


$YOUR_DOMAIN = 'http://localhost/smartzone/src';

$line_items = [];
foreach ($items as $item) {
  $line_items[] = [
    'price_data' => [
      'currency' => 'eur',
      'product_data' => [
        'name' => $item['marque'] . ' ' . $item['nom'],
      ],
      'unit_amount' => $item['prix'] * 100,
    ],
    'quantity' => $item['incart'],
  ];
}
$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => $line_items,
  'shipping_address_collection' => ['allowed_countries' => ['FR', 'BE']],
  'payment_method_types' => [
    'card',
  ],
  'phone_number_collection' => [
    'enabled' => true,
  ],
  'customer_email' => $data['email'],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/csuccess.php?session_id={CHECKOUT_SESSION_ID}&items=' . json_encode($items) . '',
  'cancel_url' => $YOUR_DOMAIN . '/panier.php',
]);


echo ($checkout_session->url);
exit();
?>
