<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

if (isset($_POST['register'])) register($_POST);

?>

<!-- require_once header -->
<?php
$title = 'Register';
require_once __DIR__ . '/src/partials/header.php';
?>
<!-- require_once header -->

<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Create New Account</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="">
            <div class="form-outline mb-4">
              <label class="form-label" for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="username">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="john_doe" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="********" />
            </div>
            <button type="submit" name="register" class="btn btn-primary w-100 mt-3">Sign in</button>
          </form>
        </div>
        <div class="card-footer">
          <div class="col text-center">
            <span>Already registered?
              <a href="login.php">Login now!</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->