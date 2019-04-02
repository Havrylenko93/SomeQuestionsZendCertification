<?php

$question = <<<QUE
Which of the following may be used in conjunction with CASE inside a SWITCH statement?

A. A scalar

B. An expression

C. A boolean

D. All of the above

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - D
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);

$x = 2;

// "continue" used instead "break"
switch ($x)
{
    case true: echo 'boolka'; continue; // bool
    case 2*1: echo 'expression'; continue; // expression
    case 'h': echo 'string (scalar)'; continue; // scalar
}