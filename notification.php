<?php

if (isset($_POST)) {
  $entityBody = file_get_contents('php://input');
  $json = json_decode($entityBody);
  if ($json->action == "payment.created")
    file_put_contents(__DIR__ . '/log.json', json_encode($json));
  http_response_code(200);
}