<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'NaitsirhcLaravel') }}</title>

    {{-- BOOTSTRAP CDN-CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- BOOTSTRAP ICON CDN-CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- DATATABLES CDN-CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

</head>

<body>
    
    {{-- @include("modal_view_staff") --}}

    <style>
        .navbar {
            background-color: #3b5998 !important;
        }

        .modal-header .btn-close {
            position: absolute;
            top: 12px;
            right: 12px;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#">
                <img class="align-self-center" src="{{ asset('multimedia/unifast-web-logo.png') }}" alt=""
                    width="45" height="45" class="">
                <label class="fw-bold fs-4 align-self-center">STAFF MANAGEMENT SYSTEM</label>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fs-6" aria-current="page" href="menu_dashboard.php"> <i
                            class="bi bi-bar-chart"></i>
                        Dashboard</a>
                    <a class="nav-link fs-6" aria-current="page" href="/staff_list"> <i
                            class="bi bi-people"></i>
                        List of Staff</a>
                    <!-- <a class="nav-link fs-6" aria-current="page" href="menu_list_of_staff.php"> <i class="bi bi-people"></i> List of Staff</a> -->
                    <a class="nav-link fs-6" aria-current="page" href="#"> <i class="bi bi-box-arrow-right"></i>
                        Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    

    {{-- BOOTSTRAP CDN-JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- JQUERY AND DATA TABLES CDN-JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

     {{-- INCLUDE ALL CREATED JAVASCRIPT HERE --}}
    <script src="{{ url('staff.js') }}"></script>

    <!-- ALL LINK AND SCRIPT CDN IS REQUIRED BEFORE THIS INITIALIZATION -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#staff_list_table').DataTable();
        });
    </script>
</body>

</html>
