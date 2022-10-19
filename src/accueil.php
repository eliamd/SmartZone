<?php
include 'connectdb.php';
$sql = "SELECT * FROM article LIMIT 4;";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Amahzone</title>
    <link href="../content/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>

<?php
include 'navbar.php';
?>

<section class="py-8">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Votre nouveau smartphone neuf<br> a un <mark class="underline underline-offset-3 decoration-8 decoration-orange-400 bg-white">prix unique</mark></h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            <a href="smartphones.php" class="inline-flex bg-orange-500 items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                Nos Smartphones
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>                
    </div>
</section>

<section class="py-8 bg-gray-50">
<div class="ml-auto mr-auto flex flex-col pt-10 max-w-[1200px]">
<h4 class="ml-auto mr-auto text-5xl font-extrabold tracking-tight leading-none text-gray-900">Nos <mark class="px-2 text-white bg-orange-500 rounded">meilleurs</mark> ventes :</h4>
<div class="grid py-12 grid-cols-4 gap-10 max-w-[1200px]">
<?php

while($row = $result->fetch_assoc()){
 echo "<a href='produit.php?id=" . $row["id"] . "'>
 <div class='w-60 h-80 rounded-lg bg-gray-50 drop-shadow-lg flex flex-col justify-center'>
  <div class='mr-auto ml-auto mt-2'>
    <img class='aspect-auto w-48' src=" . $row["repimage"] . " alt=''>
  </div>
  <dir class='flex flex-col pl-5 pr-5'>
    <div>
        <h3>" . $row["marque"] . " " . $row["libele"] . " (" . $row["spce_data"] . " Go) - " . $row["color"] . "</h3>
    </div>
    <div>
      <h3 class='text-2xl font-semibold'>" . $row["prixu"] . " €" ."</h3>
    </div>
  </dir> 
</div>
</a>";

}

?>
</div>
</div>
</section>


<?php
include 'footer.php';
?>

</body>
</html>