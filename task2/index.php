<?php

/**
 * Проверяет состоят ли массивы arr1 и arr2 из одинакового
 * числа одних и тех же элементов
 *
 * @param array arr1 - отсортированный по возрастанию
 *                          массив уникальных элементов
 * @param array arr2 - массив произвольной длинны произвольных чисел
 * @returns {Boolean}
 */

function haveSameItems(array $arr1, array $arr2)
{
    if(count($arr1) !== count($arr2)){
        return false;
    }

    foreach($arr1 as $value){
        if(!in_array($value, $arr2)){
            return false;
        }

    }
    return true;
}
