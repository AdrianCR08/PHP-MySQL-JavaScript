<?php
$bank_balance = 101;
$savings = 0;
if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} else {
    $savings += 50;
    $bank_balance -= 50;
}

echo $bank_balance;
echo "<br>";
echo $savings;
echo "<br>";