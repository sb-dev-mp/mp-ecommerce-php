<?php
  file_put_contents(__DIR__ . '/log-' . $_GET['id'] .'.txt', json_encode($_GET));