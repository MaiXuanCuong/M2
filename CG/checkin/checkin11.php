<?php
$splstack = new SplStack();
$splstack->push("Cường");
$splstack->push("Tân");
$splstack->push("Thắng");
$splstack->push("Phi");
$splstack->push("Tâm");
// echo $splstack->top()."<br>";
// echo $splstack->pop()."<br>";
// echo $splstack->pop()."<br>";
// echo $splstack->pop()."<br>";h

//dua con tro toi vi tri dau tien
$splstack->rewind();
//kiem tra danh sach còn dữ liệu hay ko: $objSplStack->valid()
while( $splstack->valid() ){
    echo $splstack->current().'<br>';
    //con trỏ nhảy thêm một vị trí
    $splstack->next();
}

?>