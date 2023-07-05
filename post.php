<?php
// load module
require_once('./vendor/autoload.php');
// pemanggilan module
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
// jika tidak menggunakan kode random pada get.php, kode diatas disesuaikan dengan data yang ada pada get.php
// jika menggunakan kode random, maka diambil dari database sesuai dengan logger yang memanggil

$payload = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEyMzQ1Njc4OTAiLCJwb3NuYW1lIjoiUG9zIEdpdG8gR2F0aSIsImxhdGl0dWRlIjowLjE1MTYyMzkwMjIsImxvbmdpdHVkZSI6MTAxLjAwMDAxMiwicmFpbmZhbGwiOjAsIndhdGVybGV2ZWwiOjEwMH0.Gh9oD34ZfbHlbdCHpbAe_d4clcoZU9T84V9u8Tl3uVM";
// payload ini didapatkan dari kiriman logger

$decoded = JWT::decode($payload, new Key($key, 'HS256'));
// setelah mendapatkan payload dari logger kemudian di decode

$decoded_array = (array) $decoded;
// parsing isi payload sesuai kebutuhan lalu simpan ke dalam database

print_r($decoded_array);
// cetak informasi yang ingin ditampilkan


// Sumber :
// https://jwt.io/
// https://github.com/firebase/php-jwt