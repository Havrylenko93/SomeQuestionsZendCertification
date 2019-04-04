<?php

$question = <<<QUE
Which of the following are valid identifiers? (Choose 3)

A. function 4You() { }

B. function _4You() { }

C. function object() { }

D. $1 = "Hello";

E: \$_1 = "Hello World";

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answers are - B, C, E

the name of function cannot be started from digit 
the name of function cannot be number   
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);
