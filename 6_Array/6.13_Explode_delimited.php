<?php
$temp = explode('***', "This***is***a***sentence***with***seven words");
print_r($temp);

// Another usefull function is the extract() function. It is used to import variables from an array into the current symbol table.

// If any extraced variable already exists, it will be overwritten, to avoid this use the EXTR_PREFIX_ALL or EXTR_PREFIX_INVALID flags.

// Example:
extract(_$_GET, EXTR_PREFIX_ALL, 'formget');

// This will import all variables from the $_GET array into the current symbol table, prefixing each with 'formget_'.

// The EXTR_PREFIX_ALL flag will prefix all variable names, while the EXTR_PREFIX_INVALID flag will only prefix invalid or numeric variable names.

