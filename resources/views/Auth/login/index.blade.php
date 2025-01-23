@extends('dashboard-user.layouts.main')

@section('container')
    <div class="login-section">
      <div class="container-login">
         <div class="login-wrapper">
            <div class="login-card">
               <div class="login-content">
                  <div class="login-form-side">
                     <div class="login-header">
                        <img src="img/dashboard-user/BJB.png" alt="Logo" class="login-logo">
                        <h2>LOGIN</h2>
                     </div>

                     <form class="login-form" method="POST" action="{{ route('login.auth') }}">
                        @csrf
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>

                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                           @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>

                        <div class="form-actions">
                           <button type="submit" class="btn btn-primary">
                              Login
                           </button>
                           {{-- <a href="" class="forgot-password">
                              Forgot Password?
                           </a> --}}
                        </div>

                        {{-- <div class="signup-link">
                           Don't have an account?
                           <a href="">Create Account</a>
                        </div> --}}
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
