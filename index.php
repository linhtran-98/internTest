<?php
require_once('./helper.php');
    echo 'Cau 1: </br>';
    // Cau 1a
    $arr1 = [3,4,5,3,2,3,10,11];
    $arr2 = [14,12,38,17,10,36,12,29,45,34,48,22];
    $arr3 = [10,11,2,30,22,6,8,9,11,12,22];

    echo 'Mang truoc khi sap xep: </br>';

    print_arr($arr1);
    echo '</br>';
    print_arr($arr2);
    echo '</br>';
    print_arr($arr3);
    echo '</br></br>';

    echo 'Mang sau khi sap xep: </br>';


    print_arr(sortDesc($arr1));
    echo '</br>';
    print_arr(sortDesc($arr2));
    echo '</br>';
    print_arr(sortDesc($arr3));
    echo '<hr>';
    // end cau 1a
// ==========================================================================
    // cau 1b
    echo 'Cau 2: </br>';
    $array1 = [3, 7, 3];
    $array2 = [null, "hello", true, null];
    $array3 = [false, "up", "down", "left", "right", true, false];

    frequency($array1); echo '</br>';
    frequency($array2); echo '</br>';
    frequency($array3); echo '</br>';

    // end cau 1b
?>
