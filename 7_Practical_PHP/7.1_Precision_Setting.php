<?php
echo "<pre>"; // Enables viewing of the spaces

// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);

// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);



// Conversion specifier components:
// Start | Conversion | Pad character | Number of pad characters | Display precision | Conversion specifier | Example
// ------|------------|---------------|--------------------------|-------------------|----------------------|---------
// %     |            |               | 15                       |                   | f                    | 10.285000
// %     | 0          |               | 15                       | .2                | f                    | 000000000010.29
// %     | '#'        |               | 15                       | .4                | f                    | ########10.2850
