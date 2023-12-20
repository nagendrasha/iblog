@extends('admin.main')
@section('content')
<div class="container-fluid bg-dark" style="height: 100vh;">
	<div class="conatainer">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-4 mt-5 card p-5">
				<h2>Sign In Now</h2>
				@if(Session::get('status'))
				<div class="alert alert-secondary" role="alert">
					A simple secondary alert—check it out!
				</div>
				@endif
				<form action="login" method="POST">
					@csrf
					<input class="form-control mb-3" type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
					<input class="form-control mb-3" type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
					<span><input type="checkbox" />Remember Me</span>
					<h6><a href="#">Forgot Password?</a></h6>
					<div class="clearfix"></div>
					<input class="btn btn-success w-50" type="submit" value="Sign In">
					<!-- <button type="submit">SignIn</button> -->
				</form>
				<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
			</div>
		</div>
	</div>
</div>

@endsection