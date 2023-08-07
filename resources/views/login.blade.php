@extends('layouts.my_layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-sm-12 col-md-8 col-lg-5">
                {{-- <img src="{{ asset('logo/unifast-web-logo.png')}}"  width="100px" height="100px"> --}}
                <div class="card ">
                    <div class="card-body">
                        <h3 class="card-title">Sign In</h3>
                        <hr>
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <label class="fs-5" for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="fs-5" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit-login" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
