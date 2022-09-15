<!-- require_once header -->
<?php require_once __DIR__ . '/src/partials/auth/header.php' ?>
<!-- require_once header -->

<!-- Background image -->
<div id="auth" class="bg-image shadow-2-strong">
  <div class="mask d-flex align-items-center h-100" id="auth-inner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-md-8">
          <form class="bg-white rounded shadow-5-strong p-3">
            <h1 class="text-center">Login</h1>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
              <input type="email" id="email" name="email" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3">
                    Remember me
                  </label>
                </div>
              </div>

            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block my-2">Sign in</button>

            <div class="col text-center">
              <a href="register.php">Don't have account? Register now!</a>
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