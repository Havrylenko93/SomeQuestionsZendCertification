<?php
$question = <<<'QUE'
How should you track errors on your production website?

A. Enabling display_errors

B. Enabling log_errors

C. Having a site-wide exception handler

D. Setting error_reporting to E_ALL & ~E_NOTICE

QUE;

$answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - B
__________________________________________________________________________________________________________________

ANSW;

echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);