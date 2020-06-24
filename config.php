<?php

$params = explode("htdocs", __DIR__);

# Setting the path for the root directory
$path = str_replace($params[0] . "htdocs", "localhost", __DIR__);

define ("ROOT", "http://" . $path . '/');
define ("ROOT_URL", "http://" . $path . "/views/");
define ("ROOT_CSS", "http://" . $path . "/assets/css/");



