<?php

include_once 'Task3.php';
$task_3 = new ('src\Task3');
$input = 5689;
if (!is_int($input)) {
    throw new InvalidArgumentException('main function only accepts integers. Input was: '.$input);
}
echo $task_3->main($input);
