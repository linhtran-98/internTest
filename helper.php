<?php
// Cau 1
    function sortDesc($arr){
        for($i = 0; $i < count($arr); $i++){
            for($j = $i+1; $j < count($arr); $j++){
                if($arr[$j] > $arr[$i]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
            array_splice($arr, 5);
        return $arr;
    }

    function print_arr($arr){
        foreach ($arr as $key => $value) {
            echo $value.' ';
        }
    }
// end cau 1

// cau 2

    function frequency($arr){
        $max = 0; $index = 0;
        $arr = check($arr);
        $myarr = array_count_values($arr);
        foreach ($myarr as $key => $value) {
            if($max < $value){
                $max = $value;
                $index = $key;
            }
        }
        print_arr($arr);
        echo ' -> '.$index;
    }

    function check($arr){
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] === false){
                $arr[$i] = "false";
            }
            if($arr[$i] === true){
                $arr[$i] = "true";
            }
            if($arr[$i] === null){
                $arr[$i] = "null";
            }
            
        }
        return $arr;
    }
// End cau 2
?>