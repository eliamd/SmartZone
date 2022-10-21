<?php
include 'connectdb.php';

$queryss = $_GET["id"];

$sql = ("SELECT * FROM article WHERE id LIKE " . $queryss . ";");
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

<?php
while($row = $result->fetch_assoc()){
  echo "
  


  <section>
    <div class='pt-4 mr-auto ml-auto  max-w-[800px]'>

    <nav class='flex pl-2 pt-2 ' aria-label='Breadcrumb'>
    <ol class='inline-flex items-center space-x-1 md:space-x-3'>
      <li class='inline-flex items-center'>
        <a href='accueil.php' class='inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white'>
          <svg class='w-4 h-4 mr-2' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path d='M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z'></path></svg>
          Accueil
        </a>
      </li>
      <li>
        <div class='flex items-center'>
          <svg class='w-6 h-6 text-gray-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path></svg>
          <a href='smartphones.php' class='ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white'>Smartphones</a>
        </div>
      </li>
      <li aria-current='page'>
        <div class='flex items-center'>
          <svg class='w-6 h-6 text-gray-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path></svg>
          <span class='ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400'>" . $row["marque"] . " " . $row["libele"] . "</span>
        </div>
      </li>
    </ol>
    </nav>

      <div class='bg-gray-5 pt-10 flex'>
          <div class=''>
            <img class='' src=" . $row["repimage"] . " alt='image description'>
          </div>
          <div class='bg-gray-50'>
            <div>
              <h1 class='text-xl pt-2 font-bold'>" . $row["marque"] . "</h1>
            </div>
            <div>
              <h1 class='text'>" . $row["libele"] . "</h1>
           </div>
           <div>
            <p>" . $row["description"] . "</p>
          </div>
          <div>
          <p>Couleur : " . $row["color"] . "</p>
        </div>
        <div>
        <p>Capacité : " . $row["spce_data"] . " Go</p>
      </div>
          <div>
            <h2>" . $row["prixu"] . " €" ."</h2>
          </div>
        </div>
      </div>
    </div>  
  </section>";
}
?>

<?php
include 'footer.php';
?>

</body>
</html>