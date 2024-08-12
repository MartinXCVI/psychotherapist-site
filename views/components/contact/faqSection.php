<?php
  require './php/faq.php';
?>

<div class="container-fluid d-flex flex-column px-0 py-5" id="faq-wrapper">
  <h2 class="w-100 col-12 text-center mt-5">Frequently Asked Questions</h2>
  <div class="container-fluid d-flex flex-column flex-lg-row py-5 px-lg-4">
    <!--- First FAQ div --->
    <div class="container col-12 col-lg-6 mb-5 mb-lg-0">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <?= $faq[0][0] ?>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <?= $faq[0][1] ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <?= $faq[1][0] ?>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <?= $faq[1][1] ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <?= $faq[2][0] ?>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <?= $faq[2][1] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- Second FAQ div --->
    <div class="container col-12 col-lg-6 mb-5 mb-lg-0">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              <?= $faq[3][0] ?>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <?= $faq[3][1] ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <?= $faq[4][0] ?>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <?= $faq[4][1] ?>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              <?= $faq[5][0] ?>
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <?= $faq[5][1] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>