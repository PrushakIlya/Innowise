<?php

include_once 'Task1.php';
$task_1 = new ('Prushak\Innowise\Task1');
$input = 5;
if (!is_int($input)) {
    throw new InvalidArgumentException('main function only accepts integer. Input was: '.$input);
}
echo $task_1->main(10);
