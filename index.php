<?php
require __DIR__ . '/vendor/autoload.php';

$host = 'localhost';
$user = 'saifudin';
$password = 1234;
$dbname = 'dvdrental';

//Set DSN
$dsn = 'pgsql:host=' . $host . ';dbname=' . $dbname;

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

#PRDO Query
// $stmnt = $pdo->query('SELECT * from category');

// while($row = $stmnt->fetch()){
//     echo $row->name.'<br>';
// }

#Prepared statements
$staff_id = 1;
//Positional params
// $sql='SELECT * from rental WHERE staff_id = ?';
// $stmnt = $pdo->prepare($sql);
// $stmnt->execute([$staff_id]);
// $allData = $stmnt->fetchAll();
// foreach($allData as $oneData){
//     echo $oneData->rental_id.' '.$oneData->staff_id. '<br>';
// }

//Named Parameters
// $sql='SELECT * from rental WHERE staff_id = :staff_id';
// $stmnt = $pdo->prepare($sql);
// $stmnt->execute(['staff_id' => $staff_id]);
// $allData = $stmnt->fetchAll();
// foreach($allData as $oneData){
//     echo $oneData->rental_id.' '.$oneData->staff_id. '<br>';
// }
// 
$sql = 'SELECT * from actor';
$stmnt = $pdo->prepare($sql);
$stmnt->execute();
$allData = $stmnt->fetchAll();

?>
