<?php

// Your goal is to count how many items exist that have an age equal to or greater than 50, and print this final value.

$ch = curl_init('https://coderbyte.com/api/challenges/json/age-counting');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);

if(preg_match_all('/age=[5-9][0-9]/', $data, $matches)) {
    print count(current($matches));
}
