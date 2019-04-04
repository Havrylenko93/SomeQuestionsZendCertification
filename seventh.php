<?php

$question = <<<QUE
What super-global should be used to access information about uploaded files via a POST request?

A. \$_SERVER

B. \$_ENV

C. \$_POST

D. \$_FILES

E: \$_GET

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - D
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);