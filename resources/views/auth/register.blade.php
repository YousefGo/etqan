@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center "><h1>
                {{ __('إنشاء حساب مستخدم جديد (طالب)') }}

                </h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" text-right col-md-4 col-form-label text-md-right"><h2>
                            {{ __('الاسم ') }}
                            </h2></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class=" text-right col-md-4 col-form-label text-md-right"><h2>
                            {{ __('البريد الإلكتروني') }}
                            </h2></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" text-right col-md-4 col-form-label text-md-right"><h2>
                            {{ __('كلمة المرور') }}
                            </h2></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class=" text-right col-md-4 col-form-label text-md-right"><h2>
                            {{ __('تأكيد كلمة المرور') }}
                            </h2></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 ">
                                
                                <button type="submit" class="btn btn-primary text-right w-50">
                                  <h4 class="text-center">
                                  {{ __('التسجيل') }}
                                  </h4>  
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
