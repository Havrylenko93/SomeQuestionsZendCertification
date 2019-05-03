<?php

$question = <<<QUE
What is the result of the following bitwise operation in PHP?

1 ^ 2    

A. 1

B. 3

C. 2

D. 4

E: -1

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

B
1 = 01
2 = 11
    --
    11 = 3
    
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);