<?php

function login($data)
{
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $user = getUserByEmailOrUsername($email);

  if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id();
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['email'] = $user['email'];
    header('Location: index.php');
  }
}
