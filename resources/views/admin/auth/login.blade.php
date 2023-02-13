@extends('admin.layout.auth')
@section('title', 'Admin Login')
@section('form')
<div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
    <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
      <!-- Form -->
      <form class="js-validate needs-validation" novalidate action="{{ route('admin.auth.login.handle') }}" method="POST">
        @csrf
        <div class="text-center">
          <div class="mb-5">
            <h1 class="display-5">Sign in</h1>
          </div>
        </div>

        <!-- Form -->
        <div class="mb-4">
          <label class="form-label" for="signinSrEmail">Your email</label>
          <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required>
          <span class="invalid-feedback">Please enter a valid email address.</span>
        </div>
        <!-- End Form -->

        <!-- Form -->
        <div class="mb-4">
          <label class="form-label w-100" for="signupSrPassword" tabindex="0">
            <span class="d-flex justify-content-between align-items-center">
              <span>Password</span>
              <a class="form-label-link mb-0" href="/admin/auth/forgot-password">Forgot Password?</a>
            </span>
          </label>

          <div class="input-group input-group-merge" data-hs-validation-validate-class>
            <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                     "target": "#changePassTarget",
                     "defaultClass": "bi-eye-slash",
                     "showClass": "bi-eye",
                     "classChangeTarget": "#changePassIcon"
                   }'>
            <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
              <i id="changePassIcon" class="bi-eye"></i>
            </a>
          </div>

          <span class="invalid-feedback">Please enter a valid password.</span>
        </div>
        <!-- End Form -->

        <!-- Form Check -->
        <div class="form-check mb-4">
          <input class="form-check-input" name="remember" type="checkbox" value="true" id="termsCheckbox">
          <label class="form-check-label" for="termsCheckbox">
            Remember me
          </label>
        </div>
        <!-- End Form Check -->

        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>

@endsection