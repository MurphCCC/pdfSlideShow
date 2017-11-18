<?php

$file = $_REQUEST;
var_dump($_REQUEST);

file_put_contents('./config.json', $file);
