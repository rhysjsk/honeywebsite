<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_lTJJbAIw8CKgiwOUxhKYU1E4",
  "publishable_key" => "pk_test_O2lJTyId4DFTsO6x47busZLP"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>