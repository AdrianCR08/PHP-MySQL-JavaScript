<?php // test1.php
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user . '<br>';

$var = 1;
if ($var == 1) {
    echo 'true' . '<br>';
} else {
    echo 'false';
}


/*
-> Variable names, after the dollar sign, must start with a letter of the alphabet or the _ (underscore) character
-> Variable names can contain only the characters a-z, A-Z, and _ (underscore)
-> Vairable names may not contain spaces. If a variable name must comprise more that one word, a good idea is to separate the words _ (underscore ) character
($user_name)
-> Variable names are case_sensitive. The variable $High_Score is not the same as the varible $high_score

*/

/*
PHP supports two types of string that are denoted by the type of quotation mark that you use.
If you wish to assign a literal string, preserving the exact contents, you should usse single quotation marks (apostrophes), like this:
$info = 'preface' variables with a $ like this: $variable;

On the other hand, when you want to include the value of a variable inside a string, you do so by using double-quoted strings:
echo "This week" $count people have viewd your profile";

As you will realize, this syntax also offers a simpler option to concatenation in which
you don’t need to use a period, or close and reopen quotes, to append one string to
another. This is called variable substitution, and some programmers use it extensively,
whereas others don’t use it at all.
*/


