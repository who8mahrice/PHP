<?php 
    include 'class\Account.php';
    include 'class\Customer.php';

    $accounts = 
    [
        new Account(20489446, 'Checking', -20),
        new Account(20148896, 'Savings', 380)
    ];

    $customer = new Customer('Ivy','Stone','ivy@eg.link', 'Jup!t4r2684', $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du Ma</title>
</head>
<body>
    <h2>Name: <b><?= $customer->getFullName() ?></b></h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Accout Type</th>
            <th>Balance</th>
        </tr>
        <?php foreach ($customer->accounts as $account) { ?>
            <tr>
                <td><?= $account->number ?></td>
                <td><?= $account->type ?></td>
                <?php if ($account->getBalance() >=0)  { ?>
                    <td class="credit"><b>You got MONIES!!!!!</br></td>
                <?php } else { ?> 
                    <td class="overdrawn"><b>You BROKE @$$ !</br></td>
                <?php } ?>
                $<?= $account->getBalance() ?></td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>