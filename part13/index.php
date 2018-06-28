<?php

require 'function.php';
require 'Task.php';

$pdo = connectToDb();

// var_dump($statement->fetchAll(PDO::FETCH_OBJ));
// $results = $statement->fetchAll(PDO::FETCH_OBJ);
//
// var_dump($results[0]->description);

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

//

$tasks = fetchAllTasks($pdo);









require 'index.view.php';
