@extends('layouts.login',['title'=>"Login"])

@section('content')
<div class="container-fluid w-100 h-100">
    <div class="container-fluid w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4 ml-auto mr-auto m-top-50">
        <div class="container-fluid text-center">
            <img src="{{ asset('assets/imgs/icon.png') }}" class="w-full  text-center" style="width:40%;" alt=" Logo">
        </div>            
            <div class="card">
                <div class="card-header text-center c-theme-bg">
                    <div class="card-title text-white" style="font-size:17px;">Faculty  <br>
                        Attendance
                        Management System </div>
                    {{-- <small id="emailHelp2" class="form-text  text-white">Login Account</small> --}}
                </div>
                
                <div class="card-body pb-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @error('email')
                        <p class="container text-danger text-center fw-bold pb-1">Wrong Credentials!</p>
                    @enderror
                        @error('password')
                        <p class="container text-danger text-center fw-bold pb-1">Wrong Credentials!</p>
                    @enderror
                 
                        <div class="form-group mb-3 ">
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="py-1 fa-solid fa-envelope"></i></span>
                                </div>
                                    <input id="email" type="email" placeholder="Email" class="form-control " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group mb-3 ">
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="py-1 fa-solid fa-key"></i></span>
                                        </div>
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        
                        
                    <div class="container-fluid text-end">
                        <button type="submit" class="btn btn-info btn-round btn-border float-right my-3 c-theme-border" fdprocessedid="rc31qs">
                            <i class="fa fa-check"></i> LOGIN
                        </button>
                    </div>

                        
                    </form>
                    <hr class="text-success border border-1 border-success">

                    <p class="d-flex justify-content-center align-items-center text-center w-100 " style="font-size: 12px">New Here? <a href="{{route('register')}}" class="ps-1 fw-bold nav-link nav-item text-info">Sign up Here</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
