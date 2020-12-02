<?php

require 'ApiKeyGenerator/akg.php';

$api = new ApiKey();

echo $api->Generator();
echo '<br>';
echo $api->Generator(32);

?>