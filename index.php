<?php

include_once 'src/Task2.php';
$task_2 = new ('Prushak\Innowise\Task2');

$date = 1;

if (!is_string($date)) {
    throw new InvalidArgumentException('main function only accepts strings and correct format. Input was: '.$date);
}
echo $task_2->main($date);
