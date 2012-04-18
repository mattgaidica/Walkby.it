<?php

function shorty_encode($shorty_id) {
  $codeset = '0123456789abcdefghijklmnopqrstuvwxyz';
  $base = strlen($codeset);
  $shorty_code = '';

  while ($shorty_id > 0) {
    $shorty_code = substr($codeset, ($shorty_id % $base), 1) . $shorty_code;
    $shorty_id = floor($shorty_id/$base);
  }
  return $shorty_code;
}

function shorty_decode($shorty_code) {
  $codeset = '0123456789abcdefghijklmnopqrstuvwxyz';
  $base = strlen($codeset);
  $shorty_id = 0;
  for ($i = strlen($shorty_code); $i; $i--) {
    $shorty_id += strpos($codeset, substr($shorty_code, (-1 * ( $i - strlen($shorty_code) )),1)) * pow($base,$i-1);
  }
  return $shorty_id;
}

?>