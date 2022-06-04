@extends('layout.logreg')
@section('title', 'Login')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="/log" method="POST" class="login100-form validate-form">
					@csrf
					<span class="login100-form-title p-b-48">
						<img src="assets/images/logo.png" alt="" width="120">
					</span>
					@if(session()->has('success'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						{{session('success')}}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif

					@if(session()->has('loginError'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						{{session('loginError')}}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" id="username" autofocus required>
						<span class="focus-input100" data-placeholder="Username"></span>
						@error('username')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-50">
						<span class="txt1">
							Belum punya akun?
						</span>

						<a class="txt2" href="/register">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection