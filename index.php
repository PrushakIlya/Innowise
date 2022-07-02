<?php

include_once 'src/Task1.php';
$task_1 = new ('Prushak\Innowise\Task1');

$inputNumber = 1;
if (!is_int($inputNumber)) {
    throw new InvalidArgumentException('main function only accepts integers. Input was: '.$inputNumber);
}
echo $task_1->main($inputNumber);
