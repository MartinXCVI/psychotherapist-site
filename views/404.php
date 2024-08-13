<!DOCTYPE html>
<html lang="en">
  <?php
    require "./php/variables.php";
  ?>
<head>
  <meta charset="UTF-8">
  <!--- Google fonts {font-family: "Prata", system-ui;} {font-family: "Poppins", sans-serif;} --->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--- CSS Stylesheet --->
  <link rel="stylesheet" href="../css/styles.css">
  <!--- Bootstrap CSS --->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title><?php $errorTitle ?></title>
</head>
<body>
  <main class="w-100 d-flex flex-column justify-content-center align-items-center" id="error-main">
    <h1 class="mb-3 col-11 text-center">Oops! Something went wrong...</h1>
    <h2 class="mb-5 col-11 text-center">Or the resource that you're looking for doesn't exist.</h2>
    <a href="/" class="error-btn btn">Go Back to Site</a>
  </main>
</body>
</html>