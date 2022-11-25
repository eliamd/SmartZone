<?php
include 'connectdb.php';
session_start();
if(isset($_SESSION['user'])){
}else header('Location:connexion.php?log_err=noconnect');

session_start();

$user = $_SESSION['user'];

$userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
$data = $userinfo->fetch();


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
echo "
<section>
    <div class='w-fit mr-auto ml-auto'>
        <div>
            <h1 class='font-bold text-xl'>Bonjour " . ucfirst($data['prenom']) . "</h1>
            <h1 class='font-bold text-xl'>Bonjour " . ucfirst($data['nom']) . "</h1>
            <h1 class='font-bold text-xl'>Bonjour " . ucfirst($data['email']) . "</h1>
            <h1 class='font-bold text-xl'>Bonjour " . ucfirst($data['id']) . "</h1>
            <h1 class='font-bold text-xl'>Bonjour " . ucfirst($data['date_register']) . "</h1>
        </div>
    </div>
</section>
";
?>

<?php
include 'footer.php';
?>

</body>
</html>