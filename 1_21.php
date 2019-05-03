<?php

$question = <<<'QUE'
When would you use classes and when would you use namespaces?

A. Use classes to encapsulate code and represent objects, and namespaces to avoid symbol name collisions

B. Use classes for performance-sensitive code, and namespaces when readability matters more

C. Use namespaces for performance-sensitive code, and classes when readability matters more

D. Always use them; namespaces are always superior to classes

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - A
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);