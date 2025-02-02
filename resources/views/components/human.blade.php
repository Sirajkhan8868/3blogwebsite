@extends('layouts.header')

@section('styles')

  <style>
     .custom-hover-red:hover {
        background-color: #dc3545 !important;
        color: white !important;
        transition: background-color 0.3s ease;
    }
  </style>


@section('content')
    <section style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">HR Management
                </h1>
            </div>
        </div>
    </section>

    <div style="background-color: ghostwhite;">
        <section class="container">
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <h1 class="px-5 p-3">HR Management Courses Online UK</h1>
                    <div class="row px-5 g-5">
                        <div class="col-sm-6 col-md-4 col-lg-3 p-2 text-center">
                            <div style="border: 2px solid grey; width:100%; max-width: 18rem; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/02.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 7 Diploma in Learning and Development</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 p-2 text-center">
                            <div style="border: 2px solid grey; width:100%; max-width: 18rem; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/03.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 7 Diploma in HR Management</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 p-2 text-center">
                            <div style="border: 2px solid grey; width:100%; max-width: 18rem; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/04.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 5 Diploma in Recruitment Consultant</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 p-2 text-center">
                            <div style="border: 2px solid grey; width:100%; max-width: 18rem; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/05.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 5 Diploma in Recruitment Consultant</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 p-2 text-center">
                            <div style="border: 2px solid grey; width:100%; max-width: 18rem; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/06.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 5 Diploma in Recruitment Consultant</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(113, 178, 231); border-radius: 40px">
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


    @endsection
