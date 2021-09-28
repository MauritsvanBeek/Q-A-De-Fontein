<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "q&a";

$conn = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['question'])) {
    $question = ($_POST['question']);

    $stmt = $conn->prepare("INSERT INTO questions (question) VALUES (:question)");
    $stmt->bindParam(':question', $question);
    $stmt->execute();
}