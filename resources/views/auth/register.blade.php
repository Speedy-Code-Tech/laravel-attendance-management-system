@extends('layouts.login',['title'=>"Register"])
@section('content')

<div class="container-fluid w-100 h-100">
    <div class="container-fluid w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4 ml-auto mr-auto m-top-50">
        <div class="container-fluid text-center">
            <img src="{{ asset('assets/imgs/icon.png') }}" class="w-full  text-center" style="width:50%;" alt=" Logo">
        </div>            
            <div class="card">
                <div class="card-header text-center c-theme-bg">
                    <div class="card-title text-white" style="font-size:17px;">Faculty  <br>
                        Attendance
                        Management System
                    <hr class="px-3">
                        Register
                </div>
                    {{-- <small id="emailHelp2" class="form-text  text-white">Login Account</small> --}}
                </div>
                
                <div class="card-body pb-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      
                        <div class="form-group mb-3 ">
                            
                            <div class="input-group d-flex flex-column">
                                <p class="mb-0 fw-bold">Name</p>
                                    <input id="name" type="text" placeholder="Name" class="form-control w-100 " class="form-control @error('username') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="form-group mb-3 ">
                            
                            <div class="input-group d-flex flex-column">
                                <p class="mb-0 fw-bold">Email</p>
                                    <input id="email" type="email" placeholder="Email" class="form-control w-100 " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="form-group mb-3 ">
                            
                            <div class="input-group">
                                <div class="input-group d-flex flex-column">
                                    <p class="mb-0 fw-bold">Password</p>
                                        <input id="password" type="password" placeholder="Password" class="form-control w-100 " class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" autofocus>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            
                            <div class="input-group">
                                <div class="input-group d-flex flex-column">
                                    <p class="mb-0 fw-bold">Confirm Password</p>
                                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control w-100 " class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        
                        
                    <div class="container-fluid text-end">
                        <button type="submit" class="btn btn-info btn-round btn-border float-right my-3 c-theme-border" fdprocessedid="rc31qs">
                            <i class="fa fa-check"></i> Register
                        </button>
                    </div>

                        
                    </form>
                    <hr class="text-success border border-1 border-success">

                      <p class="d-flex justify-content-center align-items-center text-center w-75 " style="font-size: 12px">Already have an Account? <a href="{{route('login')}}" class="ps-1 fw-bold nav-link nav-item text-info">Sign in Here</a></p>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection