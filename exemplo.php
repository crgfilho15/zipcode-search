<?php

require_once "vendor/autoload.php";
require "src/Search.php";

use crgfilho15\cep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('36700016');

print_r($resultado);

?>