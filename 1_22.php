<?php

$question = <<<'QUE'
Which of these elements can be encapsulated by namespaces and made accessible from the outside?

A. Only classes

B. Classes, functions and constants

C. Classes, functions, constants and variables

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);
