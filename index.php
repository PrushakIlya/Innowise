<?php

include_once 'Task1.php';
$input = 11;
if (!is_int($input)) {
    throw new InvalidArgumentException('main function only accepts integer. Input was: '.$input);
}
$task_1 = new ('Prushak\Innowise\Task1')($input);

echo $task_1->main();
