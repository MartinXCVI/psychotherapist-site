<?php 
  include './php/variables.php';
?>

<div class="container-fluid testimonial-index d-flex flex-column justify-content-center justify-content-lg-evenly justify-content-xl-evenly align-items-center py-5">
  <figure class="figure d-flex flex-column justify-content-center align-items-center mb-4 ">
    <img src="../../../assets/images/test-img.png" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption text-center"><?= $testimonials[0] ?></figcaption>
    <hr class="caption-underline">
  </figure>
  <div class="container-fluid testimonial-index-text mb-4">
    <p class="text-center"><q><?= $lorem['lorem25'] ?></q></p>
  </div>
  <a class="btn index-testimonial-btn" href="/testimonials">Clients' Testimonials</a>
</div>