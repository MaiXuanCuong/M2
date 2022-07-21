<?php
        $mang=[
            [3,5,1],
            [9,6,5]
        ];
        $tong1=0;
        $tong2=0;
        $tong3=0;
        $cot1=0;
        $cot2=1;
        $cot3=2;
        for($i=0;$i<count($mang);$i++){
            for($j=0;$j<count($mang[$i]);$j++){
                if($j==$cot1){
                    $tong1+=$mang[$i][$j];
                }
                if($j==$cot2){
                    $tong2+=$mang[$i][$j];
                }
                if($j==$cot3){
                    $tong3+=$mang[$i][$j];
                }
            }
        }
        echo "tổng cột 1 là : " . $tong1.'<br>';
        echo "tổng cột 2 là : " . $tong2.'<br>';
        echo "tổng cột 3 là : " . $tong3;



    ?>