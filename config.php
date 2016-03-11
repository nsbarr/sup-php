<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_krEcK3doqljClSJBXd65eRKY",
  "publishable_key" => "pk_live_aEDQBn9Khn6X7kXNiL5tuMsP"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>