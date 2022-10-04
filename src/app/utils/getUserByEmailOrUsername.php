<?php

function getUserByEmailOrUsername(string $email = '', string $username = '')
{
  global $pdo;

  $query = 'SELECT * FROM pengguna WHERE email = :email OR username = :username';

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  return $user;
}
