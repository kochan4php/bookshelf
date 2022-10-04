<?php

function register($data): void
{
  global $pdo;

  $nama = htmlspecialchars($data['name']);
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);
  $password = password_hash($password, PASSWORD_BCRYPT);

  $user = getUserByEmailOrUsername($email, $username);

  if ($user) {
    $_SESSION['error'] = 'User sudah terdaftar';
    $_SESSION['flash_time'] = time();
    header('Location: register.php');
  } else {
    $query = "INSERT INTO pengguna 
      (nama, username, email, password)
      VALUES
      (:nama, :username, :email, :password)
    ";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $_SESSION['success'] = 'Registrasi berhasil, silahkan login!';
    $_SESSION['flash_time'] = time();

    header('Location: login.php');
  };
}
