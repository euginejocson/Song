@extends('layouts.app')

@section('style')
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('script')

@endsection

@section('content')

	<div id="layoutAuthentication" >
	            <div id="layoutAuthentication_content">
	                <main>
	                    <div class="container">
	                        <div class="row justify-content-center">
	                            <div class="col-lg-5">
	                                <div class="card shadow-lg border-0 rounded-lg mt-5">
	                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
	                                    <div class="card-body">
	                                        <form method="POST" action="{{ route('login') }}">
										@csrf
	                                            <div class="form-group">
	                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
	                                                <input class="form-control py-4 @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="small mb-1" for="inputPassword">Password</label>
	                                                <input class="form-control py-4  @error('password') is-invalid @enderror" id="inputPassword" name="password" type="password" placeholder="Enter password" />
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="custom-control custom-checkbox">
	                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
	                                                    <label class="custom-control-label" for="rememberPasswordCheck" {{ old('remember') ? 'checked' : '' }}>Remember password</label>
	                                                </div>
	                                            </div>
	                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
	                                                <button class="btn btn-primary" type="submit">Login</button>
	                                            </div>
	                                        </form>
	                                    </div>
	                                    <div class="card-footer text-center">
	                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </main>
	            </div>
	            <div id="layoutAuthentication_footer">
	                <footer class="py-4 bg-light mt-auto">
	                    <div class="container-fluid">
	                        <div class="d-flex align-items-center justify-content-between small">
	                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
	                            <div>
	                                <a href="#">Privacy Policy</a>
	                                &middot;
	                                <a href="#">Terms &amp; Conditions</a>
	                            </div>
	                        </div>
	                    </div>
	                </footer>
	            </div>
	        </div>

@endsection