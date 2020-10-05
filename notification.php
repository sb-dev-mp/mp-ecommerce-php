<?php
  $entityBody = file_get_contents('php://input');
  if (isset($_POST)) {
    if ($entityBody != NULL && $entityBody->action == "payment.created")
      file_put_contents(__DIR__ . '/log.json', json_encode($entityBody));
    http_response_code(200);
  } else  {
    file_put_contents(__DIR__ . '/log.txt', json_encode($entityBody));
  }