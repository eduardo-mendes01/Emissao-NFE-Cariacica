<?php

$envFile = '../.env';

if (!file_exists($envFile)) {
    throw new Exception('.env não encontrado');
}

$lines = file(
    $envFile,
    FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
);

foreach ($lines as $line) {

    $line = trim($line);

    if ($line === '' || str_starts_with($line, '#')) {
        continue;
    }

    [$key, $value] = explode('=', $line, 2);

    $_ENV[trim($key)] = trim($value);
}