@extends('layouts.header')

@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Admin, Secretarial & PA
                </h1>
            </div>
        </div>
    </section>

    <div class="" style="background-color: ghostwhite;">
        <section style="overflow: hidden">
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <div class="row px-5 g-3 pt-4">
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/a1.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 7 Dioploma in Executive PA</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>
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
                                <img src="{{ asset('assets/site/a2.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 5 Dioploma in Admin Secetarial PA</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

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
                                <img src="{{ asset('assets/site/a3.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 5 Dioploma in administrative Skils</p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

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
                                <img src="{{ asset('assets/site/a4.jpg') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 5 Dioploma in Admin Secetarial PA </p>
                                    <h6 class="fw-bolder" style="text-decoration: underline">10.000</h6>

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
                                <img src="{{ asset('assets/site/a5.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 4 Dioploma in Admin Secetarial PA</p>
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

    <section class="container p-4">
        <h1>Admin, Secretarial & PA Courses

        </h1>
        <p style="line-height: 30px">Admin courses online hold greater importance as administrative secretaries perform
            delegated tasks by helping business leaders do more of what they want to do and less of what they don’t.
            Therefore, PA and secretarial skills are of universal relevance and value. Essentially, personal assistants and
            secretaries are elite admin personnel who oversee many important interconnected responsibilities. An
            administrative or secretarial job is not related to some specific sector but can be acquired in any organisation
            with a need for administrative and secretarial work
        </p>
        <p style="line-height: 30px">Inspire College London specialises in world-class admin courses online, which will help
            you develop professionally and provide you with all the knowledge of administrative skill set, tools, and
            techniques to ensure your worth and impress any potential employee. Admin courses online have been designed by
            ILC to prepare the achievers for varied job roles and to acquire competitive positions. The higher-level admin
            secretarial & pa diploma comprises 16 Modules, each with unique and highly relevant content that will be highly
            beneficial for your development
        </p>
        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
        </div>

    </section>
@endsection
