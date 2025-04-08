<?php

// skapa separata klasser för varje fel som kan inträffa
class NotEnoughBalanceException extends Exception
{
}
class TooLargeDepositException extends Exception
{
}
class BankAccount
{
  public $saldo;

  function deposit($amount)
  {
    $this->saldo = $this->saldo + -$amount;
  }
  function getBalance()
  {
    return $this->saldo;
  }
  function withdraw($amount)
  {
    if ($amount > $this->saldo) {
      throw new NotEnoughBalanceException("Belopp större än saldo");
    }
    if ($amount > 3000) {
      throw new TooLargeDepositException("Belopp större än 3000 kr");
    }
  }
}

$bankAccount = new BankAccount();
$bankAccount->deposit(5000);
try {
  $bankAccount->withdraw(6000);
} catch (NotEnoughBalanceException $e) {
  echo "" . $e->getMessage() . "";
}