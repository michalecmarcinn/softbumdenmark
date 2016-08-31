<?php
require_once("./db.inc.php");

$stmt = $db->getConnection()->prepare(
    "INSERT INTO product(`name`, `quantity`, `color`, `size`, `fullname`, `email`, `address`, `phone`, `comments`)
	VALUES(:name, :quantity, :color, :size, :fullname, :email, :address, :phone, :comments)");
$params = array(
    ':name' => $_POST['name'],
    ':quantity' => $_POST['quantity'],
    ':color' => $_POST['color'],
    ':size' => $_POST['size'],
    ':fullname' => $_POST['fullname'],
    ':email' => $_POST['email'],
    ':address' => $_POST['address'],
    ':phone' => $_POST['phone'],
    ':comments' => $_POST['comments']
);

try {
    $stmt->execute($params);
} catch (PDOException $e) {
    echo $e->getMessage();
}
header('Location: ' . $db->sitename . '/?completed');
