@extends('layouts.main', ['title' => 'Admin - Staff'])
@section('content')
    @php
        $id = 0;
    @endphp
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
                        <h1 class="h3 mb-0 text-gray-800">Staff</h1>
                        <div>
                            @if (Session::has('msg'))
                                <div style="position: absolute; right: 0px;" id="staffmsg">
                                    <div class="container-fluid">
                                        <div style="width: 300px;" class="alert alert-success fw-bold">
                                            {{ Session::get('msg') }}</div>
                                    </div>

                                </div>
                            @endif

                            <div style="position: absolute; right: 0px;" id="cancelMSG" style="display: none">
                                <div class="container-fluid">
                                    <div style="width: 300px; " class="alert alert-success text-center fw-bold">
                                        Cancelled Successfully!</div>
                                </div>

                            </div>

                            <a href="{{ route('export') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                            <a href="{{ route('staff.create') }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i> Add new Staff</a>
                        </div>
                    </div>

                    <div class="row p-3">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID No.</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staff as $row)
                                    <tr>
                                        <td>{{ QrCode::size(50)->generate($row['workers_id']) }}</td>
                                        <td>{{ $row['firstname'] }} {{ $row['middlename'] }} {{ $row['lastname'] }}</td>
                                        <td>{{ $row['type'] }}</td>
                                        <td>{{ $row['email'] }}</td>
                                        <td>{{ $row['number'] }}</td>
                                        <td>
                                            <div class="container-fluid d-flex gap-1">
                                                <form action="{{ route('staff.show', ['id' => $row['workers_id']]) }}"
                                                    method="get">
                                                    @csrf
                                                    <button class="btn btn-info">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('staff.edit', ['id' => $row['workers_id']]) }}"
                                                    method="get">
                                                    @csrf
                                                    <button class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('staff.destroy', ['id' => $row['workers_id']]) }}"
                                                    method="post">
                                                    @csrf
                                                    <button class="btn btn-danger del">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </div>

                                        </td>
                                        {{-- <div class="confirms confirmMSG " style="display: none">
                                            <div
                                                class=" confirm d-flex gap-2 justify-content-center align-items-center flex-column">
                                                <i class="fa fa-trash text-info" style="font-size: 5em"></i>
                                                <h3 class="text-center">Do you want to delete this Employee?</h3>
                                                <div class="container-fluid d-flex justify-content-around">
                                                    <button class="btn btn-warning px-4 cancel">Cancel</button>
                                                    <form action="{{ route('staff.destroy', ['id'=>$row['workers_id']]) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-danger px-4">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

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
