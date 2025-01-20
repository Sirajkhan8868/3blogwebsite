@extends('layouts.header')

@section('styles')

    <style>
        .course-card {
            border: 2px solid #ff69b4;
            border-radius: 15px;
            padding: 0px 15px;
            margin-bottom: 15px;
            background: white;
            transition: transform 0.2s;
        }

        .course-card:hover {
            transform: translateY(-2px);
        }

        .location {
            color: #ff69b4;
            text-decoration: none;
        }

        .location:hover {
            color: #ff1493;
        }

        .seats-available {
            color: #ff69b4;
            font-weight: bold;
        }

        .fully-booked {
            color: #ff69b4;
            font-weight: bold;
        }

        .selection-panel {
            background: #87CEEB;
            padding: 20px;
            border-radius: 15px;
        }

        .add-basket-btn {
            background: linear-gradient(to right, #DA70D6, #BA55D3);
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 0px 20px 20px 0px;
            width: 100%;
            font-weight: bold;
            margin-top: 15px;
        }

        .add-basket-btn:hover {
            background: linear-gradient(to right, #BA55D3, #9932CC);
        }



        .btn-info {
            background-color: #7FE1EA;
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            color: white;
        }

        .btn-info:hover {
            background-color: #6CD1DA;
            color: white;
        }

        .quantity-input {
            width: 70px !important;
        }
    </style>


@section('content')
    <div style="background-color: ghostwhite; border-bottom: 2px solid red" class="p-5">
        <section>
            <div class="text-sec d-flex flex-wrap">
                <div class="col-12 col-md-6 mb-4 mb-md-0 px-md-3">
                    <img src="{{ asset('assets/site/phlebotomy-part-2.webp') }}" alt="Phlebotomy Image"
                        class="img-fluid rounded" style="max-width: 100%; border-radius: 20px;">
                </div>

                <div class="col-12 col-md-6 mt-4 mt-md-0 text-start">
                    <p class="mb-2">Categories: <span style="color: #f06ac8;">Phlebotomy part 2</span></p>
                    <p class="px-4 px-md-6 fw-bold" style="font-size: 1rem; margin-right: 4rem">
                        Part 2 – Level 3 Certificate in Phlebotomy (Advanced Practical Session/Live Blood Session)
                    </p>


                    <div class="row g-3 d-flex align-items-stretch mt-2">
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="fs-5 mb-3">COURSE LEVEL</h6>
                                <h4 class="text-primary " style="font-size: 16px">2nd Part of Level 3</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="fs-5 mb-3">DURATION</h6>
                                <h4 class="text-primary" style="font-size: 15px">3 Hours (10 AM to 01 PM)</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="fs-5 mb-3">AWARDING BODY</h6>
                                <h4 class="text-primary " style="font-size: 13px">Step Ahead CPD Qualifications</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="fs-5 mb-3">ASSESSMENT</h6>
                                <h4 class="text-primary " style="font-size: 16px">Observations</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="fs-5 mb-3">STUDY METHOD</h6>
                                <h4 class="text-primary" style="font-size: 14px">Practical Training at GP Clinic</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="fs-5 mb-3">CERTIFICATE</h6>
                                <h4 class="text-primary " style="font-size: 15px">Certificate of Competence</h4>
                            </div>
                        </div>
                    </div>


                    <h1 class="text-center pt-3" style="color: #f06ac8">£35.00 <span class="text-muted"
                            style="text-decoration: line-through;">£270.00</span></h1>
                    <div class="d-flex justify-content-center align-items-center px-3 px-md-5 pb-4"
                        style="min-height: auto;">
                        <input type="number" class="form-control quantity-input text-center p-1 fs-4 fw-bold text-primary"
                            value="1" min="1" max="10" id="quantity"
                            style="max-width: 100px; border-radius: 20px 0 0 20px; border: 2px solid #1179ce;">
                        <button class="btn btn-primary fs-5 ms-2 p-2 w-20" onclick="addToBasket()"
                            style="border-radius: 0px 20px 20px 0px;">Add to basket</button>
                    </div>

                </div>
            </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function addToBasket() {
            const courseDate = document.getElementById('courseDate').value;
            const quantity = document.getElementById('quantity').value;

            if (courseDate === 'Choose an option') {
                alert('Please select a course date');
                return;
            }

            alert(`Added ${quantity} seat(s) for ${courseDate} to basket`);
        }
    </script>

    </section>

    </div>

    <section style="overflow-x: hidden;">
        <div class="row p-5 mt-5">
            <div class="col-md-4 text-left p-4"
                style="width: 100%; max-width: 500px; height: 300px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6); border-radius: 0px 30px 30px 0px; line-height: 50px; border: none; background-color:#eaf1f7; position:relative; top:0px;left:0px">
                <h6 class="text-end p-2 fs-4" style="color: #ee3ac7">REQUIREMENTS</h6>
                <h6 class="text-end p-2 fs-4" style="color: #ee3ac7">LEARNING OBJECTIVE</h6>
                <h6 class="text-end p-2 fs-4" style="color: #ee3ac7">CERTIFICATE</h6>
                <h6 class="text-end p-2 fs-4" style="color: #ee3ac7">LEARNING FEEDBACK</h6>
            </div>

            <div class="col-md-8" style="padding-left: 4rem;">
                <h1 class="fw-bolder">Overview</h1>
                <p class="fs-5">Level 3 Certificate in Phlebotomy is a CPD-accredited course designed to provide you with
                    the practical
                    skills and knowledge required to undertake a career in this area. Inspire London College takes pride in
                    its excellent teaching methods, ensuring our students understand what they are doing entirely.</p>
                <p class="fs-5">The phlebotomy training course is separated into two parts. Both training segments must be
                    completed to obtain the CPD Level 3 Certificate in Phlebotomy.</p>
                <p class="fs-5"><span class="fw-bolder">Part 1:</span>Theoretical + Practical phases of Phlebotomy using
                    ultra-modern simulation equipment</p>
                <p class="fs-5"><span class="fw-bolder">Part 2:</span>Theoretical + Practical phases of Phlebotomy using
                    ultra-modern simulation equipment</p>
                <p class="fs-5">The venipuncture phlebotomy training is tailored for individuals without prior clinical
                    experience.
                    Nevertheless, it is equally suitable for experienced healthcare professionals who have not received
                    phlebotomy training before.

                    Anyone with a medical or non-medical background can take this course.

                    The phlebotomy training program encompasses both theoretical and practical aspects of the subject. The
                    curriculum covers essential skills such as collecting blood samples, handling equipment like syringes
                    and needles, properly disposing of medical waste and maintaining personal health and safety. You will
                    receive an introduction to Phlebotomy and its crucial techniques in theory.

                    In the venepuncture training activities, learners will be provided with contemporary equipment, such as
                    dummy arms with precise blood systems and Venipuncture Pad. The learners will initially perform various
                    procedures in a group and, later on, will be paired up for role plays. Additionally, you will gain
                    hands-on experience through modern simulation equipment during the practical phase.</p>
                <h1 class="fs-5">Course Outline</h1>
                <p class="fs-5">Unit 1 Introduction to Phlebotomy:
                </p>
                <ul class="fs-5">
                    <li>Introduction to Phlebotomy</li>
                    <li>Understand the Phlebotomy in Medical Terminology</li>
                    <li>Phlebotomy equipment & how to use it</li>
                    <li>Explain the procedure of Venepuncture & Capillary Sampling, and the most common</li>
                </ul>

                <ul class="fs-5">
                    <li>Introduction to Phlebotomy</li>
                    <li>Understand the Phlebotomy in Medical Terminology</li>
                    <li>Phlebotomy equipment & how to use it</li>
                    <li>Explain the procedure of Venepuncture & Capillary Sampling, and the most common</li>
                </ul>
                <p class="fs-5">Unit 2 Infection Control & Legal issues in Phlebotomy:
                </p>
                <p class="fs-5">Unit 3 Applying Basic Phlebotomy Skills and Techniques using ultra-modern simulation
                    equipment:
                </p>
                <h1>Who is this Course for?
                </h1>
                <p class="fs-5">Part 2 (Advanced Practical Session/Live Blood Session) of the Level 3 Certificate in Phlebotomy is meant
                    for learners who took Part 1 to learn Phlebotomy’s theoretical plus practical phases using ultra-modern
                    simulation equipment.</p>
                <p class="fs-5">Applying hand washing techniques in the healthcare environment
                </p>
                <p class="fs-5">Using precautions for infection prevention and control
                </p>
                <p class="fs-5">Applying Cannulation techniques & venepuncture
                </p>
                <p>Applying Basic Phlebotomy Practices and Techniques
                </p>
                <h6 class="fs-5" style="color: #f06ac8">Part Advance Practical Session</h6>
                <h1>Learning Objective</h1>
                <p class="fs-5">After successfully completing this venepuncture training course, the learners will be able
                    to understand the infection control principles during the phlebotomy process. Further, the learners will
                    be able to recognize and acquire the capabilities mentioned in the CHS132 National Occupational Standard
                    for performing phlebotomy. The training course will enable the students to handle the vacutainer system
                    for collecting blood samples. Learners will be able to understand the various complications encountered
                    during this process.

                </p>

            </div>

        </div>
    </section>
    <section class="d-flex flex-column justify-content-center align-items-center p-4"
        style="background-color: whitesmoke; min-height: auto;">
        <h1 class="text-center mb-4" style="color: #eb2bb1;">
            £35.00 <span style="text-decoration: line-through; color: #eb2bb1">£270.00</span>
        </h1>
        <div class="d-flex">
            <input type="number" class="form-control quantity-input text-center p-2 fs-4 fw-bold text-primary"
                value="1" min="1" max="10" id="quantity"
                style="max-width: 100px; border-radius: 20px 0 0 20px; border: 2px solid #1797ec;">
            <button class="btn btn-primary fs-5 ms-2" onclick="addToBasket()"
                style="border-radius: 0px 20px 20px 0px;">Add to basket</button>
        </div>
    </section>


    <section>

    </section>

@endsection
