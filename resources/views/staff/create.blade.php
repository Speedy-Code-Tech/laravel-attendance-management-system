@extends('layouts.main', ['title' => 'Admin - Staff'])
@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('assets/imgs/icon.png') }}" style="width: 70px; height:auto;" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Hola!</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Employee
            </div>



            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item p-0 ps-3 active fw-bold">
                <p class="nav-link p-3 pb-0  m-0">
                    <a href="{{ route('staff.index') }}" class="nav-item nav-link p-0 m-0">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Staff</span>
                    </a>
                </p>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Attendance
            </div>



            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item p-0 ps-3">
                <p class="nav-link p-3 pb-0  m-0">
                    <a href="{{ route('attendance.staff.index') }}" class="nav-item nav-link p-0 m-0">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Attendance Logs</span>
                    </a>
                </p>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="fas fa-fw fa-sign-out text-danger"></i>
                    <span>Logout</span>

                </a>




            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">

                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('assets/imgs/undraw_profile.svg') }}">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Create new Staff - <span id="myid" name="myid"
                                class="text-info">{{ $myId }}</span></h1>

                        @if (Session::has('msg'))
                            <div>
                                <div class="container-fluid">
                                    <div style="width: 300px;" class="alert alert-danger text-bold">
                                        {{ Session::get('msg') }}</div>
                                </div>

                            </div>
                        @endif
                    </div>
                    <div class="container bg-white p-2">
                        <form action="{{ route('staff.store') }}" method="post">
                            @csrf
                            <div class="row p-3 pb-0">
                                <div class="col d-flex gap-5">
                                    <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                        <div class="conatiner-fluid text-start">
                                            <label for="firstname"
                                                class="text-start col-form-label text-md-end pb-1 fw-bold">First
                                                Name</label>

                                        </div>
                                        <div class="col">
                                            <input id="firstname" placeholder="John" type="firstname"
                                                class="form-control @error('firstname') is-invalid @enderror"
                                                name="firstname" required autocomplete="firstname"
                                                value="{{ old('firstname') }}">

                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                        <div class="conatiner-fluid text-start">
                                            <label for="middlename"
                                                class="text-start col-form-label text-md-end pb-1 fw-bold">Middle
                                                Name</label>

                                        </div>
                                        <div class="col">
                                            <input id="middlename" placeholder="Dela Cruz" type="text"
                                                class="form-control @error('middlename') is-invalid @enderror"
                                                name="middlename" required autocomplete="middlename"
                                                value="{{ old('middlename') }}">

                                            @error('middlename')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                        <div class="conatiner-fluid text-start">
                                            <label for="lastname"
                                                class="text-start col-form-label text-md-end pb-1 fw-bold">Last
                                                Name</label>

                                        </div>
                                        <div class="col">
                                            <input id="lastname" placeholder="Doe" type="text"
                                                class="form-control @error('lastname') is-invalid @enderror"
                                                name="lastname" required autocomplete="lastname"
                                                value="{{ old('lastname') }}">

                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="row p-3 pb-0">
                                <div class="col d-flex gap-5">
                                    <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                        <div class="conatiner-fluid text-start">
                                            <label for="types"
                                                class="text-start col-form-label text-md-end pb-1 fw-bold">Type</label>

                                        </div>
                                        <div class="col">
                                            <select id="types" aria-placeholder="Select"
                                                style="width: 15vw;"class=" form-control @error('types') is-invalid @enderror"
                                                name="types" autocomplete="types">
                                                <option value="Select" disabled selected>Select</option>
                                                @if (old('types'))
                                                    @foreach ($types as $type)
                                                        @if (old('types') == $type['types'])
                                                            <option selected value="{{ $type['types'] }}">
                                                                {{ $type['types'] }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type['types'] }}">{{ $type['types'] }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>

                                            @error('types')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                        <div class="conatiner-fluid text-start">
                                            <label for="number"
                                                class="text-start col-form-label text-md-end pb-1 fw-bold">Number</label>

                                        </div>
                                        <div class="col">
                                            <input id="number" placeholder="09*******13" type="number"
                                                class="form-control @error('number') is-invalid @enderror" name="number"
                                                required autocomplete="number" value="{{ old('number') }}">

                                            @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                        <div class="conatiner-fluid text-start">
                                            <label for="email"
                                                class="text-start col-form-label text-md-end pb-1 fw-bold">Email</label>

                                        </div>
                                        <div class="col">
                                            <input id="email" placeholder="Janedoe@gmail.com" type="text"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                required autocomplete="email" value="{{ old('email') }}">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="row p-3 pb-0">
                                <div class="row d-flex flex-column text-start justify-content-start align-items-start">
                                    <div class="conatiner-fluid text-start">
                                        <label for="address"
                                            class="text-start col-form-label text-md-end pb-1 fw-bold">Address</label>

                                    </div>
                                    <div class="col">
                                        <textarea id="address" placeholder="Brgy. Lag On, Daet Camarines Norte " type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address"
                                            cols="100" rows="4">{{ old('address') }}</textarea>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <div class="container-fluid text-end pe-5 pt-3">
                                <button class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection

</script>
