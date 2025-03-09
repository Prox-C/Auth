<!-- Login Modal -->
<div class="modal fade" tabindex="-1" id="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form method="POST" action="redirect.php">
          <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input name="pass" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Password</label>
          </div>
          <input name="login" class="w-100 mb-2 btn btn-lg rounded-pill bg-black text-white" type="submit" value="Login">
          <small class="text-body-secondary text-center d-block">
            Don't have an account? 
            <a class="txt-pri" data-bs-target="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Sign up</a>
          </small>
        </form> 
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" tabindex="-1" id="registerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Create an account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form method="POST" action="index.php">
          <label class="form-label fw-semibold">Personal Information</label>
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input name="fname" type="text" class="form-control rounded-3" id="floatingInput"placeholder="First name" required>
                <label for="floatingInput">First name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input name="lname" type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Last name</label>
              </div>
            </div>
          </div>
          <label for="" class="form-label fw-semibold">Contact Details</label>
          <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control rounded-3" id="floatingInput" placeholder="Email" required>
            <label for="floatingPassword">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input name="pass" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input name="pass2" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Confirm Password</label>
          </div>
          <input role="button" href="" name="register" class="w-100 mb-2 btn btn-lg rounded-pill bg-black text-white" type="submit" value="Register">
          <small class="text-body-secondary text-center d-block">
            Already have an account? 
            <a class="text-primary" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Sign in</a>
          </small>
        </form> 
      </div>
    </div>
  </div>
</div>
