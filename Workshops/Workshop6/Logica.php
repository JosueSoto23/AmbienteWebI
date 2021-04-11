<?php

$list = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

function recordedTemperatures($list)
{
    $count = 0;
    echo "Recorded Temperatures: ";
    foreach ($list as $value) {
        echo $list[$count];
        if ($count < count($list) - 1) {
            echo ", ";
        }
        $count++;
    }
}

function averageTemperature($list)
{
    $count = 0;
    $average = 0;
    echo "Average Temperature: ";
    foreach ($list as $value) {
        $average += $value;
        $count++;
    }
    echo $average / $count;
}

function listLowest($list)
{
    echo "List of 5 lowest temperatures: ";
    $n1 = 1000000000;
    $n2 = 1000000000;
    $n3 = 1000000000;
    $n4 = 1000000000;
    $n5 = 1000000000;
    foreach ($list as $value) {
        if ($value < $n1) {
            $n1 = $value;
        }
        if ($value < $n2) {
            if ($value != $n1)
                $n2 = $value;
        }
        if ($value < $n3) {
            if ($value != $n1 && $value != $n2)
                $n3 = $value;
        }
        if ($value < $n4) {
            if ($value != $n1 && $value != $n2 && $value != $n3)
                $n4 = $value;
        }
        if ($value < $n5) {
            if ($value != $n1 && $value != $n2 && $value != $n3 && $value != $n4)
                $n5 = $value;
        }
    }
    echo $n1, ", ", $n2, ", ", $n3, ", ", $n4, ", ", $n5;
}

function listHighest($list)
{
    echo "List of 5 highest temperatures: ";
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $n4 = 0;
    $n5 = 0;
    foreach ($list as $value) {
        if ($value > $n1) {
            $n1 = $value;
        }
        if ($value > $n2) {
            if ($value != $n1)
                $n2 = $value;
        }
        if ($value > $n3) {
            if ($value != $n1 && $value != $n2)
                $n3 = $value;
        }
        if ($value > $n4) {
            if ($value != $n1 && $value != $n2 && $value != $n3)
                $n4 = $value;
        }
        if ($value > $n5) {
            if ($value != $n1 && $value != $n2 && $value != $n3 && $value != $n4)
                $n5 = $value;
        }
    }
    echo $n1, ", ", $n2, ", ", $n3, ", ", $n4, ", ", $n5;
}
