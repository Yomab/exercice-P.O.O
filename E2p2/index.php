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
    public function _setAccountOwner()
    {
        $this->accountOwner = 'Mr Biniou';
    }

    public function accountOwner() {
      return $this->accountOwner;
    }
    public function _setSold()
    {
        $this->sold = '0';
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
    public function add() {
        $this->sold = $this->sold +1250 ;
        return $this->sold;
    }
    public function debit() {
        $this->sold = $this->sold -500 ;
        return $this->sold;
    }

}

$bankAccount =new BankAccount('Ariel ' , 10000 , 1.9 , 'euros');

?>



<p> Bonjour <?= $bankAccount->accountOwner();?></p>
<p>Vous venez d'ouvrir un compte avec un taux d'intérêt de <?= $bankAccount->interestRate(); ?> %</p>
<p>Vous y avez déposé un montant de <?= $bankAccount->sold(); ?> euros</p>

<?php $newSold = $bankAccount->add(); ?>


<p> <?= 'Vous venez de crédité 1250 euros et le nouveau solde est de ' . $newSold . ' euro';?></p>
<?php
$newSold = $bankAccount->debit();
?>
<p> <?= 'Vous venez de débité 500 euros et le nouveau solde est de ' . $newSold . ' euro'; ?></p>

</body>
</html>
