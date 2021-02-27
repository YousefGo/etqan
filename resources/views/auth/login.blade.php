@extends('layouts.app')

@section('content')
<div class="container-fulid">

  
    
      



    <div class="row justify-content-center  center">
        <div class="col-md-8 " >
            <div class="card  m-1" >
                <div class="card-header  text-right"  ><h1>
                {{ __('تسجيل دخول المستخدم') }}
                </h1></div>
          
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-right"><h2>
                            {{ __('البريد الإلكتروني') }}
                            </h2></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-right"><h2>
                            {{ __('كلمة المرور') }}
                            </h2></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 ">
                                
                                <button type="submit" class="btn btn-primary text-right">
                                    {{ __('دخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-right" href="{{ route('password.request') }}">
                                        {{ __('هل نسيت كلمة المرور؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
