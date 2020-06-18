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
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mt-2">Verify your email address</h1>
				</div>

					<div class="card-body">
						@if (session('resent'))
							<div class="alert alert-success" role="alert">
								{{ __('A fresh verification link has been sent to your email address.') }}
							</div>
						@endif

						{{ __('Before login, please check your email for a verification link.') }}
						{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
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





