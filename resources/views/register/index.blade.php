@extends('layout.logreg')
@section('title', 'Register')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="/register" method="POST">
                    @csrf
					<span class="login100-form-title p-b-48">
						<img src="assets/images/logo.png" alt="" width="120">
					</span>

					<div class="wrap-input100" >
						<input class="@error('username') is-invalid @enderror input100" type="text" name="username" id="username">
						<span class="focus-input100" data-placeholder="Username"></span>
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
					</div>

                    <div class="wrap-input100" >
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" id="email">
						<span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
					</div>

					<div class="wrap-input100">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" id="password">
						<span class="focus-input100" data-placeholder="Password"></span>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-40">
						<span class="txt1">
							Sudah punya akun?
						</span>

						<a class="txt2" href="/log">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection