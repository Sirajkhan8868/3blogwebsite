@extends('layouts.header')

@section('styles')

<style>

    .course-card {
            border: 2px solid #ff69b4;
            border-radius: 15px;
            padding: 15px;
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
            margin-left: -110px;
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
</style>


@section('content')
    <div style="background-color: ghostwhite; " class="p-5">
        <section>
            <div class="text-sec d-flex">
                <div class="flex-shrink-0" style="max-width: 50%; padding-right: 20px;">
                    <img src="{{ asset('assets/site/phlebotomy-part-1n.webp') }}" alt="Phlebotomy Image"
                        style="max-width: 100%; height: auto;">

                </div>

                <div class="flex-grow-1 text-start mt-5">
                    <h3 class="px-5">Level 3 Certificate in Phlebotomy (Part 1)</h3>
                    <div class="row g-3 px-5">
                        <div class="col-md-4">
                            <div class="card border-dotted p-4 text-center" style="background-color: #ffffff;">
                                <h6>COURSE LEVEL</h6>
                                <h4 class="text-primary">Level 3</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-4 text-center" style="background-color: #ffffff; border: 1px dotted #000;">
                                <h6>COURSE TYPE</h6>
                                <h4 class="text-primary">CPD Accredited Course</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-4 text-center" style="background-color: #ffffff; border: 1px dotted #000;">
                                <h6 class="fw-bolder">AWARDING BODY</h6>
                                <h4 class="text-primary fs-3">Step Ahead CPD </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-dotted p-4 text-center" style="background-color: #ffffff;">
                                <h6>DURATION</h6>
                                <h3 class="text-primary">1 Day (10 am – 5 pm)</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-4 text-center" style="background-color: #ffffff; border: 1px dotted #000;">
                                <h6>STUDY METHOD</h6>
                                <h3 class="text-primary">Classroom traning</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center p-4" style="background-color: #ffffff; border: 1px dotted #000;">
                                <h6>CERTIFICATE</h6>
                                <h3 class="text-primary">Certificate Included</h3>
                            </div>
                        </div>
                    </div>
                    <h1 class="text-center pt-3 " style="color:deeppink">£199.00 £80.00</h1>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="row text-center">
                        <div class="col-md-5">
                            <div class="course-card">
                                <h6>11 January 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a></p>
                                <p class="fully-booked mb-0">Fully Booked</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="course-card">
                                <h6>25 January 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a></p>
                                <p class="seats-available mb-0">10 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="course-card">
                                <h6>08 February 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a></p>
                                <p class="seats-available mb-0">10 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="course-card">
                                <h6>22 February 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a></p>
                                <p class="seats-available mb-0">12 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="course-card">
                                <h6>08 March 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a></p>
                                <p class="seats-available mb-0">12 Seats Available</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="course-card">
                                <h6>22 March 2025 (Saturday) - Special Offer £80</h6>
                                <p class="mb-1">Location: <a href="#" class="location">Southall London UB1 3HB</a></p>
                                <p class="seats-available mb-0">12 Seats Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="selection-panel" >
                        <div class="form-group mb-3 p-5 d-flex justify-content-between text-danger align-items-center" >
                            <label for="courseDate" class="form-label me-3">Select Course Date</label>
                            <select class="form-select text-danger" id="courseDate" style="width: auto;">
                                <option selected>Choose an option</option>
                                <option value="25-jan">25 January 2025</option>
                                <option value="08-feb">08 February 2025</option>
                                <option value="22-feb">22 February 2025</option>
                                <option value="08-mar">08 March 2025</option>
                                <option value="22-mar">22 March 2025</option>
                            </select>
                        </div>

                        <div class="d-flex align-items-center px-5">
                            <input type="number" class="form-control quantity-input p-2 mt-3 fs-5" value="1" min="1" max="10" id="quantity"
                                style="background-color: transparent; width: 90px; text-align: center; border-radius: 20px 0px 0px 20px;border:2x solid #f51ab3">
                            <button class="add-basket-btn ms-2" onclick="addToBasket()" style="width: 100%;">Add to basket</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center p-5">
                <h4 class="text-primary">Part 2: Advanced Practical Session/Live Blood Session</h4>
                <h6 class="fw-bolder">Phlebotomy Training Cost</h6>
                <p class="text-danger fw-bolder">Get it Now £270 (Offer For Limited Time Only for GP Clinic)
                </p>
                <h1><a href="">Book Now</a></h1>

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
                style="width: 100%; max-width: 500px; height: 600px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6); border-radius: 0px 30px 30px 0px; line-height: 50px; border: none; background-color:#eaf1f7">
                <h6 class="text-end p-4 fs-4" style="color: #f06ac8">COURSE OVERVIEW</h6>
                <h6 class="text-end p-4 fs-4" style="color: #64a1da">COURSE OUTLINE</h6>
                <h6 class="text-end p-4 fs-4" style="color: #64a1da">REQUIREMENTS</h6>
                <h6 class="text-end p-4 fs-4" style="color: #64a1da">LEARNING OBJECTIVE</h6>
                <h6 class="text-end p-4 fs-4" style="color: #64a1da">CERTIFICATE</h6>
                <h6 class="text-end p-4 fs-4" style="color: #64a1da">LEARNING FEEDBACK</h6>
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
                <p class="fs-5">The venipuncture phlebotomy training is tailored for individuals without prior clinical experience.
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
                    <p class="fs-5">Unit 3 Applying Basic Phlebotomy Skills and Techniques using ultra-modern simulation equipment:
                    </p>
                    <p class="fs-5">Applying hand washing techniques in the healthcare environment
                    </p>
                    <p class="fs-5">Using precautions for infection prevention and control
                    </p>
                    <p class="fs-5">Applying Cannulation techniques & venepuncture
                    </p>
                    <p>Applying Basic Phlebotomy Practices and Techniques
                    </p>
                    <h6 class="fs-5" style="color: #f06ac8">Part Advance Practical Session</h6>
                    <p class="fs-5">In the Part 2/Advanced Practical Session in GP Clinic, you will learn the complete Phlebotomist’s role and we will train you in the pathology department. You will learn the full process of receiving patient from reception till saying them good bye after taking the blood sample.

                        During the Advanced Practical Session at the GP Clinic, you’ll receive comprehensive training in the role of a phlebotomist. Our program is designed to provide you with a holistic understanding of the responsibilities and tasks associated with working in the pathology department. You will learn the entire process, from receiving patients at the reception desk to bidding them good bye after successfully collecting blood samples.

                        You will shadow our trainers while they will be drawing blood from real patients in GP clinic. Once our trainer will feel that you are confident in drawing blood so they will give you the opportunity for drawing live blood collection under one-to-one supervision with the patient’s consent.

                        You will also learn NHS / Healthcare Provider’s professional standards, codes of practice, policies and procedure, how to label different sample tubes, which tube you will use for blood test. How to find vein and to avoid the patient from bruises, and much more.

                        Upon completing the course, you will receive a Certificate of Competence, allowing you to work without close supervision as a phlebotomist.

                        Inspire Medical will set the date & time for Part 2 (Advanced Practical Session) on the day of the Part 1 training.

                        Note: You must book Part 2/Advanced Practical Session/Live Blood Session separately.</p>
                        <h1>Learning Objective</h1>
                        <p class="fs-5">After successfully completing this venepuncture training course, the learners will be able to understand the infection control principles during the phlebotomy process. Further, the learners will be able to recognize and acquire the capabilities mentioned in the CHS132 National Occupational Standard for performing phlebotomy. The training course will enable the students to handle the vacutainer system for collecting blood samples. Learners will be able to understand the various complications encountered during this process.

                        </p>
            </div>
        </div>
    </section>



    <section class="container">
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
@endsection
