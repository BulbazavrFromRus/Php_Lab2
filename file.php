<?php
 echo "1. Дан массив с элементами ['Привет, ', 'мир',  '!']. Необходимо вывести на консоль фразу 'Привет, мир!'" . "<br>";

 $array = ['Привет, ', 'мир',  '!'];

 $phrase = implode('', $array);
 
 echo $phrase . "<br>". "<br>";

 echo "2. Дан массив ['Привет, ', 'мир', '!']. Необходимо заменить  первый элемент этого массива на слово 'Пока,'. Вывести на консоль полученный массив." . "<br>";

 $array[0] = 'Пока, ';

 echo implode('',$array) . "<br>" . "<br>";


echo "3. Дана некоторая строка: '023m0df0dfg0'. Получить массив позиций всех нулей в этой в строке. Вывести на консоль массив." . "<br>";

$string =  '023m0df0dfg0';

$newArray = [];

for($i = 0; $i < strlen($string); $i++){
    if($string[$i] === '0'){
        $newArray[] = $i;
    }
}

echo "[" .  implode(', ',$newArray) . "]" . "<br>" . "<br>";

echo "4. Создать массив из 10 элементов. Заполнить его случайными числами. Записать в новый массив только те числа, в которых есть цифра 5. Вывести на консоль оба массива." . "<br>";

$array = [];

for($i = 0; $i < 10; $i++){
    $array[$i] = rand(); 
}

echo "Массив всех чисел: " . "<br>";
echo "[" .  implode(',  ',$array) . "]" . "<br>" . "<br>";

$newArray = [];

foreach($array as $num){
    if(strpos((string)$num, '5') !== false){
       $newArray[] = $num;
    }
}

echo "Массив чисел содержащих цифру 5: " . "<br>";
echo "[" .  implode(', ',$newArray) . "]" . "<br>" . "<br>";

echo "5. Напишите функцию, которая будет сливать два массива таким образом: из, к примеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c']. Вывести на консоль все массивы. " . "<br>";

$arrayNum = [1,2,3];
$arrayChar = ['a', 'b', 'c'];

function mergeArrays($array1, $array2) {
    $mergedArray = []; 

    $length1 = count($array1); 
    $length2 = count($array2);

    $maxLength = max($length1, $length2);

    for ($i = 0; $i < $maxLength; $i++) {
        if ($i < $length1) {
            $mergedArray[] = $array1[$i];
        }
        if ($i < $length2) {
            $mergedArray[] = $array2[$i];
        }
    }

    return $mergedArray;
}

$result = mergeArrays($arrayNum, $arrayChar);

echo "[ " .  implode(', ', $result) . " ]" .  "<br>" . "<br>";

echo "6. Создать массив из 10 элементов. Заполнить случайными числами. Отсортировать по убыванию. Вывести на консоль оба массива." . "<br>";

$array = [];

for($i = 0; $i < 10; $i++){
    $array[$i] = rand(1, 100);
}

$sortedArray = $array;
rsort($sortedArray);

echo "Обычный массив:  " . "[ " .  implode(', ', $array) . " ]" . "<br>";
echo "Отсортированный массив по убыванию:  " . "[ " .  implode(', ', $sortedArray) . " ]" . "<br>";

sort($sortedArray);
echo "Отсортированный массив по возрастанию:  " . "[ " .  implode(', ', $sortedArray) . " ]" . "<br>" . "<br>";

echo "7. Даны 2 массива: [‘понедельник’, ‘вторник’, ‘среда’, ‘четверг’, ‘пятница’, ‘суббота’, ‘воскресенье’] и [‘Monday’, ‘Tuesday’, ‘Wednesday’, ‘Thursday’, ‘Friday’, ‘Saturday’, ‘Sunday’]. Отсортировать по алфавиту. Вывести на консоль результаты." . "<br>";

$russianArray = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
$englishArray = ["Mondey", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];



sort($russianArray);
sort($englishArray);

echo "Руссий массив:  " . implode(', ', $russianArray) . "<br>";
echo "Английский массив: " .  implode(', ', $englishArray) . "<br>" . "<br>";

echo "8. Дан массив [‘orange’, ‘red’, ‘green’, ‘blue’]. Отсортировать по длине строки. Вывести на консоль результат." . "<br>";

$array = ["orange", "red", "green", "blue"];

function compare($length1, $length2){
       return strlen($length1) - strlen($length2);
}

usort($array, 'compare');

foreach ($array as $item) {
    echo $item . PHP_EOL;
}


echo "9. Создать массив из 8 элементов. Заполнить случайными числами от 0 до 50. Поделите сумму первой половины элементов этого массива на сумму второй половины элементов. Вывести на консоль массив, 2 суммы и частное." . "<br>";

$array = [];


for ($i = 0; $i < 8; $i++) {
    $array[] = rand(1, 50); 
}


$firstHalf = array_slice($array, 0, 4);
$secondHalf = array_slice($array, 4);


$sumFirstPart = array_sum($firstHalf);
$sumSecondPart = array_sum($secondHalf);


$quotient = ($sumSecondPart != 0) ? ($sumFirstPart / $sumSecondPart) : 'Ошибка: деление на ноль';

echo "Массив: " . implode(', ', $array) . "<br>";
echo "Сумма первой половины: " . $sumFirstPart . "<br>";
echo "Сумма второй половины: " . $sumSecondPart . "<br>";
echo "Частное: " . $quotient . "<br>" . "<br>";

echo "10. Создать массив из 10 элементов. Заполнить случайными числами от -100 до 100. Подсчитайте количество отрицательных чисел в этом массиве. Вывести на консоль массив и результат проверки." . "<br>";

$array = [];

for ($i = 0; $i < 10; $i++){
    $array[$i] = rand(-100, 100);
}

$count = 0;

foreach($array as $num){
    if($num < 0){
        $count++;
    }
}

foreach($array as $num){
  echo $num . PHP_EOL;
}

echo "<br>";
echo "Всего " . $count . " отрицательных значений." . "<br>" . "<br>";




echo "11. Создать массив из 10 элементов. Заполнить случайными числами от -50 до 50. Оставьте в нем только положительные и четные числа. Вывести на консоль оба массива." . "<br>";

$array = [];
$newArray = [];


for ($i = 0; $i < 10; $i++){
    $array[$i] = rand(-50, 50);
}

foreach($array as $num){
    if($num > 0 || $num % 2 == 0){
        $newArray[] = $num; // Добавляем элемент в массив $newArray
    }
}


foreach($array as $num){
    echo $num . PHP_EOL;
}

echo "<br>";


foreach($newArray as $num){
    echo $num . PHP_EOL;
}

echo "<br>" . "<br>";

echo "12.  Придумать некоторую строку с буквами и цифрами. Получить позицию первой и последный цифры в этой строке (начиная с 1). Вывести на консоль строку и результаты . " . "<br>";

$string = "adc426fkdkdc86ppp";

#false так как указывает на то что цифра ещё не была найдена
$firstDigit = false;
$lastDigit = false;


for($i = 0; $i < strlen($string); $i++){
    if(ctype_digit($string[$i])){
       if($firstDigit === false){
        $firstDigit = $i + 1;
       }

       $lastDigit = $i + 1;
    }
}

echo "Позиция первой цифры: " . ($firstDigit ? $firstDigit : "Цифры не найдены") . "<br>";
echo "Позиция последней цифры: " . ($lastDigit ? $lastDigit : "Цифры не найдены") . "<br>";










?>