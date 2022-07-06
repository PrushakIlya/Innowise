<?php

include_once 'Task1.php';
$input = 31;
if (!is_int($input)) {
    throw new InvalidArgumentException('main function only accepts integer. Input was: '.$input);
}
$task_1 = new ('src\Task1');

echo $task_1->main($input);
