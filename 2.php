<?php

$question = <<<QUE
What is the output of the following code?

\$a = 3;

switch (\$a) {

case 1: echo 'one'; break;

case 2: echo 'two'; break;

default: echo 'four'; break;

case 3: echo 'three'; break;

}

A. one

B. two

C. three

D. four
QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - C
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);

$a = 3;

switch ($a) {
    case 1: echo 'one'; break;

    case 2: echo 'two'; break;

    default: echo 'four'; break;

    case 3: echo 'three'; break;
}



echo '<br/><br/><br/><br/><br/>' . 'Ебобо вариант switch с ;' . '<br/>';

$topchick =  <<<ebobo
switch (\$a) {
    case 1; echo 'one'; break;

    case 2; echo 'two'; break;

    default; echo 'four'; break;

    case 3; echo 'three'; break;
}
ebobo;
echo nl2br($topchick);