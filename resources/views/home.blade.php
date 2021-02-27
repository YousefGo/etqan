@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-right">{{ __('لوحة الطالب') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('أهلا وسهلا بك في بوابة الطالب') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
