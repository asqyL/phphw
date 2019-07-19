<?php 

$week = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];

$today = (date('N') - 1);

foreach ($week as $k => $v) {
    # code...
    if($today == $k){
        echo "<strong>$v</strong>";
    } else {
        echo $v;
    }
}


?>