@extends('layouts.header')

@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Accounting and Finance
                </h1>
                <p class="fs-4 text-white">Get Accounting Certifications with Our Online Accounting Course.
                </p>
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
                                <img src="{{ asset('assets/site/02.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 7  in Accounting and finance</p>
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
                                <img src="{{ asset('assets/site/03.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p> Bookkeeping in Accounting and finance</p>
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
                                <img src="{{ asset('assets/site/04.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p >Level 4 in Accounting and finance </p>
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
                                <img src="{{ asset('assets/site/05.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-4">
                                    <p>Level 3 in Accounting and finance </p>
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
                                <img src="{{ asset('assets/site/06.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 1 Certificate in Accounting and finance</p>
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
        <h1>Accounting and Finance Courses

        </h1>
        <p style="line-height: 30px">Learning accounting and finance courses in UK can be the first choice for any student.
            Inspire London College’s Online Accounting Course can be very effective for the students who are seeking to get
            certificate in accounting and finance course or a diploma in accounting and finance. The terms of depreciation,
            balance sheet, cash flow, operating cash and budgets are the terms that flinch many of us. However, all of these
            terms are the important concepts of financial accounting and the person, who desires to be the asset in the
            current business organisations by playing an effective role, must have the comprehensive knowledge of these
            concepts.
        </p>
        <p style="line-height: 30px">Accounting plays a key role in the modern businesses by facilitating internal and
            external stakeholders with correct financial information to take effective business decisions. Its significance
            cannot be ignored in organisations as it assists in management and financial accounting. The fundamental purpose
            of the online accounting course is to evaluate the information that is required by the stakeholders to assess
            the financial position of a firm. The managerial aspect of accounting is concerned with the evaluation of
            valuable information for business owners and other stakeholders while financial accounting deals only with
            financial information that is required for the financial performance of a company.
        </p>
        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
        </div>

    </section>
@endsection
