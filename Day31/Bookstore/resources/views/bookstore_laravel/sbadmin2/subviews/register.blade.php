@extends('bookstore_laravel.sbadmin2.layouts.register')

@section('title', 'Register')

@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">

    <div class="card-body p-0">

        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
         @endif
        <!-- Nested Row within Card Body -->
        <div class="row">

            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" name="sblogin" method="post" action="{{url('/backend/sbadmin2/register')}}">

                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">

                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>



                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{--<div class="col-sm-6">--}}
                                {{--<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">--}}
                            {{--</div>--}}
                        </div>

                        <input type="submit" name="submit" value="Register Account" class="btn btn-primary btn-user btn-block">

                        <hr>
                        <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login.html">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
