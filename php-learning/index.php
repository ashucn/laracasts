<?php

require 'functions.php';
class Task {

    public $des;
    public $completed = false; // protected: class生成的对象不能直接访问，只内部class内部访问

    public function __construct($des)
    {
        $this->des = $des;

    }

    /**
     * @return mixed
     */
    public function complete()
    {
        return $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('lib'),
    new Task('store'),
];

$tasks[1]->complete();
//$task->complete();
//var_dump($task->isComplete());
//dd($tasks);
require 'index.view.php';