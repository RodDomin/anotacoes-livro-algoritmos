<?php

function selectionSort(array $values)
{
    $copy = $values;

    $orderedArray = [];

    for($i = 0; $i < count($copy); $i++) {
        $minorValue = null;
        $minorIndex = null;

        foreach ($copy as $index => $each) {
            if ($minorValue === null || $each < $minorValue) {
                $minorValue = $each;
                $minorIndex = $index;
            }
        }

        array_push($orderedArray, $minorValue);
        unset($copy[$minorIndex]);
    }

    return $orderedArray;
}
