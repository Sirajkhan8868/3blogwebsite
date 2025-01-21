@extends('layouts.header')

@section('content')
    <section style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Mandatory Courses
                </h1>
            </div>
        </div>
    </section>

        <div class="" style="background-color: ghostwhite;">
            <section class="container">
                <h1 class="text-center pt-5 fw-bolder">Courses
                </h1>
                <div class="card g-3" style="border: none; background-color: transparent;">
                    <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                        <div class="row px-5 g-3 pt-5">
                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                    <img src="{{ asset('assets/site/Adult.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Adult Abuse</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.00</h6>
                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Care-Planning.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Planing</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$35.00</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Basic-Life.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Basic Life</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$35.00</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                    <img src="{{ asset('assets/site/Carer-Awarenes.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Awerness </p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.00</h6>
                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3  text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Challenging.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Challenging</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.00</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3  text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Communication.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Communication Skills</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.000</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3  text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Confidentiality-.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Drug and Candour</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.000</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Electrical-Safety.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Electricty Safety</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.000</h6>

                                        <button
                                        class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                    <img src="{{ asset('assets/site/Fire-Marshal.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Fire Marshal</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$35.000</h6>
                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Handling-of-Medical.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Handling and Medical </p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$35.000</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Health-Care.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Health Care</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$35.000</h6>

                                        <button
                                        class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                                        style="background-color: rgb(113, 178, 231); border-radius: 40px">
                                        Add to Basket
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/Immunisation-Vaccines.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Immunisation Vacciness</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">$34.000</h6>

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

    @endsection
