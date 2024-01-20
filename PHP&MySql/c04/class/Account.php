<?php
    declare(strict_types = 1);
    class Account {
        public int $number;
        public string $type;
        protected float $balance;

        public function __contruct(int $number, string $type, float $balance = 0.00) {
            $this->number = $number;
            $this->type = $type;        
            $this->balance = $balance;        
        }
        public function deposit(float $amount) {
            $this->balance += $amount;
            return $this->balance;
        }

        public function withdraw(float $amount): float {
            $this->balance -= $amount;
            return $this->balance;
        } 

        public function getBalance(float $amount): float {
            return $this->balance;
        }
    }

    $account = new Account(20148896, 'Savings', 80.00);
?>

<h2><?= $account->type ?> Account</h2>
<p>Previous balance: $<?= $account->getBalance() ?></p>
<p>New balance: $<?= $account->deposit(35.00) ?></p>
