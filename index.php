<?php

include_once 'src/Task6.php';
$task_6 = new ('Prushak\Innowise\Task6');

$inputNumber = 1;
if (!is_int($inputNumber)) {
    throw new InvalidArgumentException('main function only accepts integers. Input was: '.$inputNumber);
}
echo $task_6->main(1980, 1999, 1, 12);
