<!-- require_once header -->
<?php require_once __DIR__ . '/src/partials/auth/header.php' ?>
<!-- require_once header -->

<!-- Background image -->
<div id="auth" class="bg-image shadow-2-strong">
  <div class="mask d-flex align-items-center h-100" id="auth-inner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-md-8">
          <form class="bg-white rounded-5 shadow-5-strong p-3">
            <h1 class="text-center">Register</h1>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="name" id="name" class="form-control" />
              <label class="form-label" for="name">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" id="username" class="form-control" />
              <label class="form-label" for="username">Username</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="email" class="form-control" />
              <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="password" class="form-control" />
              <label class="form-label" for="password">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block my-2">Sign in</button>

            <div class="col text-center">
              <a href="login.php">Have account? Login!</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/auth/footer.php' ?>
<!-- require_once footer -->