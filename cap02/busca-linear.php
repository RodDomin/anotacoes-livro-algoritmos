<?php

function linearFind(array $values, $value)
{
    $index = null;

    foreach($values as $arrIndex => $each) {
        if ($value === $each) {
            $index = $arrIndex;
            break;
        }
    }

    return $index;
}