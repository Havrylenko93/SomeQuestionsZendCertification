<?php

$question = <<<QUE
What is the difference between "print" and "echo"?

A. There is no difference.

B. Print has a return value, echo does not

C. Echo has a return value, print does not

D. Print buffers the output, while echo does not

E: None of the above

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B

The major differences to echo are that print only accepts a single argument and always returns 1.
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);