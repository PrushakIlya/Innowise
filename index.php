<?php

include_once 'src/Task8.php';
$task_8 = new ('Prushak\Innowise\Task8');
$json = '{
        "Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Detail": {
            "Publisher":{ 
                "ilya": "Little Brown"}   
        }
        }';

echo $task_8->main($json);
