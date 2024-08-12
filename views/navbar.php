<?php 
  include "./php/actualUrl.php";
?>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navigation">
    <div class="container-fluid" id="navigation-wrapper">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="<?= actualUrl('/') ? 'nav-link active' : 'nav-link' ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="<?= actualUrl('/about') ? 'nav-link active' : 'nav-link' ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="<?= actualUrl('/help') ? 'nav-link active' : 'nav-link' ?>" href="/help">Seek Help</a>
          </li>
          <li class="nav-item">
            <a class="<?= actualUrl('/contact') ? 'nav-link active' : 'nav-link' ?>" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
