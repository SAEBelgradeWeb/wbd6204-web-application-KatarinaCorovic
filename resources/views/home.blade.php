@extends('layouts.app')

@section('content')
    <div class="bg-image">
        <div class="bg-cover bg-center"><img class="img-fluid" src="{{ asset('images/happy-patient.jpg') }}" alt="Background"></div>
    </div>

    <div class="feature-appointment-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 single-feature">
                    <div class="">
                        <span>Emergency case</span>
                        <img src="/images/first-aid-kit.png" alt="first-aid-kit">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 single-feature">
                    <div class="">
                        <a href="appointment"><span>Request an appointment</span></a>
                        <img src="/images/appointment.png" alt="appointment">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 single-feature">
                    <div class="">
                        <span>Find a doctor</span>
                        <img src="/images/doctor.png" alt="doctor">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------------------------- Choose us area -------------------->

   <section class="choose-us-area ptb-100">
       <div class="container">
{{--           <div class="choose-us-shape">--}}
{{--               <img src="{{ asset('images/choose-us-shape.png') }}" alt="">--}}
{{--           </div>--}}
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
                       <input class="btn btn-lg" type="button" value="About us" class="button">
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
                <form action="">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6 button" >
                            <button type="submit" class="default-btn">Book Now</button>
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

    <section class="our-services pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-btn mt-5">
                        <a href="" class="default-btn btn-lg">View all services</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-align-left">
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

    <!---------------------------- testimonial --------------------->


