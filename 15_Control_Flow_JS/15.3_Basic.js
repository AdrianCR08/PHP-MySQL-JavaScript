day_number = 127;
days_to_new_year = 366 - day_number;
if(days_to_new_year < 30) 
    document.write("It's nearly New Year");
else
    document.write("It's a long time to go");
/*
JavaScript Operator Precedence Table (High to Low)

Precedence | Operator Type         | Operators                          | Description
---------------------------------------------------------------------------------------------------
1          | Grouping              | ()                                 | Parentheses
2          | Member Access         | .                                  | Property/member access
           | Computed Member Access| []                                 | Property/member access via index
           | new (with argument)   | new Constructor()                  | Creating an instance
3          | Function Call         | ()                                 | Function call
           | new (without argument)| new Constructor                    | Creating an instance
4          | Postfix Increment     | ++                                 | Postfix increment
           | Postfix Decrement     | --                                 | Postfix decrement
5          | Logical NOT           | !                                  | Logical NOT
           | Bitwise NOT           | ~                                  | Bitwise NOT
           | Unary Plus            | +                                  | Unary plus
           | Unary Negation        | -                                  | Unary negation
           | Prefix Increment      | ++                                 | Prefix increment
           | Prefix Decrement      | --                                 | Prefix decrement
           | typeof                | typeof                             | Type of operand
           | void                  | void                               | Discards expression's return value
           | delete                | delete                             | Deletes an object's property
6          | Exponentiation        | **                                 | Exponentiation
7          | Multiplication        | *                                  | Multiplication
           | Division              | /                                  | Division
           | Modulus               | %                                  | Remainder
8          | Addition              | +                                  | Addition
           | Subtraction           | -                                  | Subtraction
9          | Bitwise Shift         | <<, >>, >>>                        | Bitwise shift operators
10         | Relational            | <, <=, >, >=                       | Relational operators
           | in                    | in                                 | Property in object
           | instanceof            | instanceof                         | Instance of object
11         | Equality              | ==, !=, ===, !==                   | Equality operators
12         | Bitwise AND           | &                                  | Bitwise AND
13         | Bitwise XOR           | ^                                  | Bitwise XOR
14         | Bitwise OR            | |                                  | Bitwise OR
15         | Logical AND           | &&                                 | Logical AND
16         | Logical OR            | ||                                 | Logical OR
17         | Conditional           | ?:                                 | Conditional (ternary) operator
18         | Assignment            | =, +=, -=, *=, /=, %=, **=, &=, ^=, |=, <<=, >>=, >>>= | Assignment operators
19         | Comma                 | ,                                  | Comma operator

Note: This table is a simplified representation and does not cover all operators. For a comprehensive list, refer to the ECMAScript specification.
*/