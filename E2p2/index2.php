<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>BankAccount</title>
    </head>
    <body>
<?php
$accountOwner = array('john'=>1250, 'jane'=>1500,'david'=>12000,'toto'=>1000,'lala'=>5000 );

class BankAccount
{
    private $accountOwner;
    private $sold ;
    private $interestRate;
    private $devise;

    public function __construct($owner , $soldCred ) {
      $this->accountOwner = $owner;
      $this->sold = $soldCred;
      $this->interestRate = 2.3;
      $this->devise  = 'euro';
    }
   public function getAccountOwner(){
     return $this->accountOwner;
   }
   public function getSold(){
     return $this->sold;
   }
   public function getInterestRate(){
     return $this->interestRate;
   }
   public function getDevise(){
     return $this->devise;
   }
  }
  for ( $i =0 ; $i < 1 ; $i++){

 foreach ($accountOwner as $owner => $soldCred ) {
  $i = new BankAccount( $owner , $soldCred);


echo $i -> getAccountOwner();
echo $i -> getSold();
echo $i -> getDevise();
echo $i -> getInterestRate();
  }

  }
?>
    </body>
    </html>
