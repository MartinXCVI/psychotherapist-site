<?php
  include './php/variables.php';
?>

<div class="container-fluid justify-content-center row pt-5 px-sm-2 mb-1 px-4 px-xl-4 px-xl-5">
  <div class="col-sm-10 col-md-7 col-lg-6 col-xl-6">
    <figure class="figure">
      <img src="../../../assets/images/profile-2.jpg" class="figure-img img-fluid rounded" alt="...">
      <figcaption class="figure-caption text-center fs-5">Certified <?= $myProf ?><br> Life Coach</figcaption>
    </figure>
  </div>
  <div class="intro-article col-sm-10 col-md-9 col-lg-8 col-xl-6">
    <h2 class="my-5 mt-2">My name is <?= $myName ?>, and I am a Certified <?= $fullProf ?>.</h2>
    <p><?= $lorem["lorem15"] ?></p>
    <p><?= $lorem["lorem20"] ?></p>
    <p><?= $lorem["lorem25"] ?></p>
    <p><?= $lorem["lorem15"] ?></p>
    <p><?= $lorem["lorem10"] ?></p>
    <p><?= $lorem["lorem20"] ?></p>
    <p><?= $lorem["lorem15"] ?></p>
    <p><?= $lorem["lorem30"] ?></p>
    <p><?= $lorem["lorem20"] ?></p>
  </div>
</div>
<hr id="about-intro-line" class="mb-4 mb-xl-5">