@extends('layouts.app')

@section('content')

<div class="bg-image">
    <div class="bg-cover bg-center"><img class="img-fluid" src="{{ asset('images/background.png') }}" alt="Background"></div>
</div>



<div class="report-title-area">
    <div class="container">
        <div class="report-title-content">
            <h2>Doctor's report</h2>
        </div>
    </div>
</div>

<section class="doctors_report">
    <div class="container">
        <form action="/appointment" method="POST">
            @csrf
            <div class="report_form">
                <h1>Doctor's appointment report</h1>
                <div class="form-group">
                    <label for="">Patient</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Report:</label>
                    <textarea class="form-control" name="comment" id="message" rows="4" spellcheck="false"></textarea>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection
