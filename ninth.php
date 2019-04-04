<?php

$question = <<<QUE
What is the output of the following code?

echo "1" + 2 * "0x02";

A. 1

B. 3

C. 5

D. 20

E: 7

Answer: 

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - A
но в доке написано - C............. i dont know
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);

echo "1" + 2 * "0x02";


