<?php
$pattern = '/\([0-9]{2,2}\)-\([0][0-9]{9,9}\)/';
$string = '(84)-(0978489648)';

if (preg_match($pattern, $string)) {
    echo "Số định dạng đúng: " . $string;
} else {
    echo "Số định dạng không đúng: " . $string;
}



?>