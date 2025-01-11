@extends('layouts.header')

@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Education and Training Qualification
                </h1>
                <p class="fs-4 text-white">Online and class-based Education and Training Courses with Inspire London
                    <br>College</p>
            </div>
        </div>
    </section>

    <div class="" style="background-color: ghostwhite;">
        <section>
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <h1 class="px-5 pt-4">Education and Training Qualification Courses
                    </h1>
                    <div class="row px-5 g-3 pt-4">
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/e1.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 6 in Education Management and Leadership</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Select Options
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/e2.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 4 Extended Dioploma in Education and traning</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Select Options
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/e3.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 4 Extended Dioploma in Education and traning</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Select Options
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/e4.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 5 Extended Dioploma in Education and traning</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                    class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                    style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                    Select Options
                                </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/e5.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 6 Dioploma Coaching and Mentoring</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                    class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                    style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                    Select Options
                                </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/e6.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 8 Certificate of Assessment Process</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Select Options
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/e7.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 3 Assessing Vocational</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Select Options
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/e8.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 8 Certificate of Assessment Process</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button
                                    class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                    style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                    Select Options
                                </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3  text-center">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/e9.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 5 Extended Dioploma in Education and traning</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                    class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                    style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                    Select Options
                                </button>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="container p-4">
        <h1>Education and Training Qualification



        </h1>
        <p style="line-height: 30px" class="fs-5">Are you seeking to establish a career in the education and training
            sector in the UK? The UK’s education and training sector is thriving, and the demand for professionals is
            soaring. Suppose you want to be a part of the education and training sector in the UK or even in your own
            country and are still confused about starting point. In that case, education and training qualifications can be
            very effective for you to establish a rewarding career in education and training.


        </p>
        <p style="line-height: 30px" class="fs-5">The education and training industry offers a variety of jobs, from
            trainers and teachers to assessors and verifiers, but you need the right kind of education and training
            qualifications. In the UK, the demand for online teacher training courses with certificate is high, and there
            are various teacher training courses UK that can facilitate you in establishing the right career. Choosing the
            best diploma in education and training UK can be a daunting task in the education and training sector. Still,
            ILC makes it easy for you with education and training qualifications regulated by Ofqual and offered by TQUK
            (UK’s most reputed awarding organization). Inspire London College offers you the following education and
            training qualifications under the RQF framework.
        </p>
        <p class="fs-5">
            After getting business & management diploma the students will be able to understand about communication
            management, Human resource management and resources management within the organisation. Inspire London College’s
            management and teaching staff will be there for your assistance for 24 hours a day and 7 days in a week. After
            enrolling for this course you will get access to our Virtual Learning Environment (VLE) /Moodle and all the
            study materials and assessments will be available /Moodle.
        </p>
        <p>TQUK Level 3 Award in Education and Training (AET, formerly known as PTLLS regulated by Ofqual)
            TQUK Level 3 Certificate in Assessing Vocational Achievement (RQF)
            TQUK Level 4 Certificate in Leading the Internal Quality Assurance of Assessment Process and Practice (RQF)
            If you are planning to teach or train in the further education sector, then an AET qualification can be
            beneficial for you. In addition, those who want to establish their career as an assessor or internal quality
            assurers can also take these education training qualifications</p>
        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read
                More...</button>
        </div>

    </section>
@endsection
