<?php
function testMonth($Month){
    switch ($Month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "Tháng ".$Month." Có 31 ngày";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "Tháng ".$Month." Có 30 ngày";
            break;
        case 2:
            echo "Tháng ".$Month." Có 28 or 29 ngày";
            break;
    
        default:
        echo "Tháng ".$Month." không tồn tại ";
            break;
    }
}
testMonth(3);
?>