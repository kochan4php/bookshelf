<?php

function register($data)
{
  global $pdo;

  $name = htmlspecialchars($data['name']);
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $password = password_hash($password, PASSWORD_BCRYPT);

  $query = 'SELECT * FROM pengguna WHERE email = :email OR username = :username';

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!is_null($user)) {
    echo "
      <script>
        alert('User sudah terdaftar');
      </script>
    ";

    header('Location: register.php');
  }
}
