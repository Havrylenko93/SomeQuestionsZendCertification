<?php

$question = <<<'QUE'
You'd like to use the class MyDBConnection that's defined in the MyGreatFramework\MyGreatDatabaseAbstractionLayer namespace, but you want to minimize *as much as possible* the length of the class name you have to type. What would you do?

A. Import the MyGreatFramework namespace

B. Import the MyGreatFramework\MyGreatDatabaseAbstractionLayer namespace

C. Alias MyGreatFramework\MyGreatDatabaseAbstractionLayer\MyDBConnection to a shorter name

D. Alias MyGreatFramework\MyGreatDatabaseAbstractionLayer to a shorter name

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - C
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);