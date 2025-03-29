<?php

use App\Stack;

function runTest()
{
    $stack = new Stack(5, 6, 7);
    $temp = '[7->6->5]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;

    $stack->push(8, 9);
    $temp = '[9->8->7->6->5]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;

    $elem = $stack->pop();
    $temp = '[8->7->6->5]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;
    $temp = '9';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $elem = $stack->top();
    $temp = '[8->7->6->5]';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack . PHP_EOL . PHP_EOL;
    $temp = '8';
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $elem = $stack->isEmpty();
    $temp = false;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $stack_null = new Stack();
    $elem = $stack_null->isEmpty();
    $temp = true;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $elem . PHP_EOL . PHP_EOL;

    $temp = new Stack(10, 20, 30);
    $stack_copy = $temp->copy();
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $stack_copy . PHP_EOL . PHP_EOL;

    $result = compareStrings("ab#", "a");
    $temp = true;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $result . PHP_EOL . PHP_EOL;

    $result = compareStrings("ab#", "b");
    $temp = false;
    echo "Ожидается: " . $temp . PHP_EOL;
    echo "Получено: " .  $result . PHP_EOL . PHP_EOL;
}