<?php

$question = <<<QUE
What is the output of the following code?

\$a = 'a'; \$b = 'b';

echo isset(\$c) ? \$a.\$b.\$c : (\$c = 'c').'d';

A. abc

B. cd

C. 0d

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);