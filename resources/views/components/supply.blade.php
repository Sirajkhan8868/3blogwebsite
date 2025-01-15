@extends('layouts.header')

@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Child Psychology
                </h1>
            </div>
        </div>
    </section>

    <div class="" style="background-color: ghostwhite;">
        <section class="container">
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <h1 class="px-5 pt-5">Child Psychology courses online UK
                    </h1>
                    <div class="row px-5 g-3 pt-5">
                        <div class="col-sm-3 p-2 text-center" style="width: 22rem">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/logistic-2.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fs-5">Level 3 Dioploma in Logistics and Supply Chain Management</p>
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
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/logistics.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p class="fs-5">Single  Dioploma in Transport Management in Supply Chain</p>
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
        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
        </div>

    </section>
@endsection
