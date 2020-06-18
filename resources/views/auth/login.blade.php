<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Login Page</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
 
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Sign in</h1>
                </div>

                @if(session('warning'))
                  <div class="alert alert-warning">
                    {{ session('warning') }}
                  </div>
                @endif

                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif

                <form class="user" method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group">
                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ old('email') }}" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
									@enderror
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('email') }}">
                    @error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary btn-user btn-block">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                    <div class="text-center">
                      <a class="small" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                    </div>
                    @endif
                </form>

                <div class="text-center">
                  <a class="small" href="{{ url('/register') }}">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>
