<?php

require "functions.php";
class Task
{
    public $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}


// $task = new Task('go to store');
//
// $task->complete();
// var_dump($task->isComplete());
$tasks = [
    new Task('go to store'),
    new Task('do shopping'),
    new Task('come back home')
];

dd($tasks);


require 'index.view.php';
