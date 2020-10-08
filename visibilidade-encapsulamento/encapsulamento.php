<?php

class BankAccount
{
    public $balance;

    public function deposit($money)
    {
        $this->balance += $money;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function withdraw($money)
    {
        if ($money > $this->balance) {
            return false;
        }
        $this->balance -= $money;
    }
}

$account = new BankAccount();
$account->deposit(100);
// echo $account->getBalance();
$account->withdraw(10);
// echo $account->getBalance();
$account->withdraw(100);
echo $account->getBalance();