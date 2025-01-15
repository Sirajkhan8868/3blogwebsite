@extends('layouts.header')

@section('content')
    <section style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Workplace Management
                </h1>
            </div>
        </div>
    </section>

        <div class="" style="background-color: ghostwhite;">
            <section class="container">
                <h1 class="px-5 mt-5">Workplace Management
                </h1>
                <div class="card g-3" style="border: none; background-color: transparent;">
                    <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                        <div class="row px-5 g-3 pt-5">
                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                    <img src="{{ asset('assets/site/reception-skills-.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Level 7 Diploma in office Admin and Recption Skills</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/reception-skill.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Level 5 Dioploma in office management and reception</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/personal-assisstant.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Level 5 Dioploma in Admininstrative Secretary and PA </p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/public-speaking.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject Diopoma in Public Speaking </p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3  text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/managing-workplace.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Single Subject  Management Workplace Harassment</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3  text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/team-development.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p >Single Subject Dioploma in team Development and Management </p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3  text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/emotional-intelligence.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject Dioploma in Emotional Intelligence </p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-4 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/016.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/016.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/e9.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/016.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/e9.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/016.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                            Add to Basket
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 p-2 text-center">
                                <div style="border: 2px solid grey; border-radius: 8px;  background-color: transparent;">
                                    <img src="{{ asset('assets/site/e9.webp') }}" alt="" style="width: 100%; height: auto;">
                                    <div class="px-3 mt-3">
                                        <p>Single Subject  in Construction Material Management</p>
                                        <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

                                        <button class="px-4 py-2 mb-3 mt-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
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
