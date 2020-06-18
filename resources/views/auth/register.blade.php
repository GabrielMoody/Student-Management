<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Register Page</title>

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
                  <h1 class="h4 text-gray-900 mb-4">Create an account!</h1>
                </div>

                <form class="user" method="POST" action="{{ route('register') }}">
                  @csrf

                  <div class="form-group">
                  <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" autofocus>
                  @error('name')
                    <span class="invalid-feedback">
                      <strong>{{ $message }}</strong>
                    </span>
									@enderror
									</div>
									
                  <div class="form-group">
                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ old('email') }}">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
									@enderror
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                    @error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"> 
                    @error('password_confirmation')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
                  </div>

                  <button type="submit" class="btn btn-primary btn-user btn-block">{{ __('Register') }}</button>

                  <div class="text-center mt-2">
                    <a class="small" href="{{ url('/login') }}">Already have an Account?</a>
                  </div>

                </form>
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
