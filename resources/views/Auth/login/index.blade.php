@extends('dashboard-user.layouts.main')

@section('container')
   <!-- Carousel Start -->
   <div class="carousel">
      <div class="container-fluid">
         <div class="owl-carousel">
            <div class="carousel-item">
               <div class="carousel-img">
                  <img src="img/dashboard-user/carousel/carousel-1.png" alt="Image">
               </div>
            </div>
            <div class="carousel-item">
               <div class="carousel-img">
                  <img src="img/dashboard-user/carousel/carousel-2.png" alt="Image">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Carousel End -->   

   <div class="login-section">
      <div class="container">
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
                              Sign In
                           </button>
                           <a href="" class="forgot-password">
                              Forgot Password?
                           </a>
                        </div>

                        <div class="signup-link">
                           Don't have an account? 
                           <a href="">Create Account</a>
                        </div>
                     </form>
                  </div>

                  <div class="login-description-side">
                     <div class="description-content">
                        <img src="img/dashboard-user/sekuritas.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection