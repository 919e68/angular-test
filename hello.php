<?php
  http_response_code(200);

  echo json_encode([
    'ok'  => true,
    'msg' => 'Hello World Response'
  ]);