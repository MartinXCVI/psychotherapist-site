<?php
  include './php/variables.php';
?>

<div class="container-fluid justify-content-center align-items-center row px-sm-2 py-4 p-xl-4" id="third-rev">
  <div class="intro-article col-sm-10 col-md-8 col-lg-9 col-xl-8">
    <p><?= $lorem["lorem20"] ?></p>
    <p><?= $lorem["lorem25"] ?></p>
    <p><?= $lorem["lorem25"] ?></p>
    <p><?= $lorem["lorem10"] ?></p>
    <p><?= $lorem["lorem20"] ?></p>
    <p><?= $lorem["lorem20"] ?></p>
    <p><?= $lorem["lorem30"] ?></p>
  </div>
  <div class="col-sm-10 col-md-8 col-lg-6 col-xl-3">
    <figure class="figure">
      <img src="../../../assets/images/rev-img-3.jpg" class="figure-img img-fluid rounded" alt="...">
      <figcaption class="text-center">
        <span class="rev-name">
          <?php echo $thirdReview -> revName ?>
        </span> <br>
        <span class="rev-job">
          <?php echo $thirdReview -> revJob ?>
        </span>
      </figcaption>
    </figure>
  </div>
</div>