<?php

$question = <<<QUE
What is the output of the following code?

echo "22" + "0.2", 23 . 1;

A. 220.2231

B. 22.2231

C. 22.2,231

D. 56.2

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B
first argument  : "22" + "0.2" = 22.02
second argument : 23 . 1 = 231
result: 22.2231
// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);



echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.';
