<?php

include_once 'Task12.php';
$task_12 = new ('src\Task12')(12, 6);
echo $task_12->add()->divideBy(2)->main();
// echo $task_12->multiply()->main();
// echo $task_12->subtract()->main();
