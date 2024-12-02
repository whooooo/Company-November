<?php

include 'BankAccount.php';

# inharit BankAccount using 'extends'
class Account1 extends BankAccount{
    private $interest_rate;
    private function emailAccount()
    {
        return "john.doe@gmail.com";
    }
    public function getEmailAccount()
    {
        return $this->emailAccount();
    }
    public function setInterestRate($interest_rate)
    {
        $this->interest_rate=$interest_rate;
    }
    public function addInterestRate()
    {
        # caluculate
        $interest=$this->interest_rate*$this->getAccountBalance();
        $this->depositAmount($interest);
    }
}

# outside the class
$account_obj=new Account1("John Doe","0122-3254-1000");

echo "Account Name: " . $account_obj->getAccountName() . "<br>";
echo "Account Number: " . $account_obj->getAccountNumber() . "<br>";
$account_obj->depositAmount(500);
$account_obj->setInterestRate(0.05);
$account_obj->addInterestRate();
echo "Balance: " . $account_obj->getAccountBalance() . "<br>";
echo "Emil Adress: " . $account_obj->getEmailAccount() . "<br>";
?>