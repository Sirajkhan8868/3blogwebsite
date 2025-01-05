@extends('layouts.header')

@section('style')
    <style>
        body {
            overflow-y: hidden;
        }
    </style>
@endsection

@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Leadership and Management

                </h1>
            </div>
        </div>
    </section>

    <div class="" style="background-color: ghostwhite;">
        <section>
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <h1 class="px-5 p-3">Leadership and Management Courses

                    </h1>
                    <div class="row px-5 g-3">
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/015.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 7 Diploma in Learning and Development</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Add to Basket
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                <img src="{{ asset('assets/site/016.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fw-bolder">Level 7 Dioploma in HR Management</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                    <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px">
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
    <section class="container p-4">
        <h1>Leadership and Management

        </h1>
        <p style="line-height: 30px" class="fs-5">Leadership and Management courses online London will help you gain practical skills to
            improve team member performance, boost employee retention and become a motivational force in any managerial
            position.
        </p>
        <p style="line-height: 30px" class="fs-5">Leadership and management imply a unique set of functions, characteristics, and skills
            that share similarities and are often considered overlapping functions. Still, some leaders do not practice
            management, while some people manage without a leadership role
        </p>
        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
        </div>

    </section>
@endsection
