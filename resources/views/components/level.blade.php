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
            margin-left: 60px;
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
                    <img src="{{ asset('assets/site/phlebotomy-part-1n.webp') }}" alt="Phlebotomy Image"
                        class="img-fluid rounded" style="max-width: 100%; border-radius: 20px;">
                </div>

                <div class="col-12 col-md-6 mt-4 mt-md-0 text-start">
                    <h3 class="px-3 px-md-5">Live Bloods Practical Session (One Session)</h3>
                    <div class="row g-3 d-flex align-items-stretch">
                        <div class="col-12 col-md-4">
                            <div class="card border-dotted p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px solid #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6>COURSE LEVEL</h6>
                                <h4 class="text-primary p-3">Level 3</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card border-dotted p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px dotted #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6 class="pb-3">COURSE TYPE</h6>
                                <h4 class="text-primary p-2">CPD Accredited Course</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card border-dotted p-4 text-center h-100"
                                style="background-color: #ffffff; border: 1px dotted #f8f7f7; border-radius: 0px 13px 13px 13px;">
                                <h6>AWARDING BODY</h6>
                                <h4 class="text-primary fs-3 p-3">Step Ahead CPD</h4>
                            </div>
                        </div>
                    </div>

                    <h1 class="text-center pt-3 text-danger">£199.00 <span class="text-muted" style="text-decoration: line-through;">£80.00</span></h1>
                    <div class="d-flex justify-content-center px-3 px-md-5 pb-4">
                        <input type="number" class="form-control quantity-input text-center p-2 fs-4 fw-bold text-danger"
                            value="1" min="1" max="10" id="quantity"
                            style="max-width: 100px; border-radius: 20px 0 0 20px; border: 2px solid #f51ab3;">
                        <button class="btn btn-primary fs-5 ms-2 w-100" onclick="addToBasket()">Add to basket</button>
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
                style="width: 100%; max-width: 500px; height: 400px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6); border-radius: 0px 30px 30px 0px; line-height: 50px; border: none; background-color:#eaf1f7; position:relative; top:0px;left:0px">
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
                        <h1>Learning Objective</h1>
                        <p class="fs-5">After successfully completing this venepuncture training course, the learners will be able to understand the infection control principles during the phlebotomy process. Further, the learners will be able to recognize and acquire the capabilities mentioned in the CHS132 National Occupational Standard for performing phlebotomy. The training course will enable the students to handle the vacutainer system for collecting blood samples. Learners will be able to understand the various complications encountered during this process.

                        </p>

                        <form style="background-color: #e6f1fc; border-radius: 20px;" class="container w-100 w-md-75 mx-auto">
                            <div class="form-row p-3 p-md-5">
                                <div class="text-center mb-4">
                                    <h1 class="fw-bolder" style="color: #64a1da;">Enquire Now!</h1>
                                    <p class="fs-5">For further details about this course, send us a message through this enquiry form.</p>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="validationServer01" class="p-1 fs-5">First Name</label>
                                    <input type="text" class="form-control is-valid p-3" id="validationServer01" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="validationServer02" class="p-1 fs-5">Email</label>
                                    <input type="email" class="form-control is-valid p-3" id="validationServer02" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="validationServer03" class="p-1 fs-5">Phone</label>
                                    <input type="number" class="form-control is-valid p-3" id="validationServer03" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="validationServer04" class="p-1 fs-5">Your Message</label>
                                    <textarea class="form-control p-3" id="validationServer04" rows="5" required></textarea>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input is-invalid text-secondary" type="checkbox" id="invalidCheck1" required>
                                    <label class="form-check-label" for="invalidCheck1">
                                        I agree to ILC <span style="color: #64a1da;">Privacy Policy</span> and <span style="color: #64a1da;">Terms and Conditions</span>.
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input is-invalid" type="checkbox" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        I would like to receive further offers.
                                    </label>
                                </div>

                                <div class="text-lg-start text-center">
                                    <button class="btn mt-3 px-lg-5 px-3 fs-5 text-white w-md-100 w-lg-auto" type="submit" style="background-color: #f06ac8;">
                                        Submit Form
                                    </button>
                                </div>

                            </div>
                        </form>

            </div>

        </div>
    </section>

<section>

</section>

@endsection
