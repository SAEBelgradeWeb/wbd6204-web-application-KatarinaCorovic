@extends('layouts.app')

@section('content')

<div class="bg-image">
    <div class="bg-cover bg-center"><img class="img-fluid" src="{{ asset('images/background.png') }}" alt="Background"></div>
</div>


<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Welcome</h2>
        </div>
    </div>
</div>

<div class="report-title-area">
    <div class="container">
        <div class="report-title-content">
            <h2>Your profile:</h2>
        </div>
    </div>
</div>

<section class="doctors_report">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-12">
                <div class="patient_appointments">
                    <h1>Appointments:</h1>
                     Electronic typesetting, remaining essentially un960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </div>
            </div>
            <div class="col-lg-6 sm-12">
                <div class="patient_reports">
                    <h1>Reports:</h1>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the lenchanged. It was popularised in the 1960s with the release of Letraset sheets contaip publishing software like.
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