{{--    <section class="testimonial-area">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title text-align-left">--}}
{{--                <span>Testimonial</span>--}}
{{--                <h2>What do our patients say?</h2>--}}
{{--            </div>--}}
{{--            <div class="testimonial-slider owl-theme owl-carousel owl-rtl owl-loaded owl-drag">--}}
{{--                <div class="owl-stage-outer">--}}
{{--                    <div class="owl-stage" style="transform: translate3d(2760px, 0px, 0px); transition: all 0s ease 0s; width: 4830px;">--}}
{{--                        <div class="owl-item cloned" style="width:1230px">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/testilcon.png')}}" alt="">--}}
{{--                                    <div class="testimonial-shape">--}}
{{--                                        <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>--}}
{{--                                    </div>--}}
{{--                                    <h3>Anna Dalis</h3>--}}
{{--                                    <img src="" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width:1230px;">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/Customer-testimonial-page.png')}}" alt="">--}}
{{--                                        <div class="testimonial-shape">--}}
{{--                                            <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>--}}
{{--                                        <h3>Kilvis Smith</h3>--}}
{{--                                        <img src="{{ asset('images/')}}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width:930px;">--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/testilcon.png')}}" alt="">--}}
{{--                                        <div class="testimonial-shape">--}}
{{--                                            <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>--}}
{{--                                        <h3>Markus Twain</h3>--}}
{{--                                        <img src="" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 690px;">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/Customer-testimonial-page.png')}}" alt="">--}}
{{--                                        <div class="testimonial-shape">--}}
{{--                                            <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>--}}
{{--                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”--}}
{{--                                        </p>--}}
{{--                                        <h3>Anna Deo</h3>--}}
{{--                                        <img src="" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item-active">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/testilcon.png')}}" alt="">--}}
{{--                                        <div class="testimonial-shape">--}}
{{--                                            <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>--}}
{{--                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”--}}
{{--                                        </p>--}}
{{--                                        <h3>Kilvis Smith</h3>--}}
{{--                                        <img src="" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width:690px;">--}}
{{--                            <div class="row align items-center">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/testilcon.png')}}" alt="">--}}
{{--                                        <div class="testimonial-shape">--}}
{{--                                            <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>--}}
{{--                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”--}}
{{--                                        </p>--}}
{{--                                        <h3>Markus Twain</h3>--}}
{{--                                        <img src="" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width:690px;">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="{{ asset('images/Customer-testimonial-page.png')}}" alt="">--}}
{{--                                        <div class="testimonial-shape">--}}
{{--                                            <img src="{{ asset('images/testimonial-shape.png')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-8">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <i class="flaticon-straight-quotes"></i>--}}
{{--                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</p>--}}
{{--                                        <h3>Anna Deo</h3>--}}
{{--                                        <img src="" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="owl-nav disabled">--}}
{{--                    <button type="button" role="presentation" class="owl-prev">--}}
{{--                        <span aria-label="Previous"><</span>--}}
{{--                    </button>--}}
{{--                    <button type="button" role="presentation" class="owl-next">--}}
{{--                        <span aria-label="Next">></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="owl-dots">--}}
{{--                    <button role="button" class="owl-dot active">--}}
{{--                        <span></span>--}}
{{--                    </button>--}}
{{--                    <button role="button" class="owl-dot">--}}
{{--                        <span></span>--}}
{{--                    </button>--}}
{{--                    <button role="button" class="owl-dot">--}}
{{--                        <span></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <!-- our specialist---------->

{{--    <section class="doctors-area pt-100 pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-title text-align-left">--}}
{{--                        <span>Our specialist</span>--}}
{{--                        <h2>We have specialist doctor's for emergency services</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="doctors-slider owl-theme owl-carousel owl-rtl owl-loaded owl-drag">--}}
{{--                <div class="owl-stage-outer">--}}
{{--                    <div class="owl-stage" style="transform: translate3d(1575px, 0px, 0px); transition: all 1s ease 0s; width: 4410px;">--}}
{{--                        <div class="owl-item-cloned" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors three">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor3.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Dental surgeon</span>--}}
{{--                                    <h3>Aimee C. Mayfield</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item-cloned" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors four">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-4.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Cardiothoracic Surgeon</span>--}}
{{--                                    <h3>Oliver Silkyth</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item-cloned" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors five">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor5.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Cosmetic Surgeon</span>--}}
{{--                                    <h3>Melisa Volyram<</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item-cloned" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors six">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor6.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Ophtamologist</span>--}}
{{--                                    <h3>Philip Larimia</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors one">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-1.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span> Surgeon</span>--}}
{{--                                    <h3>Olivia Henderson</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors two">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-2.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Neurologist</span>--}}
{{--                                    <h3>Scarlet Latiset</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors three">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor3.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Dermatologist</span>--}}
{{--                                    <h3>Kelly Roldon</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors four">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-4.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Cardiothoracic Surgeon</span>--}}
{{--                                    <h3>Oliver Silkyth</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors five">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor5.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Cosmetic Surgeon</span>--}}
{{--                                    <h3>Melisa Volyram</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item active" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors six">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor5.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Ophtamologist</span>--}}
{{--                                    <h3>Philip Larimia</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned active" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors one">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-1.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Surgeon</span>--}}
{{--                                    <h3>Olivia Henderson</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned active" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors two">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-2.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Neurologist</span>--}}
{{--                                    <h3>Scarlet Latiset</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned active" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors three">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor3.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Dermatologist</span>--}}
{{--                                    <h3>Kelly Roldon</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width: 285px; margin-left: 30px;">--}}
{{--                            <div class="single-doctors four">--}}
{{--                                <div class="doctors-img">--}}
{{--                                    <img src="{{ asset('images/doctor-4.jpg')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="doctors-content">--}}
{{--                                    <span>Cardiothoracic Surgeon</span>--}}
{{--                                    <h3>Oliver Silkyth</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="owl-nav">--}}
{{--                    <button type="button" role="presentation" class="owl-prev">--}}
{{--                        <i></i>--}}
{{--                    </button>--}}
{{--                    <button type="button" role="presentation" class="owl-next">--}}
{{--                        <i></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="owl-dots disabled">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <!----------------- portfolio ----------->


    <section class="our-portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-lg-6 col-md-6">
                    <div class="section-btn">
                        <a href="" class="default-btn btn-lg">View all portfolios</a>
                    </div>
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



