@extends('layouts.app')

@section('content')

<div class="bg-appointment">
    <div class="bg-cover bg-center"><img class="img-fluid" src="{{ asset('images/background.png') }}" alt="Background"></div>
</div>


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Appointment</h2>
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li class="active">Appointment</li>
                </ul>
            </div>
        </div>
    </div>




<section class="appointment-forms-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="/patient" method="POST">
                    @csrf
                    <div class="patient-information">
                        <h3>Patient information</h3>
                        <div class="appointment-box mb-30">
                            <div class="appointment-form">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label form-control-label">Patient Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <div class="input-group date" data-provide="datepicker" placeholder="Select a date">
                                        <input type="text" class="form-control">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Country of Residence</label>
                                    <select class="custom-select">
                                        <option value>USA</option>
                                        <option value>London</option>
                                        <option value>United Kingdom</option>
                                        <option value>United States</option>
                                        <option value>Canada</option>
                                        <option value>Australia</option>
                                        <option value>California</option>
                                    </select>
                                </div>
                                <div class="checkbox-content">
                                    <div class="form-group">
                                        <input type="checkbox" id="chb1">
                                        <span>Male</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="chb2">
                                        <span>Female</span>
                                    </div>
                                </div>
                                <button type="submit" class="default-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <form action="/appointment" method="POST">
                    @csrf
                    <div class="patient-information">
                        <h3>Appointment information</h3>
                        <div class="appointment-box mb-30">
                            <div class="appointment-form">
                                <div class="form-group">
                                    <label>Specialty</label>
                                    <input type="text" class="form-control" name="speciality">
                                </div>
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <select class="custom-select" name="doctor">
                                        <option value="Dr Juhon Dew">Dr Juhon Dew</option>
                                        <option value="Dr Jon Smith">Dr Jon Smith</option>
                                        <option value="Dr Ana">Dr Ana</option>
                                        <option value="Dr Kilva">Dr Kilva</option>
                                        <option value="Dr Zafir Kilt">Dr Zafir Kilt</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">At The Following Hospital</label>
                                    <select class="custom-select" name="hospital">
                                        <option value="Cao">Cao</option>
                                        <option value="Cao">Cao</option>
                                        <option value="Cao">Cao</option>
                                        <option value="Cao">Cao</option>
                                        <option value="Cao">Cao</option>
                                        <option value="Cao">Cao</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <div class="input-group date" data-provide="datepicker" placeholder="Select a date">
                                        <input type="text" class="form-control" name="date_of_birth">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" name="comment" id="message" rows="4" spellcheck="false"></textarea>
                                </div>
                                <button type="submit" class="default-btn mt-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


    <section class="subscribe-area pb-100">
        <div class="container">
            <div class="subscribe-bg">
                <div class="row align-items-cover">
                    <div class="col-lg-6 col-sm-6">
                        <form class="newsletter-form" data-toggle="validator" novalidate="true">
                            <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
                            <button class="default-btn btn-lg btn-disabled" type="submit" style="pointer-events:all; cursor:pointer;">Subscribe</button>
                        </form>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="subscribe-content">
                            <img src="{{ asset('images/email.png') }}" alt="envelope">
                            <h3>Sign up for newsletter</h3>
                            <span>Subscribe to the newsletter for all the latest updates</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
