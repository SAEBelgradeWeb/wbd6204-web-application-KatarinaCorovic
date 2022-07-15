@extends('layouts.app')

@section('content')
    <div class="bcg-image">
        <div class="bg-cover bg-center"><img class="img-fluid" src="{{ asset('images/happy-patient.jpg') }}" alt="Background"></div>
    </div>

    <div class="feature-appointment-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 single-feature">
                    <div class="single">
                        <a href="/appointment"><span>Request an appointment</span></a>
                        <img src="/images/appointment.png" alt="appointment">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 single-feature">
                    <div class="single">
                        <a href="/doctor"><span>Find a doctor</span></a>
                        <img src="/images/doctor.png" alt="doctor">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------------------------- Choose us area -------------------->

   <section class="choose-us-area">
       <div class="container">
           <div class="row section-title">
               <div class="col-lg-5"></div>
               <div class="col-lg-7 col-sm-12 text-lg-right text-center">
               <span>Why choose us</span>
               <h2 class="m-0">A hospital is an institution where patients are treated. Our doctors are always engaged in this work</h2>
               </div>
            </div>
           <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-sm-12">
                   <div class="choose-us-content text-lg-right text-center">
                       <h3>In remote & the around places who lives there, medical science is changing their medical care, education & research impact</h3>
                       <p>Our most experienced doctors,emergency doctors,nurses,therapist & researchers give Their Best in this hospital.they also provide advanced medicine facilities,campuses,clinics & classrooms.we give patients best innovative treatment and best service to improve the health and overall wellbeing of our community.</p>
                    </div>
               </div>
               <div class="col-lg-6">
                   <div class="choose-us-img">
                       <img src="{{ asset('images/choose-us-img.png') }}" alt="Patient and doctor">
                   </div>
               </div>
            </div>
       </div>
   </section>



    <!------------------- appointment-area ---------------->

    <section class="appointment-area">
        <div class="container">
            <div class="appointment-here-form">
                <form action="/">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6 button" >
                            <button type="submit" class="default-btn"><a href="/appointment">Book Now</a></button>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                                <div class="input-group date" data-provide="datepicker" placeholder="Select a date">
                                <input type="text" class="form-control">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <select class="form-control">
                                <option selected>Doctor Name</option>
                                <option value="1">Dr Juhon Dew</option>
                                <option value="2">Dr Jon Smith</option>
                                <option value="3">Dr Ana</option>
                                <option value="4">Dr Kilva</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h3>Book an appointment</h3>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!---------------  services -------------->

    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-btn mt-5">
                        <button type="button" class="default-btn btn-lg"><a href="/department">View all services</a></button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services-section-title text-align-left">
                        <span>Our services</span>
                        <h1>All the services that I provide to my patients in the field of treatment</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-5" >
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-icon">
                            <img src="{{ asset('images/neurology.png') }}" alt="">
                        </div>
                        <h3><a href="">Neurology</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-icon">
                            <img src="{{ asset('images/cardiology.png') }}" alt="">
                        </div>
                        <h3><a href="">Cardiology</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-icon">
                            <img src="{{ asset('images/ophtalmology.png') }}" alt="">
                        </div>
                        <h3><a href="">Ophtalmology</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        <div class="services-icon">
                            <img src="{{ asset('images/medical-mask.png') }}" alt="">
                        </div>
                        <h3><a href="">Covid-19</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!----------------- portfolio ----------->


    <section class="our-portfolio-area pt-100">
        <div class="container">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-align-left">
                        <span>Our portfolio</span>
                        <h2>Below are some examples of all the portfolios we provide to our patients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-portfolio">
                        <img src="{{ asset('images/therapy.jpg')}}" alt="">
                        <div class="portfolio-content">
                            <h3>Conditions we treat</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-portfolio">
                        <img src="{{ asset('images/research.jpg')}}" alt="">
                        <div class="portfolio-content">
                            <h3>Research and innovation</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-portfolio">
                        <img src="{{ asset('images/holding-hands.jpg')}}" alt="">
                        <div class="portfolio-content">
                            <h3>Healthy relationship</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------partner area ------------->

    <div class="partner-area tb-100">
        <div class="container">
            <div class="partner-slider partner-bg owl-theme owl-carousel owl-rtl owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(1856px, 0px, 0px); transition: all 1s ease 0s; width: 3712px;"></div>
                </div>
            </div>
        </div>
    </div>

<!------------------------- footer ------------------------->


@endsection



