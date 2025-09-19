<?php

#Encapsulation

class BankAcc{
    private $balance =0;

    public function depositMoney($amt) {
        if($amt>0){
            $this->balance+=$amt;
        }
        else{
            echo "Invalid deposit amount <br>";
        }
    }

    public function withdrawMoney($amt) {
        if($amt>0 && $amt<=$this->balance){
            $this->balance-=$amt;

            echo "Withdrawn money is $ {$amt} <br>";
        }
        else{
            echo "Invalid money withdrawl request <br>";
        }
    }

    public function getBalance(){
        return $this->balance;
    }
}

$acc_holder1 = new BankAcc();

$acc_holder1->depositMoney(1000);

$acc_holder1->getBalance();

$acc_holder1->withdrawMoney(300);

$acc_holder1->getBalance();

$acc_holder1->withdrawMoney(400);

$acc_holder1->getBalance();