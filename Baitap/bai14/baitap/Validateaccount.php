<?php
$Pattern = '/^[_a-z0-9]{6,}$/';
$subject = 'dvnnjsns';
if (preg_match($Pattern, $subject, $matches)){
    echo " Định dạng đúng: ".$subject;
} else {
    echo " Định dạng không đúng: ".$subject;
}


?>