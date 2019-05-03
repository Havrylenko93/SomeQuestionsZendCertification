<?php

$question = <<<'QUE'
What does the __FILE__ constant contain?

A. The filename of the current script.

B. The full path to the current script.

C. The URL of the request made.

D. The path to the main script.

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);

echo  __FILE__;