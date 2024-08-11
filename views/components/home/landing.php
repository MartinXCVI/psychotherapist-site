<?php
  include './php/variables.php';
?>

<div class="container-fluid justify-content-center row px-sm-2 py-4 p-xl-4 py-xl-5">
    <div class="col-sm-10 col-lg-7 col-xl-6">
      <figure class="figure">
        <img src="../../../assets/images/profile.jpg" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="figure-caption text-center fs-5">Certified <?= $myProf ?><br> Life Coach</figcaption>
      </figure>
    </div>
    <div class="intro-article col-sm-10 col-lg-7 col-xl-6">
      <p class="my-0">Be more than welcome</p>
      <h2 class="my-5 mt-2">My name is <?= $myName ?>, and I am a Certified <?= $fullProf ?>.</h2>
      <p><?= $lorem["lorem15"] ?></p>
      <p><?= $lorem["lorem25"] ?></p>
      <p><?= $lorem["lorem10"] ?></p>
      <p><?= $lorem["lorem20"] ?></p>
      <p><?= $lorem["lorem15"] ?></p>
      <p><?= $lorem["lorem30"] ?></p>
      <p><?= $lorem["lorem20"] ?></p>
      <div class="landing-btns d-flex flex-column flex-sm-row justify-content-evenly pt-4">
        <a class="landing-btn btn contact-btn mb-3 mb-sm-0" href="/contact">Consultation</a>
        <a class="landing-btn btn about-btn" href="/about">More about me</a>
      </div>
    </div>
</div>