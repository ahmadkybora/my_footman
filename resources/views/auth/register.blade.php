@extends('layouts.auth.app')
@section('title','register')
{{--@section('styles')--}}
    {{--<link rel="stylesheet" href="{{ asset('/panel/plugin/nprogress/nprogress.css') }}">--}}
{{--@stop--}}
{{--@push('styles')--}}
    {{--<link rel="stylesheet" href="{{ asset('/panel/plugin/nprogress/nprogress.css') }}">--}}
{{--@endpush--}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header"><h3>{{ __('Register') }}</h3></div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <br>
                                    <!----->
                                    <form id="formData" name="formData" method="POST" {{--action="{{route('employees.register')}}"--}} enctype="multipart/form-data">
                                        <div class="row">
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="first_name" name="first-name"
                                                       placeholder="First Name">
                                                <span class="fa fa-user form-control-feedback left"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="text" class="form-control" id="last-name"
                                                       name="last_name"
                                                       placeholder="Last Name">
                                                <span class="fa fa-users form-control-feedback right"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"
                                                       id="username" name="username"
                                                       placeholder="User Name">
                                                <span class="fa fa-user-plus form-control-feedback left"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="email" class="form-control" id="email"
                                                       name="email"
                                                       placeholder="Email">
                                                <span class="fa fa-envelope form-control-feedback right"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="number" class="form-control" id="mobile"
                                                       name="mobile"
                                                       placeholder="Mobile">
                                                <span class="fa fa-mobile form-control-feedback right"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="number" class="form-control" id="home-phone"
                                                       name="home_phone"
                                                       placeholder="Home Phone">
                                                <span class="fa fa-mobile form-control-feedback right"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <select class="select2_single form-control" tabindex="-1" id="sex"
                                                        name="sex">
                                                    <option value="">click your gender</option>
                                                    <option value="1">male</option>
                                                    <option value="0">female</option>
                                                </select>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input class="date-picker form-control" placeholder="dd-mm-yyyy"
                                                       type="text" name="birth" id="birth"
                                                       required="required" onfocus="this.type='date'"
                                                       onmouseover="this.type='date'"
                                                       onclick="this.type='date'" onblur="this.type='text'"
                                                       onmouseout="timeFunctionLong(this)">
                                                {{--<script>--}}
                                                    {{--function timeFunctionLong(input) {--}}
                                                        {{--setTimeout(function () {--}}
                                                            {{--input.type = 'text';--}}
                                                        {{--}, 60000);--}}
                                                    {{--}--}}
                                                {{--</script>--}}
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                <textarea class="form-control" rows="3" name="about_me" id="about-me"
                                                          placeholder="Explain about yourself"></textarea>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                <textarea class="form-control" rows="3" name="address_home" id="address-home"
                                                          placeholder="Explain about yourself"></textarea>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                <input type="file" class="form-control" id="file"
                                                       name="file" onchange="validateImage()"
                                                       placeholder="Password">
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="password" class="form-control" id="password"
                                                       name="password"
                                                       placeholder="Password">
                                                <span class="fa fa-phone form-control-feedback right"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                                <input type="password" class="form-control" id="password-confirmation"
                                                       name="password_confirmation"
                                                       placeholder="Confirmation Password">
                                                <span class="fa fa-phone form-control-feedback right"
                                                      aria-hidden="true"></span>
                                            </div>
                                            <!----->
                                        </div>
                                        <!----->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" onclick="register()">
                                                Register
                                            </button>
                                        </div>
                                        <!----->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script','register')
    {{--<script src="{{asset('/panel/plugin/nprogress/nprogress.js')}}"></script>--}}
    <script src="{{asset('/panel/js/auth/register.js')}}"></script>
{{--@section('scripts')--}}
    {{--<script src="{{asset('/panel/plugin/nprogress/nprogress.js')}}"></script>--}}
    {{--<script src="{{asset('/panel/js/auth/register.js')}}"></script>--}}
{{--@stop--}}
