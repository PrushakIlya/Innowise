<?php

include_once 'Task4.php';
$inputString = 'The quick-brown_fox jumps over the_lazy-dog-Ilya';
if (!is_string($inputString)) {
    throw new InvalidArgumentException('main function only accepts strings. Input was: '.$inputString);
}
$task_4 = new ('Prushak\Innowise\Task4')($inputString);
echo $task_4->main();
