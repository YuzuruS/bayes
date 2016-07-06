<?php
require 'vendor/autoload.php';
use Fieg\Bayes\Classifier;
use Fieg\Bayes\Tokenizer\WhitespaceAndPunctuationTokenizer;

$tokenizer = new WhitespaceAndPunctuationTokenizer();
$classifier = new Classifier($tokenizer);

$classifier->train('en', 'This is a pen.');
$classifier->train('en', 'He is my friend.');
$classifier->train('ja', 'Kore ha pen desu.');
$classifier->train('ja', 'Kare ha watasi no tomodati desu.');
$classifier->train('cn', 'Zhe shi qian bi.');
$classifier->train('cn', 'Ta shi wo de peng you.');

$result = $classifier->classify('This is a test.');

var_dump($result);
