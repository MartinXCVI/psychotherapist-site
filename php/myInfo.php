<?php

Class MyInfo {
  public $myEmail;
  public $myPhone;
  public $onlineTreating;
  public $officeAddress;

  public function __construct($myEmail, $myPhone, $onlineTreating, $officeAddress) {
    $this -> myEmail = $myEmail;
    $this -> myPhone = $myPhone;
    $this -> onlineTreating = $onlineTreating;
    $this -> officeAddress = $officeAddress;
  }
}

$myInfo = new MyInfo("myemailaddress@something.com", "098 - 765 - 1234", "Via Meet, Skype or Zoom", "Office Name, Street 123 - City");