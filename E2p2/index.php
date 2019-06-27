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
    private $sold ;
    private $interestRate;
    private $devise;
    public function __construct($newOwner , $newSoldCred , $newRate , $newMoneyDev) {
      $this->accountOwner = $newOwner;
      $this->sold = $newSoldCred;
      $this->interestRate = $newRate;
      $this->devise  =$newMoneyDev;
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

$bankAccount =new BankAccount('jean ' , 12000 , 2 , 'dollar');
$newSold = $bankAccount->add();
?>
 <p> <?= 'le nouveau solde est de ' . $newSold . ' euro';?></p>
 <?php
$newSold = $bankAccount->debit();
?>
<p> <?= 'le nouveau solde est de ' . $newSold . ' euro'; ?></p>


<p> Le titulaire du compte est : <?= $bankAccount->accountOwner();?></p>

<p>Votre solde est de : <?= $bankAccount->sold(); ?> euro</p>

<p>Votre taux d'intêret est de : <?= $bankAccount->interestRate(); ?></p>

<p>La devise de votre pays est l'<?= $bankAccount->devise();?></p>


</body>
</html>
