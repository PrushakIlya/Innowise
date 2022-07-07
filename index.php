<?php

include_once 'Task8.php';
$task_8 = new ('src\Task8');
$json = '{
        "Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Detail": {
        "Publisher": "Little Brown"
        }
        }
        ';

echo $task_8->main($json);
