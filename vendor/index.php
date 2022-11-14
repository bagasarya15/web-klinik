<?php 
require_once '../vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create('id_ID');
$pdo = new PDO('mysql:host=localhost;dbname=db_klinik', 'root', '');

$sql = "INSERT INTO faker(nama) VALUES (?)";
$stmt = $pdo->prepare($sql);

for ($i=0; $i < 10; $i++) {
    $stmt->bindValue(1, $faker->name);
    $stmt->execute();
}
?>