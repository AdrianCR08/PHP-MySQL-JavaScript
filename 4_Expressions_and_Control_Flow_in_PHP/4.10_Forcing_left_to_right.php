<?php
echo ((1 + 2) * 3 - 4) * 5;
echo "<br>";
echo (2 - 4) * 5 * 3 + 1;
echo "<br>";
echo (5 + 2 - 4 + 1) * 3;

// Write the operator precedence in the comments in form f a table
/*
| Operator      | Description |
|---------------|-------------|
| []            | Array       |
| ->            | Object Operator |
| **            | Exponentiation |
| ++ --         | Increment / Decrement |
| ~ !           | Bitwise Not / Logical Not |
| * / %         | Multiplication / Division / Modulus |
| + - .         | Addition / Subtraction / Concatenation |
| << >>         | Bitwise Shift Left / Right |
| < <= > >=     | Comparison |
| == != === !== | Equality |
| &             | Bitwise And |
| ^             | Bitwise Xor |
| |             | Bitwise Or |
| &&            | Logical And |
| ||            | Logical Or |
| ?:            | Ternary |
| = += -= *= /= .= %= &= |= ^= <<= >>= **= | Assignment |
| and           | Logical And |
| xor           | Logical Xor |
| or            | Logical Or |
*/