<?php

$question = <<<QUE
What is the output of the following code?

\$first = "second";

\$second = "first";

echo $$\$first;

A. "first"

B. "second"

C. an empty string

D. an error

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);


$first = "second";

$second = "first";

echo $$$first;