<?php

function actualUrl($value) {
  return $_SERVER['REQUEST_URI'] === $value;
}