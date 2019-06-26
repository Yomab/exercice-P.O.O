<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>BankAccount</title>
    </head>
    <body>
<?php
class BankAccount
{
    private $accountOwner;
    private $sold = 1000;
    private $interestRate;
    private $devise;
    public function __construct() {
    }
    public function add() {
        $this->sold = $this->sold +250 ;
        return $this->sold;
    }
    public function debit() {
        $this->sold = $this->sold -250 ;
        return $this->sold;
    }
    public function _setAccountOwner()
    {
        $this->accountOwner = 'Mr Biniou';
    }

    public function accountOwner() {
      return $this->accountOwner;
    }
    public function _setSold()
    {
        $this->sold = '1000';
    }

    public function sold() {
      return $this->sold;
    }

    public function _setInterestRate()
    {
        $this->interestRate = '1,9%';
    }

    public function interestRate() {
      return $this->interestRate;
    }

    public function _SetDevise()
    {
        $this->devise = 'euro';
    }

    public function devise() {
      return $this->devise;
    }
}

$bankAccount =new BankAccount();
$newSold = $bankAccount->add();
echo 'le nouveau solde est de ' . $newSold ;

$newSold = $bankAccount->debit();
echo 'le nouveau solde est de ' . $newSold;



$bankAccount->_setAccountOwner();
echo $bankAccount->accountOwner();

$bankAccount->_setSold();
echo $bankAccount->sold();

$bankAccount->_setInterestRate();
echo $bankAccount->interestRate();

$bankAccount->_setdevise();
echo $bankAccount->devise();

?>
</body>
</html>
