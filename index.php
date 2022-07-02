<?php

include_once 'src/Task3.php';
$task_3 = new ('Prushak\Innowise\Task3');

$inputNumber = 100;
if (!is_int($inputNumber)) {
    throw new InvalidArgumentException('main function only accepts integers. Input was: '.$inputNumber);
}
echo $task_3->main($inputNumber);
