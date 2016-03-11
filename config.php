<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_4OlzpszvpDJWBNrg7EAl6v3b",
  "publishable_key" => "pk_test_FoBJucysqa1E5k7n9u1FVhru"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>