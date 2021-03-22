<?php
$array = [
    'Красный' => 1,
    'Желтый' => 2,
    'Зеленый' => 3,
    'Синий' => 4,
    'Оранжевый' => 5,
    'Фиолетовый' => 6,
    'Сиреневый' => 7,
    'Салатовый' => 8,
    'Фуксия' => 9,
    'Розовый' => 10,
    'Изумрудный' => 11,
    'Вишневый' => 12,
    'Бордовый' => 13,
    'Мятный' => 14,
    'Персиковый' => 15
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <?php foreach($array as $key => $value) {
        echo ($key) . " ";
        echo ($value) . PHP_EOL;
     }
     ?>
</body>
</html>
