<?php
printf("There are %d items in you basket", 3);

// Specifier | Conversion action on argument arg | Example (for an arg of 123)
// ---------|-----------------------------------|----------------------------
// %d       | Decimal number                    | 123
// %s       | String                            | "123"
// %f       | Floating-point number             | 123.000000
// %c       | ASCII character                   | "{"
// %b       | Binary number                     | "1111011"
// %o       | Octal number                      | "173"
// %x       | Hexadecimal number (lowercase)    | "7b"
// %X       | Hexadecimal number (uppercase)    | "7B"
// %e       | Scientific notation (lowercase)   | "1.23e+2"
// %E       | Scientific notation (uppercase)   | "1.23E+2"
// %g       | Shorter of %e or %f               | "123"
// %G       | Shorter of %E or %f               | "123"
echo "<br>";
printf("My names is %s. I'm %d years old, which is %X in hexadecimal", 'Simon', 33, 33);

echo "<br>";
printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245);
echo "<br>";

printf("The result is $%.2f", 123.42 / 12);
?>