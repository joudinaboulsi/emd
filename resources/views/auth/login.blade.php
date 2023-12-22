@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="/images/logo/emd-global-logo-dark.png" alt="EMD Global Logo" style="width: 160px;">
                </span>
                
              </a>
            </div>
            <!-- /Logo -->
           
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input
                  type="text"
                  class="form-control @error('email') is-invalid @enderror"
                  id="email"
                  name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus
                />
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <label for="email" class="form-label">Password </label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                   class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                  
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                  {{-- <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span> --}}
                </div>
              </div>
              <div class="mb-3">
               
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>

          
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
@endsection