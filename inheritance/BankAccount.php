<?php

Class BankAccount{
    private $account_name;
    private $account_number;
    private $account_balance;

    # define the constructor
    public function __construct($account_name,$account_number)
    {
        $this->account_name=$account_name;
        $this->account_number=$account_number;
    }


# getters 
# Note:class BankAccount の範囲にすべてのメソッドを含める。メソッドをクラス外に記述するとエラーになるため。
# Note: =+ の順序
public function getAccountName()
{
    return $this->account_name;
}
public function getAccountNumber()
{
    return $this->account_number;
}
public function getAccountBalance()
{
    return $this->account_balance;
}
public function depositAmount($amount)
{
    if($amount > 0){ //check if the amount is grater than 0
        $this->account_balance =+ $amount;
    }
    return $this;
}
}
?>