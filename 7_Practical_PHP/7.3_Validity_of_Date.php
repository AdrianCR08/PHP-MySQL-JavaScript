<?php
$month = 9;
$day = 31;
$year = 2025;

if (checkdate($month, $day, $year)) echo  "Date is valid";
else echo "Date is invalid";

// Date Function Format Specifiers Table
/*
+------------------+---------------------------------+---------------------------+
| Specifier        | Description                     | Returns Value             |
+------------------+---------------------------------+---------------------------+
| Day Specifiers   |                                 |                           |
| d                | Day of the month, 2 digits      | 01 to 31                  |
| D                | A textual representation of a   | Mon through Sun           |
|                  | day, three letters              |                           |
| j                | Day of the month without        | 1 to 31                   |
|                  | leading zeros                   |                           |
| l (lowercase 'L')| A full textual representation   | Sunday through Saturday   |
|                  | of the day of the week          |                           |
+------------------+---------------------------------+---------------------------+
| Week Specifiers  |                                 |                           |
| W                | ISO-8601 week number of year    | Example: 42 (the 42nd week|
|                  |                                 | in the year)              |
+------------------+---------------------------------+---------------------------+
| Month Specifiers |                                 |                           |
| F                | A full textual representation   | January through December  |
|                  | of a month                      |                           |
| m                | Numeric representation of a     | 01 to 12                  |
|                  | month, with leading zeros       |                           |
| M                | A short textual representation  | Jan through Dec           |
|                  | of a month, three letters       |                           |
| n                | Numeric representation of a     | 1 to 12                   |
|                  | month, without leading zeros    |                           |
+------------------+---------------------------------+---------------------------+
| Year Specifiers  |                                 |                           |
| Y                | A full numeric representation   | Examples: 1999 or 2025    |
|                  | of a year, 4 digits             |                           |
| y                | A two digit representation of a | Examples: 99 or 25        |
|                  | year                            |                           |
+------------------+---------------------------------+---------------------------+
| Time Specifiers  |                                 |                           |
| a                | Lowercase Ante meridiem and     | am or pm                  |
|                  | Post meridiem                   |                           |
| A                | Uppercase Ante meridiem and     | AM or PM                  |
|                  | Post meridiem                   |                           |
| g                | 12-hour format of an hour       | 1 to 12                   |
|                  | without leading zeros           |                           |
| G                | 24-hour format of an hour       | 0 to 23                   |
|                  | without leading zeros           |                           |
| h                | 12-hour format of an hour with  | 01 to 12                  |
|                  | leading zeros                   |                           |
| H                | 24-hour format of an hour with  | 00 to 23                  |
|                  | leading zeros                   |                           |
| i                | Minutes with leading zeros      | 00 to 59                  |
| s                | Seconds, with leading zeros     | 00 to 59                  |
+------------------+---------------------------------+---------------------------+
*/

$month = 9; // September (only has 3o days)
$day = 31; // 31st
$year = 2025; // 2025

if (checkdate($month, $day, $year)) echo "Date is valid";
else echo  "Date is invalid";



