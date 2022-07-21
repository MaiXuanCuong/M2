    <?php
        $mang=[
            [7,6,5,4],
            [6,6,5,5],
            [5,4,4,6],
            [4,5,6,7]
        ];
        $tong1=0;
        $tong2=0;
        for($i=0;$i<count($mang);$i++){
            for($j=0;$j<count($mang[$i]);$j++){
                if($i==$j){
                    $tong1+=$mang[$i][$j];
                }
                if($i+$j==(count($mang)-1)){
                    $tong2+=$mang[$i][$j];
                }
            }
        }
        echo "Tổng đường chéo 1 là: ".$tong1."<br>";
        echo "Tổng đường chéo 2 là: ".$tong2;
    ?>
