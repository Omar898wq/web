<?php

require_once 'connect.php';

$name = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');

$errors = [];

if ($name === '') {
    $errors[] = "Name is required.";
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required.";
}

if (!empty($errors)) {
    foreach ($errors as $err){
        echo "<p style='color:red;'>$err</p>";
    }
    echo '<p> <a href ="index.php">Go back</a></p>';
    exit;
}

try {
    $stmt = $pdo->prepare("INSERT INTO message (name, email) VALUES (:name, :email)");

    $stmt->execute([
        ':name' => $name,
        ':email' => $email
    ]);

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>