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



<div class="row">
                        <div class="col-md-3 col-sm-12">
                        </div>
                        <div class="col-md-3 col-sm-9 text-center">

                            <div class="card w-100 mt-4 w-75  bluelight" style="height:120px">
                                <div class="card-body  ">
                                    <h2 class="text-center"> <a class="awhite" href="{{'VirtualTraining'}}">
                                            التدريب التعـــاوني الافتراضي
                                        </a> </h2>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-9">
                            <div class="card w-100  mt-4 bluelight" style="height:120px">
                                <div class="card-body  w-75 ">
                                    <h2 class="text-center">

                                        <a class="awhite text-center" href="{{ ('CooperativeTraining') }}">
                                            التــدريب الميــــداني
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
@endsection
