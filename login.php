<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

if (isset($_POST['login'])) login($_POST);

if (isset($_SESSION['success'])) {
  if (time() - $_SESSION['flash_time'] > 1) {
    unset($_SESSION['success']);
    unset($_SESSION['flash_time']);
  }
};

?>

<!-- require_once header -->
<?php
$title = 'Login';
require_once __DIR__ . '/src/partials/header.php';
?>
<!-- require_once header -->

<div class="container my-4">
  <?php if (isset($_SESSION['success'])) : ?>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $_SESSION['success'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Login your account</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" />
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="********" />
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" />
              <label class="form-check-label" for="remember">
                Remember me
              </label>
            </div>
            <!-- Submit button -->
            <button type="submit" name="login" class="btn btn-primary w-100 mt-3">Sign in</button>
          </form>
        </div>
        <div class="card-footer">
          <div class="col text-center">
            <span>Don't have account?
              <a href="register.php">Register now!</a>
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