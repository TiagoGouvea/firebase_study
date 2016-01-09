<?php
/**
 * Based on https://github.com/ktamas77/firebase-php
 */

require 'vendor/autoload.php';

const DEFAULT_URL = 'https://luminous-inferno-1746.firebaseio.com/';
const DEFAULT_TOKEN = 'type_yours!';
const DEFAULT_PATH = '/firebase/example';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- storing an array ---
$test = array(
    "foo" => "bar",
    "i_love" => "lamp",
    "id" => 42
);
$dateTime = new DateTime();
$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test);

// --- storing a string ---
$firebase->set(DEFAULT_PATH . '/name/contact001', "John Doe");

echo "<pre>";

// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/name/contact001');
var_dump($name);

$names = $firebase->get(DEFAULT_PATH . '/name');
var_dump($names);

$root = $firebase->get(DEFAULT_PATH . '/');
var_dump($root);