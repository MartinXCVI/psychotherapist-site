<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


require 'router/router.php';
