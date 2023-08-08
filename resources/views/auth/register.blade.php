@extends('layouts.masterauthen')
@section('content')
    



<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign up</p>
        <form method="POST" action="{{ route('register') }}">

            @csrf

            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
           
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        
        <!-- /.social-auth-links -->
  
        <p class="mb-0">
          <a href="{{ route('login') }}" class="text-center">Go to login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
    @endsection