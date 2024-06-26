<?php
if (function_exists("array_combine")) {
    echo "Function exists\n";
    # code...
} else {
    echo "Function does not exist\n Better write our own\n";
    # code...
}

echo phpversion();