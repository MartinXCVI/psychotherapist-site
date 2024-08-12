<?php

class Reviewer {
  public $revName;
  public $revJob;

  public function __construct($revName, $revJob) {
    $this -> revName = $revName;
    $this -> revJob = $revJob;
  }
}

$firstReview = new Reviewer("Olivia Kensington", "Interior Designer");
$secondReview = new Reviewer("Ethan Caldwell", "Financial Consultant");
$thirdReview = new Reviewer("Sophie Whitmore", "Entrepreneur");
