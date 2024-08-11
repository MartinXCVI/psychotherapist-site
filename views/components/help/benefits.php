<?php
  include './php/variables.php';
?>

<div class="container-fluid justify-content-center row px-sm-2 py-4 p-xl-4 " id="benefits-intro">
<h2 class="my-5 mt-2 text-center">Benefits of Psychotherapy</h2>
  <div class="intro-article col-sm-10 col-lg-6 col-xl-7">
    <ul class="benefits-list">
      <?php
        foreach($benefits1 as $benefit) {
          echo "<li class='benefit-item mb-4'>$benefit</li>";
        }
      ?>
    </ul>
  </div>
  <div class="col-sm-10 col-lg-7 col-xl-4">
    <figure class="figure">
      <img src="../../../assets/images/help-img-1.jpg" class="figure-img img-fluid rounded" alt="...">
    </figure>
  </div>
</div>
<div class="container-fluid justify-content-center row px-sm-2 pt-4 p-xl-4">
  <div class="col-sm-10 col-lg-7 col-xl-4">
    <figure class="figure">
      <img src="../../../assets/images/help-img-2.jpg" class="figure-img img-fluid rounded" alt="...">
    </figure>
  </div>
  <div class="intro-article col-sm-10 col-lg-6 col-xl-7">
    <ul class="benefits-list">
      <?php
        foreach($benefits2 as $benefit) {
          echo "<li class='benefit-item mb-4'>$benefit</li>";
        }
      ?>
    </ul>
  </div>
</div>
<div class="container-fluid benefits-btn-section d-flex justify-content-center align-items-center pb-5 ">
  <a class="btn index-testimonial-btn text-center" href="/testimonials">Clients' Testimonials</a>
</div>