<?php
if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} else if ($bank_balance > 200){
    $savings += 100;
    $bank_balanace -= 100;
} else {
    $savings += 50;
    $bank_balance -= 50;
}