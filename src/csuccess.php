<?php
include 'connectdb.php';

// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
if(isset($_SESSION['user'])){
}else header('Location:connexion.php?log_err=noconnect');
$user = $_SESSION['user'];
$userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
$data = $userinfo->fetch();

if(isset($_GET['session_id'])){
$id = $_GET['session_id'];


//stripe
require '../vendor/autoload.php';
\Stripe\Stripe::setApiKey('REMOVED');
$session = \Stripe\Checkout\Session::retrieve($id);

$status = $session->payment_status;
$totalprice = $session->amount_total / 100;

}else{
    header('Location:panier.php');
}


 
if($status = $session->payment_status == "paid"){
    //enregistrer la commande dans la base de donnée
    $bdd->query("INSERT INTO orders (user_id, order_date, total_price, status) VALUES ('". $user ."', NOW(), $totalprice, '1')");
    $order_id = $bdd->lastInsertId();
    //enregistrer les produits dans la base de donnée
    $items = json_decode($_GET['items']);
    foreach($items as $item){
        $bdd->query("INSERT INTO order_items (order_id, product_id, quantity) VALUES ('". $order_id ."', '". $item->id ."', '". $item->incart ."')");
    }
    //rediriger sur la page de confirmation
    header('Location:confirmation.php?confirm=' . $order_id . '');
}else{
header('Location:connexion.php?log_err=noconnect');

}
?>



