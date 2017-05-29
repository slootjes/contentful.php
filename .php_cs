<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in('src')
    ->in('tests');

return Config::create()
    ->setFinder($finder)
    ->setRules(array(
      '@PSR2' => true
    ))
    ->setUsingCache(true);
