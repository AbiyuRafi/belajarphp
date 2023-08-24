<?php
require 'controller.php';
$id = $_GET['id'];
$students = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>lihat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light navbar fixed-top shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Biodata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
        </ul>
      </div>
    </div>
  </nav>
<section style="background-color:#EBC7E6; padding-top:80px;" class="">
  <div class="container mt-5">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <div class="card justify-content-center" style="width: 18rem;">
          <?php foreach ($students as $mur) : ?>
            <img src="img/<?= $mur['foto']?>"  class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <ul> 
                <li>Nama : <?= $mur['nama'] ?></li>
                <li>Nis : <?= $mur['nis'] ?></li>
                <li>Rombel : <?= $mur['rombel'] ?></li>
                <li>Rayon : <?= $mur['rayon'] ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <a href="index.php" class="btn btn-light mt-3">back</a>
        </div>
      </div>
    </div>
  </div>
  <section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    </svg>
  </section>
</body>

</html>