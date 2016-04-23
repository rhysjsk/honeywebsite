<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_e34E8toNGRruCQTzOEWdXqXE",
  "publishable_key" => "pk_live_Y9G0tQ9b6TvRRi3ctDHsDxlF"
);

$db = array(
	"name" => "galileo",
	"user" => "galileo",
	"password" => "8yp6Y5"
)

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>