<?php
$config = require 'config.php';
require 'core/router.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';

// $pdo = Connection::make();
//
// $query = new QueryBuilder($pdo);
// we can inline $pdo variable since we use it only here:
$query = new QueryBuilder(
    Connection::make($config['database'])
);
