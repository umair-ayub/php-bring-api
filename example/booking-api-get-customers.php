<?php
require '../vendor/autoload.php';

use \Peec\Bring\API\Client\BookingClient;

// See http://developer.bring.com/api/booking/ ( Authentication section ) . You will need Client id, api key and client url.
$credentials = new \Peec\Bring\API\Client\Credentials("http://mydomain.no", getenv('BRING_UID'), getenv('BRING_API_KEY'));
$client = new BookingClient($credentials);

print_r($client->getCustomers());