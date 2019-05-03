<?php

namespace {

    $question = <<<'QUE'
What would be the output of the following code?

namespace MyFramework\DB;

class MyClass {

static function myName() {

return __METHOD__;

}

}

print MyClass::myName();

A. MyFramework\DB\myName

B. MyFramework\DB\MyClass\myName

C. MyFramework\DB\MyClass::myName

D. MyClass::myName

QUE;

    $answer = <<<ANSW
__________________________________________________________________________________________________________________

the correct answer is - C
__________________________________________________________________________________________________________________

ANSW;

    echo nl2br($question) . nl2br(PHP_EOL) . nl2br($answer);
}

namespace MyFramework\DB {

    class MyClass
    {
        public static function myName()
        {
            return __METHOD__;
        }

        public function myMethod()
        {
            return __METHOD__;
        }
    }

    $x = new MyClass();

    print 'static = ' . MyClass::myName() . nl2br(PHP_EOL);
    print 'object = ' . $x->myMethod() . nl2br(PHP_EOL);
}
