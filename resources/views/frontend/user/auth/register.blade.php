@extends('frontend.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>
<form action="{{route('register.user')}}" method="post">
    @csrf
    <div class="container-fluid bg-golden">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row mt-3 ">
                        <div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
                            <h3 class="heading text-black text-uppercase">Register</h3>
                        </div>
                    </div>
                    <div class="row g-0 symptoms">
                        <div class="col-md-1 offset-3">
                            <div class="bg-deepblue appointment-columns">
                                <div class="appointment-labels">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="appointment-labels">
                                    <i class="fa-solid fa-envelope-open"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="bg-gray appointment-columns">
                                <div class="form-group mb-3">
                                    <label for="">Fullname</label>
                                    <input id="fullname" class="form-control" type="text" name="fullname" placeholder="Fullname">
                                    @error('fullname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input id="email" class="form-control" type="text" name="email" placeholder="Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-5 mb-5 g-0">
                        <div class="col-md-4 offset-3 text-right mt-2"><input type="checkbox"> I Agree to the Terms and Conditions</div>
                        <div class="col-md-2 text-right"><button type="submit" class="btn btn-deepBlue">Register/Login</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</form>
@endsection
