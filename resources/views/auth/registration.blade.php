@include('layouts.master1')

<body class="hold-transition register-page">

<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Afro</b>Save</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="/signup" method="post">
           {{csrf_field() }}
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First name" name="first_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         @if($errors->has('first_name'))
        <span class=" text-danger ">
            {{ $errors->first('first_name') }}
        </span>
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last name" name="last_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         @if($errors->has('last_name'))
        <span class=" text-danger ">
            {{ $errors->first('last_name') }}
        </span>
        @endif
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
         @if($errors->has('email'))
        <span class=" text-danger ">
            {{ $errors->first('email') }}
        </span>
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Phone number" name="phone_number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
         @if($errors->has('phone_number'))
        <span class=" text-danger ">
            {{ $errors->first('phone_number') }}
        </span>
        @endif
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         @if($errors->has('password'))
        <span class=" text-danger ">
            {{ $errors->first('password') }}
        </span>
        @endif
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="/log" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
