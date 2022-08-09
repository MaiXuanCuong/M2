<?php
$subject = 'maixuancuong2906@gamil.com';
$Pattern  = '/[0-9a-zA-Z_.-]+\@[a-z]+\.[a-z]+/';
if (preg_match($Pattern, $subject, $matches)){
    echo $subject." Định dạng đúng";
} else {
    echo $subject." Định dạng không đúng";
}
?>