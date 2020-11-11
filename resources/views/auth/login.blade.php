@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div>
                        <a class="hiddenanchor" id="signup"></a>
                        <a class="hiddenanchor" id="signin"></a>

                        <div class="login_wrapper">
                            <div class="animate form login_form">
                                <section class="login_content">
                                    <form action="" method="POST" name="formData" id="formData">
                                        <h1>Login Form</h1>
                                        <div>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="" />
                                        </div>
                                        <div>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
                                        </div>
                                        <div>
                                            <button class="btn btn-success" onclick="login()">submit</button>
                                        </div>
                                        <div>
                                            <a class="btn btn-default submit" href="index.html">Log in</a>
                                            <a class="reset_pass" href="#">Lost your password?</a>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="separator">
                                            <p class="change_link">New to site?
                                                <a href="#signup" class="to_register"> Create Account </a>
                                            </p>

                                            <div class="clearfix"></div>
                                            <br />

                                            <div>
                                                <h1><i class="fa fa-paw"></i> Footman!</h1>
                                                <p>©2020 All Rights Reserved. Privacy and Terms</p>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script','login')
<script src="{{asset('/panel/js/auth/login.js')}}"></script>
