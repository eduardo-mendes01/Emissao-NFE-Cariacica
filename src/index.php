<?php

use App\Config\Database;

require_once 'bootstrap.php';

$config = require 'Config/Database.php';


$pdo = Database::connection();

$stmt = $pdo->query('SELECT NOW()');

echo $stmt->fetchColumn();