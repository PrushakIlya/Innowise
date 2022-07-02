<?php

include_once 'src/Task.php';
$task = new ('Prushak\Innowise\Task');

$inputNumber = 1;
if (!is_int($inputNumber)) {
    throw new InvalidArgumentException('main function only accepts integers. Input was: '.$inputNumber);
}
echo $task->main($inputNumber);
