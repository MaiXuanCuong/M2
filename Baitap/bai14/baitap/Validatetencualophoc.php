<?php
$pattern = '/^[CAP]{1,1}[0-9]{4,4}[GHIKLM]{1,1}$/';
$string = 'C0318G';
if (preg_match($pattern, $string, $matches)) {
    echo 'Tên hợp lệ: '.$string;
} else {
    echo 'Tên không hợp lệ: '.$string;
}

?>