<?php

class Task{
    public function results(){
        $random_array = range(0,20);
        shuffle($random_array);
        $random_array = array_slice($random_array, 0, 10);
        print_r($random_array);
        printf("</br>");

        $evens = 0;
        $odds = 0;
        foreach ($random_array as $item){
            $item % 2 ? ++$evens : ++$odds;
        }
        $max = max($random_array);
        $min = min($random_array);

        printf("Max integer is $max, Min Integer is $min, Evens count is $evens, Odds count is $odds");
    }
}

$task = new Task();
$task->results();