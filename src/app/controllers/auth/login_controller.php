<?php

function login($data): bool
{
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $user = getUserByEmailOrUsername($email);

  if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id();
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['email'] = $user['email'];
    header('Location: index.php');
    return true;
  } else {
    $_SESSION['error'] = 'Credentials tidak valid!';
    $_SESSION['flash_time'] = time();
    header('Location: login.php');
    return false;
  }
}
