<?php

/*
 * Primeiro algoritmo que aparece no livro é o de ordenação
 * por inserção, onde o livro compara a ordenação com o momento
 * em que você ordena cardas do baralho.
 */
function insertionSort(array $values)
{
  $copy = $values;

  for($j = 1; $j < count($copy); $j++) {
      $key = $copy[$j];

      $i = $j - 1;
      while($key > 0 && $copy[$i] > $key) {
          $copy[$i + 1] = $copy[$i];
          $i -= 1;
      }

      $copy[$i + 1] = $key;
  }

  return $copy;
}

var_dump(@insertionSort([3, 2, 6, 1, 7]));