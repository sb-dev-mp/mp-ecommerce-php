<?php
  if (isset($_POST)) {
    file_put_contents(__DIR__ . '/log.json', json_encode($_POST));
    http_response_code(200);
  } else  {
  }