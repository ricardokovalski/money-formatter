<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src');

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'native_function_invocation' => false,
        'ordered_imports' => ['sortAlgorithm' => 'alpha'],
        'no_unused_imports' => true,
        'single_quote' => true,
        'space_after_semicolon' => true,
        'trailing_comma_in_multiline_array' => true,
        'cast_spaces' => ['space' => 'single'],
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
