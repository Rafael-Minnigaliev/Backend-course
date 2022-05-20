<?php

$dbh = new \PDO(
    'mysql:host=localhost;dbname=my_db;',
    'root',
    'root'
);

$dbh->exec('SET NAMES UTF8');

$stm = $dbh->prepare('INSERT INTO users (`email`, `name`) VALUES (:email, :name)');
$stm->execute(['email' => 'x100@php.zone', 'name' => 'Вячеслав']);

$stm = $dbh->prepare('SELECT * FROM `users`');
$stm->execute();

$allUsers = $stm->fetchAll();
?>

<table border="1">
    <tr><td>id</td><td>Имя</td><td>Email</td></tr>
    <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>