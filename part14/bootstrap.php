<?php

require 'database/QueryBuilder.php';
require 'database/Connection.php';

// $pdo = Connection::make();
//
// $query = new QueryBuilder($pdo);
// we can inline $pdo variable since we use it only here:
$query = new QueryBuilder(Connection::make());
