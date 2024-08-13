<?php
  require "./php/variables.php";
  require "./php/myInfo.php";
?>

<h2 class="w-100 text-center mt-4">Virtually or In-Person</h2>
<div class="container-fluid d-flex flex-column flex-lg-row my-4">
  <!--- First block --->
  <div class="container col-12 col-lg-6 px-lg-4 my-3">
    <ul class="contact-info-list">
      <li>
        <small><i class="fa-solid fa-envelope"></i> Email</small><br>
        <p><?= $myInfo -> myEmail ?></p>
      </li>
      <li>
        <small><i class="fa-solid fa-phone"></i> Phone</small><br>
        <p><?= $myInfo -> myPhone ?></p>
      </li>
      <li>
        <small><i class="fa-solid fa-globe"></i> Online Treating</small><br>
        <p><?= $myInfo -> onlineTreating ?></p>
      </li>
      <li>
        <small><i class="fa-solid fa-couch"></i> In Person</small><br>
        <p><?= $myInfo -> officeAddress ?></p>
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