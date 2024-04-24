@section('title', 'login')
@extends('base')
@section('content')
   <div class="login">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col left-col">
                    <div class="logo">
                        <a href="" class="d-flex align-items-center"><img src="{{url('assets/img/laravel_logo.png')}}" alt="" style="width: 5%"><h1 class="red-color">Laravel</h1></a>
                    </div>
                    <div class="title">
                        <h2>Log in to your Account</h2>
                        <p class="gray-color">Welcome back! Select method to log in:</p>
                    </div>
                    <div class="social">
                        <a href="" class="icon-btn"><img src="{{url('assets/img/icones/google.png')}}" alt="google" style="width: 20px">
                            <span>Google</span>
                        </a>
                        <a href="" class="icon-btn">
                            <img src="{{url('assets/img/icones/facebook.png')}}" alt="facebook" style="width: 20px">
                            <span>Facebook</span>
                        </a>
                        <a href="" class="icon-btn">
                            <img src="{{url('assets/img/icones/github.png')}}" alt="github" style="width: 20px">
                            <span>Github</span>
                        </a>
                    </div>
                    <div class="wrapper">
                        <span class="text gray-color">or continue with email</span>
                    </div>
                    <form action="" method="POST">
                        <input type="text" name="email" id="" placeholder="Email" class="form-control mb-3" >
                        <input type="password" name="password" id="" placeholder="Password" class="form-control mb-3">
                        <div class="mb-3 d-flex justify-content-between">
                            <span>
                                <input type="checkbox" name="remember_me" id="">
                                <label for="" class="gray-color">Remember me</label>
                            </span>
                            <a href="" class="red-color">Forgot password</a>
                        </div>
                        <button type="submit" class="form-control btn">Login</button>
                    </form>
                    <div class="text-center m-5">
                        <span class="gray-color">Don't have an account? <a href="" class="red-color">Create an account</a></span>
                    </div>
                </div>
                <div class="col">
                    <img src="{{url('/assets/img/image_01.png')}}" alt="image" class="img-fluid" style="width: 100%">
                </div>
            </div>
        </div>
   </div>
@endsection