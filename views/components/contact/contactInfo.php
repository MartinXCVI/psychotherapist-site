<?php
  require "./php/variables.php";
?>

<h2 class="w-100 text-center mt-4">Virtually or In-Person</h2>
<div class="container-fluid d-flex flex-column flex-lg-row my-4">
  <!--- First block --->
  <div class="container col-12 col-lg-6 px-lg-4 my-3">
    <ul class="contact-info-list">
      <li>
        <small><i class="fa-solid fa-envelope"></i> Email</small><br>
        <p>myemailaddress@something.com</p>
      </li>
      <li>
        <small><i class="fa-solid fa-phone"></i> Phone</small><br>
        <p>123 - 456 - 7890</p>
      </li>
      <li>
        <small><i class="fa-solid fa-globe"></i> Online Treating</small><br>
        <p>Via Zoom, Skype or Meet</p>
      </li>
      <li>
        <small><i class="fa-solid fa-couch"></i> In Person</small><br>
        <p>My Office Name<br> Street Name, N°<br>City, State</p>
      </li>
    </ul>
  </div>
  <!--- Second block --->
  <div class="container col-12 col-lg-6 px-lg-4 my-3">
    <p><?= $lorem["lorem25"] ?></p>
    <p><?= $lorem["lorem20"] ?></p>
    <p><?= $lorem["lorem25"] ?></p>
    <p><?= $lorem["lorem10"] ?></p>
  </div>
</div>