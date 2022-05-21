@extends('frontend.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>
<div class="container-fluid bg-golden">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
                        <h3 class="heading text-black text-uppercase">{{$answer}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
