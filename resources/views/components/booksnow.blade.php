@extends('layouts.header')

@section('styles')

    <style>
        .course-card {
            border: 2px solid #ff69b4;
            border-radius: 15px;
            padding: 0px 15px;
            margin-bottom: 5px;
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
            margin-left: 10px;
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

        .quantity-input {
            text-align: center;
            margin-right: 10px;
        }

        .form-select {
            border-radius: 4px;
            border: 1px solid #dee2e6;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
            background-color: white;
        }

        .form-select:focus {
            border-color: #7FE1EA;
            box-shadow: 0 0 0 0.25rem rgba(127, 225, 234, 0.25);
        }

        .form-control:focus {
            border-color: #7FE1EA;
            box-shadow: 0 0 0 0.25rem rgba(127, 225, 234, 0.25);
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

        .text-info {
            color: #7FE1EA !important;
        }

        .quantity-input {
            width: 70px !important;
        }
    </style>


@section('content')
    <div style="background-color: ghostwhite; border-bottom: 2px solid red" class="p-5">
        <section>
            <div class="text-sec row g-4">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('assets/site/phlebotomy-part-1n.webp') }}" alt="Phlebotomy Image" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 text-start mt-3 mt-md-5">
                    <h3 class="px-md-5">Level 3 Certificate in Phlebotomy (Part 1)</h3>
                    <div class="row g-3 px-md-5">
                        <div class="col-12 col-md-4">
                            <div class="card border-dotted p-4 text-center" style="background-color: #ffffff; border:1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6>COURSE LEVEL</h6>
                                <h4 class="text-primary p-4">Level 3</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-4 text-center" style="background-color: #ffffff; border: 1px dotted #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="pb-2">COURSE TYPE</h6>
                                <h4 class="text-primary p-2">CPD Accredited </h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-3 text-center" style="background-color: #ffffff; border: 1px dotted #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6>AWARDING BODY</h6>
                                <h4 class="text-primary fs-3 p-3">Step Ahead CPD</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card border-dotted p-4 text-center" style="background-color: #ffffff; border:1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6>DURATION</h6>
                                <h4 class="text-primary p-3">1 Day (10 am – 5 pm)</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card p-3 pb-4 text-center" style="background-color: #ffffff; border: 1px dotted #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6>STUDY METHOD</h6>
                                <h3 class="text-primary p-3">Classroom training</h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card text-center p-4" style="background-color: #ffffff; border: 1px dotted #f8f7f7; border-radius: 13px 13px 0px 13px;">
                                <h6>CERTIFICATE</h6>
                                <h4 class="text-primary p-3">Certificate Included</h4>
                            </div>
                        </div>
                    </div>

                    <h1 class="text-center pt-3" style="color: deeppink;">£199.00 £80.00</h1>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-12 col-md-6">
                    <div class="row g-3 text-center">
                        <div class="col-12 col-sm-6">
                            <div class="course-card" style="background: transparent;">
                                <h6>11 January 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a>
                                </p>
                                <p class="fully-booked mb-0">Fully Booked</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="course-card" style="background: transparent;">
                                <h6>25 January 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a>
                                </p>
                                <p class="seats-available mb-0">10 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="course-card" style="background: transparent;">
                                <h6>08 February 2025 (Saturday) - Special £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a>
                                </p>
                                <p class="seats-available mb-0">10 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="course-card" style="background: transparent;">
                                <h6>22 February 2025 (Saturday) - Special £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a>
                                </p>
                                <p class="seats-available mb-0">12 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="course-card" style="background: transparent;">
                                <h6>08 March 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a>
                                </p>
                                <p class="seats-available mb-0">12 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="course-card" style="background: transparent;">
                                <h6>22 March 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a>
                                </p>
                                <p class="seats-available mb-0">12 Seats Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="selection-panel">
                        <div
                            class="form-group mb-4 p-3 d-flex flex-column flex-md-row justify-content-between text-danger align-items-center">
                            <label for="courseDate" class="form-label me-3 fs-5" style="font-weight: 500;">Select Course Date</label>
                            <select class="form-select text-danger mt-2 mt-md-0 w-100 w-md-75" id="courseDate"
                                style="background-color: transparent; border: none;">
                                <option selected>Choose an option</option>
                                <option value="25-jan">25 January 2025</option>
                                <option value="08-feb">08 February 2025</option>
                                <option value="22-feb">22 February 2025</option>
                                <option value="08-mar">08 March 2025</option>
                                <option value="22-mar">22 March 2025</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-center px-3 pb-5 w-100">
                            <input type="number"
                                class="form-control quantity-input mt-2 mt-md-0   fs-5 fw-bolder text-danger"
                                value="1" min="1" max="10" id="quantity"
                                style="background-color: transparent; max-width: 100%; width: 90px; text-align: center; border-radius: 20px 0px 0px 20px; border: 2px solid #f51ab3;">
                            <button class="btn btn-primary add-basket-btn ms-0 ms-md-2  mt-md-0 px-4 py-2 fs-6"
                                onclick="addToBasket()" style="width: 100%; flex-grow: 1;">
                                Add to Basket
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-center p-4 p-md-5">
                <h4 class="text-primary">Part 2: Advanced Practical Session/Live Blood Session</h4>
                <h6 class="fw-bolder fs-5 fs-md-4">Phlebotomy Training Cost</h6>
                <p class="text-danger fw-bolder fs-5 fs-md-4">Get it Now £270 (Offer For Limited Time Only for GP Clinic)
                </p>
                <h1 class="mt-4">
                    <a href="#" class="btn btn-primary btn-lg px-5 py-2" role="button">Book Now</a>
                </h1>
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
        <div class="container p-5 mt-5">
            <div class="row">
                <div class="col-md-4 text-left p-4"
                    style="max-width: 500px; height: 600px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6); border-radius: 0px 30px 30px 0px; line-height: 50px; border: none; background-color:#eaf1f7;">
                    <h6 class="text-end p-4 fs-4" style="color: #f06ac8">COURSE OVERVIEW</h6>
                    <h6 class="text-end p-4 fs-4" style="color: #64a1da">COURSE OUTLINE</h6>
                    <h6 class="text-end p-4 fs-4" style="color: #64a1da">REQUIREMENTS</h6>
                    <h6 class="text-end p-4 fs-4" style="color: #64a1da">LEARNING OBJECTIVE</h6>
                    <h6 class="text-end p-4 fs-4" style="color: #64a1da">CERTIFICATE</h6>
                    <h6 class="text-end p-4 fs-4" style="color: #64a1da">LEARNING FEEDBACK</h6>
                </div>

                <div class="col-md-8" style="padding-left: 2rem;">
                    <h1 class="fw-bolder">Overview</h1>
                    <p class="fs-5">Level 3 Certificate in Phlebotomy is a CPD-accredited course designed to provide you
                        with
                        the practical skills and knowledge required to undertake a career in this area. Inspire London
                        College takes pride in
                        its excellent teaching methods, ensuring our students understand what they are doing entirely.</p>
                    <p class="fs-5">The phlebotomy training course is separated into two parts. Both training segments
                        must
                        be completed to obtain the CPD Level 3 Certificate in Phlebotomy.</p>
                    <p class="fs-5"><span class="fw-bolder">Part 1:</span>Theoretical + Practical phases of Phlebotomy
                        using
                        ultra-modern simulation equipment</p>
                    <p class="fs-5"><span class="fw-bolder">Part 2:</span>Theoretical + Practical phases of Phlebotomy
                        using
                        ultra-modern simulation equipment</p>
                    <p class="fs-5">The venipuncture phlebotomy training is tailored for individuals without prior
                        clinical experience.
                        Nevertheless, it is equally suitable for experienced healthcare professionals who have not received
                        phlebotomy training before.

                        Anyone with a medical or non-medical background can take this course.

                        The phlebotomy training program encompasses both theoretical and practical aspects of the subject.
                        The curriculum covers essential skills such as collecting blood samples, handling equipment like
                        syringes and needles, properly disposing of medical waste and maintaining personal health and
                        safety. You will receive an introduction to Phlebotomy and its crucial techniques in theory.

                        In the venepuncture training activities, learners will be provided with contemporary equipment, such
                        as dummy arms with precise blood systems and Venipuncture Pad. The learners will initially perform
                        various procedures in a group and, later on, will be paired up for role plays. Additionally, you
                        will gain hands-on experience through modern simulation equipment during the practical phase.</p>
                    <h1 class="fs-5">Course Outline</h1>
                    <p class="fs-5">Unit 1 Introduction to Phlebotomy:</p>
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
                    <p class="fs-5">Unit 2 Infection Control & Legal issues in Phlebotomy:</p>
                    <p class="fs-5">Unit 3 Applying Basic Phlebotomy Skills and Techniques using ultra-modern simulation
                        equipment:</p>
                    <p class="fs-5">Applying hand washing techniques in the healthcare environment</p>
                    <p class="fs-5">Using precautions for infection prevention and control</p>
                    <p class="fs-5">Applying Cannulation techniques & venepuncture</p>
                    <p>Applying Basic Phlebotomy Practices and Techniques</p>
                    <h6 class="fs-5" style="color: #f06ac8">Part Advance Practical Session</h6>
                    <p class="fs-5">In the Part 2/Advanced Practical Session in GP Clinic, you will learn the complete
                        Phlebotomist’s role and we will train you in the pathology department. You will learn the full
                        process of receiving patient from reception till saying them good bye after taking the blood sample.

                        During the Advanced Practical Session at the GP Clinic, you’ll receive comprehensive training in the
                        role of a phlebotomist. Our program is designed to provide you with a holistic understanding of the
                        responsibilities and tasks associated with working in the pathology department. You will learn the
                        entire process, from receiving patients at the reception desk to bidding them good bye after
                        successfully collecting blood samples.

                        You will shadow our trainers while they will be drawing blood from real patients in GP clinic. Once
                        our trainer will feel that you are confident in drawing blood so they will give you the opportunity
                        for drawing live blood collection under one-to-one supervision with the patient’s consent.

                        You will also learn NHS / Healthcare Provider’s professional standards, codes of practice, policies
                        and procedure, how to label different sample tubes, which tube you will use for blood test. How to
                        find vein and to avoid the patient from bruises, and much more.

                        Upon completing the course, you will receive a Certificate of Competence, allowing you to work
                        without close supervision as a phlebotomist.

                        Inspire Medical will set the date & time for Part 2 (Advanced Practical Session) on the day of the
                        Part 1 training.

                        Note: You must book Part 2/Advanced Practical Session/Live Blood Session separately.</p>
                    <h1>Learning Objective</h1>
                    <p class="fs-5">After successfully completing this venepuncture training course, the learners will be
                        able to understand the infection control principles during the phlebotomy process. Further, the
                        learners will be able to recognize and acquire the capabilities mentioned in the CHS132 National
                        Occupational Standard for performing phlebotomy. The training course will enable the students to
                        handle the vacutainer system for collecting blood samples. Learners will be able to understand the
                        various complications encountered during this process.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="container">


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            document.querySelectorAll('.play-button').forEach(button => {
                button.addEventListener('click', function() {
                    const videoId = this.getAttribute('data-video');
                    const container = this.parentElement;
                    const iframe = document.createElement('iframe');

                    iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1`);
                    iframe.setAttribute('frameborder', '0');
                    iframe.setAttribute('allow',
                        'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                    );
                    iframe.setAttribute('allowfullscreen', '');
                    iframe.style.position = 'absolute';
                    iframe.style.top = '0';
                    iframe.style.left = '0';
                    iframe.style.width = '100%';
                    iframe.style.height = '100%';

                    container.innerHTML = '';
                    container.appendChild(iframe);
                });
            });
        </script>
        <div style="background-color: #f06ac8; padding: 20px; border-radius: 30px" class="m-4">
            <p>Hello</p>
            <p class="fs-5 ">
                Thank you for the lovely study day. Everything was done by you and your trainers in a very professional
                manner. I gained new skills and knowledge which will certainly help me in my new career as a phlebotomist.
                Thank you very much and keep up the very good work.
                Kind regards
                <span class="fw-bolder">— Cornel Fieraru</span>
            </p>
        </div>
        <div style="background-color: #64a1da; padding: 20px; border-radius: 30px" class="m-4">
            <p>Hello</p>
            <p class="fs-5 ">
                I enjoyed taking this new experience and have gained more knowledge. I believe I am confident to take a
                practical and it has been very helpful. Thank you for the excellent training and hospitality.
                <span class="fw-bolder">— Ariana Kohestani
                </span>
            </p>
        </div>
        <div style="background-color: #f06ac8; padding: 20px; border-radius: 30px" class="m-4">
            <p>Dear Mr Khan ,
            </p>
            <p class="fs-5 ">
                I had my part 2 training last Saturday and I was so happy with the outcome. Yasmine was so amazing with the
                way she guided and supported me during the training. Her techniques of training and beliefs in me really did
                make me want to impress her even more. I am so happy that I made the best decision to choose Inspire London
                college to do my phlebotomy course, thank you very much for everything.Also, I just wanted to ask if you can
                let me know or put me on the list for work experience with Yasmine if it comes available, I really need it
                to improve my skills and I am very determined to found a job after all this..I have also done my health and
                safety test if you can please send me the certificate. Once more thank you very much for everything.
                <span class="fw-bolder">— Cornely Mulumba</span>
            </p>
        </div>
        <div style="background-color: #64a1da; padding: 20px; border-radius: 30px" class="m-4">
            <p>Dear Mr Khan
            </p>
            <p class="fs-5 ">
                Thanks for the Fantastic course. Your trainers are not only knowledgeable, but they go beyond and above the
                expectations. They make sure that you have an understanding of all the content, a mock quiz to check on
                understanding and knowledge is a plus point and up to date resources. I am extremely happy and will
                recommend this course to others. Thank you
                <span class="fw-bolder">— — Elizabeth </span>
            </p>
        </div>
        <div style="background-color: #f06ac8; padding: 20px; border-radius: 30px" class="m-4">
            <p class="fs-5 ">
                HI ILC TeamThank you for the brilliant course. I enjoyed learning in class and gained more knowledge in
                phlebotomy that I am going to apply to my workplace
                <span class="fw-bolder">
                    — — N. Kohaestani
                </span>
            </p>
        </div>
        <div style="background-color: #64a1da; padding: 20px; border-radius: 30px" class="m-4">
            <p>Hello</p>
            <p class="fs-5 ">
                Dear ILC Team, An excellent and friendly team of professionals. I learned a lot about the course (more than
                I expected). Professionalism is very high. Excellent teaching skills used, not boring at all. Trainers kept
                my attention. Good interaction by the trainer Jasmin. She has given me the confidence to take blood
                <span class="fw-bolder">— Rosemarie Hall
                </span>
            </p>
        </div>
        <div style="background-color: #f06ac8; padding: 20px; border-radius: 30px" class="m-4">
            <p>Hello</p>
            <p class="fs-5 ">
                Thank you for the lovely study day. Everything was done by you and your trainers in a very professional
                manner. I gained new skills and knowledge which will certainly help me in my new career as a phlebotomist.
                Thank you very much and keep up the very good work.
                Kind regards
                <span class="fw-bolder">— Cornel Fieraru</span>
            </p>
        </div>
        <div style="background-color: #64a1da; padding: 20px; border-radius: 30px" class="m-4">
            <p>Hello</p>
            <p class="fs-5 ">
                I enjoyed taking this new experience and have gained more knowledge. I believe I am confident to take a
                practical and it has been very helpful. Thank you for the excellent training and hospitality.
                <span class="fw-bolder">— Ariana Kohestani
                </span>
            </p>
        </div>
        <div style="background-color: #f06ac8; padding: 20px; border-radius: 30px" class="m-4">
            <p>Dear Mr Khan ,
            </p>
            <p class="fs-5 ">
                I had my part 2 training last Saturday and I was so happy with the outcome. Yasmine was so amazing with the
                way she guided and supported me during the training. Her techniques of training and beliefs in me really did
                make me want to impress her even more. I am so happy that I made the best decision to choose Inspire London
                college to do my phlebotomy course, thank you very much for everything.Also, I just wanted to ask if you can
                let me know or put me on the list for work experience with Yasmine if it comes available, I really need it
                to improve my skills and I am very determined to found a job after all this..I have also done my health and
                safety test if you can please send me the certificate. Once more thank you very much for everything.
                <span class="fw-bolder">— Cornely Mulumba</span>
            </p>
        </div>
        <div style="background-color: #64a1da; padding: 20px; border-radius: 30px" class="m-4">
            <p>Dear Mr Khan
            </p>
            <p class="fs-5 ">
                Thanks for the Fantastic course. Your trainers are not only knowledgeable, but they go beyond and above the
                expectations. They make sure that you have an understanding of all the content, a mock quiz to check on
                understanding and knowledge is a plus point and up to date resources. I am extremely happy and will
                recommend this course to others. Thank you
                <span class="fw-bolder">— — Elizabeth </span>
            </p>
        </div>
        <div style="background-color: #f06ac8; padding: 20px; border-radius: 30px" class="m-4">
            <p class="fs-5 ">
                HI ILC TeamThank you for the brilliant course. I enjoyed learning in class and gained more knowledge in
                phlebotomy that I am going to apply to my workplace
                <span class="fw-bolder">
                    — — N. Kohaestani
                </span>
            </p>
        </div>
        <div style="background-color: #64a1da; padding: 20px; border-radius: 30px" class="m-4">
            <p>Hello</p>
            <p class="fs-5 ">
                Dear ILC Team, An excellent and friendly team of professionals. I learned a lot about the course (more than
                I expected). Professionalism is very high. Excellent teaching skills used, not boring at all. Trainers kept
                my attention. Good interaction by the trainer Jasmin. She has given me the confidence to take blood
                <span class="fw-bolder">— Rosemarie Hall
                </span>
            </p>
        </div>

    </section>
    <section class="mb-4" style="background-color: #f8f7f7">

        <div class="container py-5">
            <div class="row justify-content-between align-items-start g-4">
                <div class="col-12 col-md-6 px-4 px-md-5 text-center text-md-start"
                    style="min-width: 300px; flex-grow: 1;">
                    <h2 class="mb-4 fw-bold pt-3 pt-md-5 fs-2 fs-md-1">Course Price</h2>
                    <div class="d-flex align-items-center gap-2 justify-content-center justify-content-md-start">
                        <span class="text-decoration-line-through text-muted fs-4 fs-md-2">£199.00</span>
                        <span class="fs-3 fs-md-2 fw-bold text-danger">£80.00</span>
                    </div>
                </div>



                <div class="col-12 col-md-6" style="border-radius:20px; background-color:hsl(120, 12%, 94%)">
                    <div class=" p-4 rounded" style="margin: 20px 20px;">
                        <div class="mb-3 p-4" style="background-color: #e8f0f0;">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label text-info fs-5 fw-bolder">Select Course Date</label>
                                </div>

                                <div class="col-md-8">
                                    <select class="form-select fs-5" id="courseDate"
                                        style="color: #7FE1EA; background-color:transparent;border:none">
                                        <option value="" style="background-color: #ffffff;">Choose an option
                                        </option>
                                        <option value="1" style="background-color: #fff;">January 2025</option>
                                        <option value="2" style="background-color: #fff;">February 2025</option>
                                        <option value="3" style="background-color: #fff;">March 2025</option>
                                    </select>

                                </div>
                            </div>
                        </div>


                        <div class="d-flex gap-2 align-items-stretch
                        ">
                            <input type="number" class="form-control quantity-input fw-bolder" id="quantity"
                                min="1" value="1"
                                style="border-radius: 20px 0px 0px 20px; padding:12px 0px; border: 2px solid rgb(118, 222, 248);color:#7FE1EA">
                            <button class="btn btn-info flex-grow-1 fs-4" id="addToBasket"
                                style="border-radius: 0px 20px 20px 0px;color:white;font-weight:bolder; word-spacing:2px">
                                Add to basket
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const courseDate = document.getElementById('courseDate');
                const quantity = document.getElementById('quantity');
                const addToBasket = document.getElementById('addToBasket');

                quantity.addEventListener('change', function() {
                    if (this.value < 1) {
                        this.value = 1;
                    }
                });

                addToBasket.addEventListener('click', function() {
                    if (!courseDate.value) {
                        alert('Please select a course date');
                        return;
                    }

                    const order = {
                        date: courseDate.options[courseDate.selectedIndex].text,
                        quantity: parseInt(quantity.value),
                        price: 80.00
                    };

                    console.log('Order details:', order);
                    alert('Added to basket: ' + order.quantity + ' course(s) for ' + order.date);
                });
            });
        </script>
    </section>
@endsection
