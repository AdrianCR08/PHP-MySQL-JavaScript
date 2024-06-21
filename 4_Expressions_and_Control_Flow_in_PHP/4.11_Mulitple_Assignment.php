<?php


/*
| Operator                     | Description                   | Associativity |
|------------------------------|-------------------------------|---------------|
| < <= >= == != === !== <>    | Comparison                    | None          |
| !                            | Logical NOT                   | Right         |
| ~                            | Bitwise NOT                   | Right         |
| ++ --                        | Increment and decrement       | Right         |
| (int)                        | Cast to an integer            | Right         |
| (double) (float) (real)      | Cast to a floating-point number| Right         |
| (string)                     | Cast to a string              | Right         |
| (array)                      | Cast to an array              | Right         |
| (object)                     | Cast to an object             | Right         |
| @                            | Inhibit error reporting       | Right         |
| = += -= *= /=                | Assignment                    | Right         |
| .= %= &= |= ^= <<= >>=       | Assignment                    | Right         |
| +                            | Addition and unary plus       | Left          |
| -                            | Subtraction and negation      | Left          |
| *                            | Multiplication                | Left          |
| /                            | Division                      | Left          |
| %                            | Modulus                       | Left          |
| .                            | String concatenation          | Left          |
| << >> & ^                    | Bitwise                       | Left          |
| ?:                           | Ternary                       | Left          |
| || && and or xor             | Logical                       | Left          |
| ,                            | Separator                     | Left          |
*/

$level = $score = $time = 0;

echo $level;
echo "<br>";    
echo $score; 
echo "<br>";
echo $time;