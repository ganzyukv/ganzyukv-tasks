<?php

/**
 * Создает матрицу размером n * n и заполняет ее по спирали
 *
 * @param int {Number} n - размерность матрицы
 * @returns array {Number[n][n]} - n * n - матрица, заполненная по спирали
 */
function fillSpiralMatrix($n)
{
    $curSide = $side = $n;
    $offset = 0;
    $curNumber = 1;
    $matrix = [];

    while ($offset < ($side / 2)) {

        // top line
        for ($i = 0; $i < $curSide; $i++) {
            $matrix[$offset][$offset + $i] = $curNumber++;
        }

        // right line
        for ($i = 0; $i < $curSide - 2; $i++) {
            $matrix[1 + $offset + $i][$side - 1 - $offset] = $curNumber++;
        }

        // bottom line
        if (floor($side / 2) - $offset > 0) {
            for ($i = 0; $i < $curSide; $i++) {
                $matrix[$side - 1 - $offset][$side - 1 - $i - $offset] = $curNumber++;
            }
        }

        // left line
        for ($i = 0; $i < $curSide - 2; $i++) {
            $matrix[$side - 2 - $offset - $i][$offset] = $curNumber++;
        }

        $offset++;
        $curSide -= 2;
    }

    foreach ($matrix as &$row) {
        ksort($row);
    }

    return $matrix;
}
