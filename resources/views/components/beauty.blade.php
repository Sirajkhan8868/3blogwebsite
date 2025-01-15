@extends('layouts.header')

@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Beauty Therapy

                </h1>
            </div>
        </div>
    </section>

    <div class="" style="background-color: ghostwhite;">
        <section class="container">
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <h1 class="px-5 pt-5">Beauty Therapy courses online UK
                    </h1>
                    <div class="row px-5 g-3 pt-5">
                        <div class="col-sm-3 p-2 text-center" style="width: 22rem">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Duty-of-Candour.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fs-5">Level 1 Certificate in Salon Management</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 p-2 text-center" style="width: 22rem">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/img1-350.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fs-5">Level 2 Certificate Makeup in Artist</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 p-2 text-center" style="width: 22rem">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/img-350.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fs-5">Single Subject Dioploma in Skin Analysis </p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="container p-5">
        <h1>Beauty Therapy Courses Online
        </h1>
        <p style="line-height: 30px" class="fs-5">Beauty therapy is a profession that involves putting your skills and experience to use
            through product knowledge, skincare, and beauty education. Beauty Therapy Courses Online are one-of-a-kind
            online beauty therapy certificate courses and boot camps. Learn the basics of Beauty Therapy through our simple,
            affordable courses. Get qualified as an aesthetician or therapy specialist and get a job in various industries.
        </p>
        <p style="line-height: 30px" class="fs-5">We offer a full range of beauty therapy courses online to help you advance your career
            in the beauty industry. No matter where you are in life, our self-paced online classes can help you through your
            multidisciplinary studies.
        </p>
        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
        </div>

    </section>
@endsection
