@extends('layouts.header')


@section('content')
    <section
        style="min-height: 50vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/01.webp') }}'); background-size: cover; background-position: center;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div class="">
                <h1 class="text-white">Health And Safety Qualifications

                </h1>
                <p class="fs-4" style="color: #fff">Ofqual regulated health and safety courses for beginners complying with
                    all <br> requirements of the Health and Safety at Work Act 1974 and its subsidiary <br> legislation.
                </p>
            </div>
        </div>
    </section>

    <div class="" style="background-color: ghostwhite;">
        <section style="overflow: hidden">
            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <h1 class="px-5 p-3">Project Management Courses

                    </h1>
                    <div class="row px-5 g-3">
                        <div class="col-sm-3 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Safety.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <p>Level 7 Health and Safety in a Construction Environment (Learning to CSCS Green Card +) </p>
                                    <h6 class="fw-bolder fs-4" style="text-decoration: underline">$39.000</h6>
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
        <h1>Diploma in Health and Safety Courses

        </h1>
        <p style="line-height: 30px">Health and Safety are essential parts of any business environment. All employees should
            be aware of the dangers that might exist in their workplace and recognise and avoid them. It is where Diploma in
            Health and Safety Courses come into play.
        </p>
        <p style="line-height: 30px">Whether you’re interested in reducing the risk of injury to your employees or reducing
            the risk of damage to your property, our health & safety training courses will help you navigate the complex
            world of health and safety regulations. Our courses are designed to be accessible, easy to use, and relevant for
            any level of user. We’ve also got a wide range of options available, so whether you’re looking for a course that
            will help you pass a new regulation or help you understand why some laws are necessary in the first place, we’ve
            got something for you.
        </p>

        <div class="d-flex justify-content-center align-items-center">
            <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
        </div>

    </section>
@endsection
