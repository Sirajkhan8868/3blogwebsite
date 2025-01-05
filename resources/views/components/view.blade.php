@extends('layouts.header')

@section('content')
    <section style="background: rgba(0, 188, 212, 0.5) url('your-video-url.mp4') center/cover no-repeat;">
        <div class="text-sec d-flex justify-content-center align-items-center" style="height: 50vh; text-align: center;">
            <div>
                <h1 class="fw-bolder text-white" style="font-size: 60px">Endorsed & CPD Accredited Courses</h1>
                <p class="fs-3 text-white">Break into the future education with ILC's Endorsed & CPD Accredited distance
                    learning courses.</p>
                <p class="fs-3 text-white">Get any Endorsed or CPD course at 10% off for just £9.00 using the coupon code.
                </p>
                <button class="px-5 p-2 text-white fw-bolder border-0"
                    style="background-color: rgb(241, 50, 140)">INSPIRE2024</button>
            </div>
        </div>
    </section>
    <section class="container">

        <h1 class="text-center p-5">Endorsed Courses
        </h1>
        <div class="row g-4">

            <div class="col-12 col-md-4 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='9' cy='7' r='4'/%3E%3Cpath d='M23 21v-2a4 4 0 0 0-3-3.87'/%3E%3Cpath d='M16 3.13a4 4 0 0 1 0 7.75'/%3E%3C/svg%3E"
                            alt="HR Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">HR Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Crect x='3' y='3' width='18' height='18' rx='2' ry='2'/%3E%3Cline x1='3' y1='9' x2='21' y2='9'/%3E%3Cline x1='9' y1='21' x2='9' y2='9'/%3E%3C/svg%3E"
                            alt="Project Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Project Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z'/%3E%3Cpolyline points='9 22 9 12 15 12 15 22'/%3E%3C/svg%3E"
                            alt="Construction Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Construction Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='9' cy='7' r='4'/%3E%3Cpath d='M23 21v-2a4 4 0 0 0-3-3.87'/%3E%3Cpath d='M16 3.13a4 4 0 0 1 0 7.75'/%3E%3C/svg%3E"
                            alt="Leadership Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Leadership Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Crect x='2' y='3' width='20' height='14' rx='2' ry='2'/%3E%3Cline x1='2' y1='7' x2='22' y2='7'/%3E%3C/svg%3E"
                            alt="Accounting Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Accounting and Finance</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='12' cy='7' r='4'/%3E%3C/svg%3E"
                            alt="Admin Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Admin, Secretarial </h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'/%3E%3C/svg%3E"
                            alt="Business Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Business Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M22 10v6M2 10l10-5 10 5-10 5z'/%3E%3Cpath d='M6 12v5c3 3 9 3 12 0v-5'/%3E%3C/svg%3E"
                            alt="Education Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Education and Training</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='12' cy='7' r='4'/%3E%3C/svg%3E"
                            alt="Admin Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Admin, Secretarial </h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'/%3E%3C/svg%3E"
                            alt="Business Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Business Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M22 10v6M2 10l10-5 10 5-10 5z'/%3E%3Cpath d='M6 12v5c3 3 9 3 12 0v-5'/%3E%3C/svg%3E"
                            alt="Education Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Education and Training</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='12' cy='7' r='4'/%3E%3C/svg%3E"
                            alt="Admin Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Admin, Secretarial </h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-2">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'/%3E%3C/svg%3E"
                            alt="Business Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Business Management</h3>
                    <a href="#" class="text-decoration-none text-start ">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-2 d-flex justify-content-center align-items-center">
                <div class="category-card">
                    <div class="icon-circle">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M22 10v6M2 10l10-5 10 5-10 5z'/%3E%3Cpath d='M6 12v5c3 3 9 3 12 0v-5'/%3E%3C/svg%3E"
                            alt="Education Icon" style="width: 50px">
                    </div>
                    <h3 class="h5 mb-4">Education and Training</h3>
                    <a href="#" class="text-decoration-none text-start">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <div>

        <div style="background-color: ghostwhite" class="mt-4">
            <section class="container">
                <h1 class="text-center p-5">Video Training (CPD Accredited & Qualifications)
                </h1>
                <div class="row g-4 d-flex justify-content-center pb-5">

                    <div class="col-12 col-md-4 col-lg-4 ">
                        <div class="category-card" style="background-color: white;">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='9' cy='7' r='4'/%3E%3Cpath d='M23 21v-2a4 4 0 0 0-3-3.87'/%3E%3Cpath d='M16 3.13a4 4 0 0 1 0 7.75'/%3E%3C/svg%3E"
                                    alt="HR Icon" style="width: 50px">
                            </div>
                            <h3 class="h5 mb-4">HR Management</h3>
                            <a href="#" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="category-card" style="background-color: white;">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Crect x='3' y='3' width='18' height='18' rx='2' ry='2'/%3E%3Cline x1='3' y1='9' x2='21' y2='9'/%3E%3Cline x1='9' y1='21' x2='9' y2='9'/%3E%3C/svg%3E"
                                    alt="Project Icon" style="width: 50px">
                            </div>
                            <h3 class="h5 mb-4">Project Management</h3>
                            <a href="#" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="category-card" style="background-color: white;">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z'/%3E%3Cpolyline points='9 22 9 12 15 12 15 22'/%3E%3C/svg%3E"
                                    alt="Construction Icon" style="width: 50px">
                            </div>
                            <h3 class="h5 mb-4">Construction Management</h3>
                            <a href="#" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                </div>

            </section>
        </div>

        <section class="container">
            <div class="p-5">
                <h1>Endorsed & CPD Accredited Courses
                </h1>
                <p>Inspire London College Offers endorsed & CPD Accredited courses by Training Qualification UK (TQUK) under
                    TQUK Endorsed Provision and CPD Accreditation Scheme of Step Ahead CPD Qualifications.
                </p>
                <h3>TQUK Endorsed Provision </h3>
                <p>Inspire London College has designed and developed its online short courses UK, distance learning courses,
                    home learning courses & soft skills training UK and has gone through an external quality check by
                    Training Qualification UK (TQUK) to ensure that the ILC and its online learning platforms meet the high
                    standards quality criteria.</p>
                <p>TQUK is an Awarding Organisation recognised by the Office of Qualifications and Examinations Regulation
                    (Ofqual) in England, CCEA Regulation in Northern Ireland, and Qualifications Wales, delivering the
                    nation’s highest quality distance learning courses UK.</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="text-center px-4 px-2 fw-bolder fs-4" style="background-color: transparent">Read More...</button>
                      </div>
                                  </div>
        </section>
    @endsection
