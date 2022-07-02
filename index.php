<?php

include_once 'src/Task2.php';
$task_2 = new ('Prushak\Innowise\Task2');

$date = '24.01.1000';
$match = preg_match('~^(((0|1|2)?[0-9]{1})|(30|31)|([1-9]{1})).((10|11|12)|0?[1-9]{1}).((1900|19[0-9]{2})|(200[0-9]{1}|201[0-9]{1}|202[0-3]{1}))$~', $date);
if (!is_string($date) || $match===0) {
    throw new InvalidArgumentException('main function only accepts strings and correct format. Input was: '.$date);
}
echo $task_2->main($date);
