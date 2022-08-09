<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("Ký tự đầu tiên của chuỗi là chữ hoa");
    } else {
        echo("Ký tự đầu tiên của chuỗi không phải là chữ hoa");
    }
}

isFirstLetterUpperCase('Nguyen van Nam');
echo "<br>";
isFirstLetterUpperCase('NGUYEN VAN NAM');
echo "<br>";
isFirstLetterUpperCase('nguyen van Nam');
echo "<br>";
?>