@extends('frontend.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>
<div class="container servicesSection">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
            {{-- <h3 class="heading">{{$all_questions->service->service_name}}</h3>
            <div>{{$all_questions->service->caption}}</div> --}}
        </div>
    </div>
</div>
<form action="{{route('quiz.ques.store')}}" method="post">
    @csrf
<div class="container-fluid g-0 questions">

    @foreach($questions_array as $key=>$value)
    <div class="row g-0 mb-3">
        <div class="col-md-3">
            <div class="bg-deepblue">
                <div>
                    <h4>Ques<br>{{$key+1}}.</h4>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="bg-golden">
                <div><p>{{$value['question']}}</p></div>
            </div>
        </div>
    </div>
    <div class="row mb-5 mt-5">
        <div class="col-md-9 offset-3">
            <div class="row">

                <?php
                for ($i = 1; $i <= $value['choices']; $i++) {
                ?>
                <div class="col-md-2">
                    <input type="radio" name="ans{{$value['qid']}}" value="<?= $value['option' . $i] ?>"
                        <?php if ($value['user_answer'] == $value['option'.$i]) {   ?>checked<?php  } ?>
                        required id="option{{$value['qid'].$i}}" > <label for="option{{$value['qid'].$i}}"><?= $value['option'.$i] ?></label>
                        <input type="hidden" name="ques{{$value['qid']}}" value="{{$value['qid']}}">
                </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    @endforeach

    <div class="row ">
        <div class="col-md-12 pt-3 pb-3 text-center bg-golden">

           <button type="submit" class="btn btn-deepBlue">Submit</button>
           </div>
    </div>
</div>
</form>
@endsection
