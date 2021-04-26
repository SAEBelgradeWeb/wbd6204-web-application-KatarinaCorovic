@extends('layouts.app')

@section('content')



<div class="bg-image">
    <div class="bg-cover bg-center"><img class="img-fluid" src="{{ asset('images/background.png') }}" alt="Background"></div>
</div>

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Our specialist </h2>
            <span>We have specialist doctor’s for emergency services</span>
        </div>
    </div>
</div>

<section class="doctors-area">
    <div class="container">
        <div class="row doctor-list">
            <doctors></doctors>
        </div>
    </div>
</section>





@endsection
