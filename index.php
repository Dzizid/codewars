<?php


//README берем строку и каждую цыфру в ней умножаем на неё же, после чего выводим без пробелов
//Например, если мы пропустим через функцию 9119, получится 811181, потому что 9**2 равно 81, а 1**2 равно 1.
/*
function square_digits($num){

    $numbers = str_split($num);

    foreach($numbers as &$number) {
        $number *= $number;
    }

    var_dump(implode($numbers));
}

square_digits(9119);
*/


//README принимаем массив чисел и выводим все значения от минимального до максимального
/*
function pipeFix($numbers) {
    $minim = min($numbers);
    $maxim = max($numbers);
    $fix = [];

    for ($i = $minim; $i <= $maxim; $i++) {
        $fix[] = $i;
    }

    var_dump($fix);
}

pipeFix([1,2,3,5,6,8,9]);
*/

//README считаем овец
/*
function countsheep($num){
    //your code here
    $fix = '';

    for ($i = 1; $i <= $num; $i++) {
        $fix .= $i . ' sheep...';
    }

    var_dump($fix);
}

countsheep(4);
*/

//README переворот слов в переданной строке
/*
function reverseWords($str) {
    // Go for it
    function reverseWords($str) {
        // Go for it
        $reverse = strrev($str);
        $rev = explode(" ", $reverse);
        var_dump($rev);

        $rev_one = array_reverse($rev);
        return implode(' ', $rev_one);
    }
}

reverseWords('The quick brown fox jumps over the lazy dog.');
*/

//README Учитывая строку слов, вам нужно найти слово с наивысшим баллом. .......... Попробуй реализовать сам как видишь
/*Учитывая строку слов, вам нужно найти слово с наивысшим баллом.
  Каждая буква слова оценивается в баллах в соответствии с ее положением в алфавите: a = 1, b = 2, c = 3и т. д.
  Вам нужно вернуть слово с наивысшим баллом в виде строки.
  Если два слова оцениваются одинаково, верните слово, которое появляется первым в исходной строке.
  Все буквы будут строчными, и все входные данные будут действительными.*/
/*function high($x) {

    $alphabet = array_combine(range('a','z'), range(1,26));
    $score = [];
    foreach(explode(' ', $x) as $key => $p) {
        foreach(str_split($p) as $key => $l) {

            $score[$p] += $alphabet[$l];
        }
    }

    return array_search(max($score), $score);
}

high('man i need a taxi up to ubud');*/

//README Даётся значение, требуется вывести каждое значение и перевернуть массив
/*
function reverseSeq ($n) {
    $fo = [];
    for ($i = 1; $i <= $n; $i++) {
        $fo[] = $i;
    }
    var_dump(array_reverse($fo));
};

reverseSeq(5);
*/


//README Напишите программу, которая находит сумму всех чисел от 1 до num. Число всегда будет положительным целым числом больше 0.
/*
function summation ($n) {
    $fo = [];
    for ($i = 1; $i <= $n; $i++) {
        $fo[] = $i;
    }
    $sum = array_sum($fo);
    print $sum;
}

summation(5);
*/

//README Отнимаем разницу массива

/*
 * function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    $s = array_values(array_diff($birds, $geese));
    var_dump($s);
    // return an array containing all of the strings in the input array except those that match strings in geese
}


gooseFilter(["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"]);
*/

//README Создать функцию, которая выполняет четыре основные математические операции.
/*function basicOp($op, $val1, $val2)
{
    switch ($op) {
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '*':
            return $val1 * $val2;
        case '/':
            return $val1 / $val2;
    }
}

var_dump(basicOp('+', 4, 7));*/

//README Массив, каждый символ = числу по расположению в азбуке
/*
function alphabet_position(string $s): string {

    $result = [];

    for ($i = 0; $i < strlen($s); $i++) {

        if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
            $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
        }
    }

    var_dump(join(' ', $result));


}

alphabet_position('The sunset sets at twelve o\' clock.');
*/

//README В математике факториал неотрицательного целого числа n, обозначаемый n!, представляет собой произведение всех положительных целых чисел, меньших или равных n. Например: 5! = 5 * 4 * 3 * 2 * 1 = 120. По соглашению значение 0! 1.
/*function factorial(int $n): int {
    if ($n > 12 || $n < 0) {
        throw new RangeException();
    }
    return $n ? $n * factorial($n - 1) : 1;
}

factorial(4);*/







