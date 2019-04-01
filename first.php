<?php

$question = <<<QUE
What is the output of the following code? 

echo '1' . (print '2') + 3;

A. 123

B. 213

C. 142

D. 214

E: Syntax error
QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - D
__________________________________________________________________________________________________________________

step 1:
 - will be executed "print" statement, will be printed "2". result: "2"
step 2: 
 - string "1" will be concatenated with result of "print" statement 
        ("print" is not a function. print is statement that always returns 1) result: "211"
step 3: 
- at now we have '211' + 3. result: 211 +3 = 214



ANSW;

echo nl2br($question);
echo nl2br(PHP_EOL);
echo nl2br($answer);
