<!-- Дано число $num=800.
 Делите его на 2 столько раз, пока результат деления не станет меньше 50. 
 Какое число получится? 
 Посчитайте количество итераций, необходимых для этого 
 (итерация - это проход цикла). 
 Решите задачу сначала через цикл while, а потом через цикл for -->

 <?php
$num = 800;

$i = 0;

while ($num > 50){
    $num /= 2;
    $i++;
}
echo "Получилось число: $num <br />";
echo "Колличество итераций: $i <br />";


for ($num1 = 800, $j = 0; $num1 > 50; $j++){
    $num1 /= 2;
}

echo "Получилось число: $num1 <br />";
echo "Колличество итераций: $j"

?>