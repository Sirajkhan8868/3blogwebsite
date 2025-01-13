<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .custom-hover-green:hover {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .custom-hover:hover {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .custom-hover-green:hover {
            background-color: rgb(0, 82, 0);
            color: rgb(255, 215, 0);
            transform: scale(1.05);
        }

        .custom-hover-red:hover {
            background-color: #dc3545 !important;
            color: white !important;
            transition: background-color 0.3s ease;
        }

        .testimonial-card {
            background: whitesmoke;
            border-radius: 8px;
            padding: 20px;
            height: 100%;
            transition: transform 0.2s;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-initial {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .star-rating {
            color: #ffc107;
        }

        .google-icon {
            width: 30px;
            height: 30px;
        }

        .review-text {
            font-size: 0.95rem;
            line-height: 1.5;
            color: #444;
        }

        .read-more {
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .read-more:hover {
            color: #333;
        }

        .faq-item {
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            padding: 1rem;
            text-align: left;
            background: none;
            border: none;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            background-color: #ffffff;
        }

        .faq-answer {
            display: none;
            padding: 1rem;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            background-color: white;
        }

        .faq-answer.active {
            display: block;
        }

        .plus-icon {
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 0.5rem;
            transition: transform 0.3s;
        }

        .plus-icon.active {
            transform: rotate(45deg);
        }

        .feature-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 2rem 1rem;
            text-align: center;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            margin-bottom: 1rem;
        }

        .feature-title {
            font-size: 1rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .feature-card {
                margin-bottom: 1rem;
            }
        }

        .star {
            position: absolute;
            background-color: white;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        @keyframes moveRight {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100vw);
            }
        }

        @keyframes moveLeft {
            0% {
                transform: translateX(100vw);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes moveUp {
            0% {
                transform: translateY(100vh);
            }

            100% {
                transform: translateY(-100%);
            }
        }

        @keyframes moveDown {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(100vh);
            }
        }


        .star.move-right {
            animation: moveRight 20s linear infinite;
        }

        .star.move-left {
            animation: moveLeft 20s linear infinite;
        }

        .star.move-up {
            animation: moveUp 20s linear infinite;
        }

        .star.move-down {
            animation: moveDown 20s linear infinite;
        }


        footer {
            position: relative;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 text-white"
        style="background: url('{{ asset('assets/site/Website.webp') }}') no-repeat center center; background-size: cover;">
        <div class="text-center">
            <h1 style="font-weight: 900; font-size: 80px">Merry Christmas & <br> Happy New Year</h1>

            <p class="fw-bold mt-3 text-start fs-4">
                Upskill yourself while saving big this holiday season with our festive <br> special offers
                and step into the New Year with endless opportunities
            </p>

            <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                style="background-color: rgb(3, 63, 3); border-radius: 8px">
                View Qualification Offer
            </button>
            <button class="px-4 py-2 border-0 text-black custom-hover fw-bolder" style="border-radius: 8px">
                View Bundle Offer
            </button>
        </div>
    </div>
    <section class="container">
        <div class="text-sec p-5">

            <button class="px-4 mb-3 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                style="background-color: rgb(3, 63, 3); border-radius: 8px">
                View Qualification Offer
            </button>
            <h1>Make Your Dream Career Merry and Bright with Our Festive Qualification Offer</h1>
            <p class="fs-4">It’s never too late to finish the year with a purpose and reach your career goals with our
                Ofqual
                qualifications that are more affordable than before. Secure your qualification with just a <span
                    class="text-danger fw-bolder">£70</span> initial
                deposit and pay the rest in easy instalments. Plus, enjoy a limited-time <span
                    class="text-danger fw-bolder">30%</span> course discount.</p>
        </div>

        <div class="card" style="border: none;">
            <div class="row px-5 g-1">
                <div class="col-md-6 p-3 d-flex justify-content-between"
                    style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/111.webp') }}" alt=""
                        style="width: 250px; height: 200px;border-radius:10px">
                    <div class="px-2 mt-3">
                        <h2>Business Management</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s
                            lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                            Explore Courses
                        </button>
                    </div>
                </div>

                <div class="col-md-6 p-3 d-flex justify-content-between"
                    style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/114.webp') }}" alt=""
                        style="width: 250px; height: 200px;border-radius:10px">
                    <div class="px-2 mt-3">
                        <h2>Health and Social Care</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s
                            lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                            Explore Courses
                        </button>
                    </div>
                </div>

                <div class="col-md-6 p-3 d-flex justify-content-between"
                    style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/112.webp') }}" alt=""
                        style="width: 250px; height: 200px;border-radius:10px">
                    <div class="px-2 mt-3">
                        <h2>Cyber Security</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s
                            lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                            Explore Courses
                        </button>
                    </div>
                </div>

                <div class="col-md-6 p-3 d-flex justify-content-between"
                    style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/113.webp') }}" alt=""
                        style="width: 250px; height: auto; border-radius:10px">
                    <div class="px-2 mt-3">
                        <h2>Education & Training</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s
                            lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                            Explore Courses
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div class="mt-5" style="background-color: ghostwhite;">
        <section class="container">
            <div class="text-sec p-5">
                <button class="px-4 mb-3 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                    style="background-color: rgb(3, 63, 3); border-radius: 8px">
                    Bundle Offer
                </button>
                <h1>Become Skillful for Less with Our Festive Special Bundle Offer </h1>
                <p class="fs-4">This New Year, treat yourself with a gift of knowledge. Learn as many skills as you
                    want at a reasonable price with our <span class="text-danger fw-bolder">festive special bundle
                        offer.</span> Get 6 bundle video courses of your
                    desired category at an incredible <span class="text-danger fw-bolder">30% OFF</span> and make this
                    festive season an exciting learning
                    adventure.</p>
            </div>

            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <div class="row px-5 g-3">
                        <div class="col-sm-4 p-2 text-center">
                            <div
                                style="border: 2px solid grey; border-radius: 8px; padding: 15px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Business-Skills.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <h3>Business Skills</h3>
                                    <p class="fw-bolder">Bundle of 6 – Get 30% OFF</p>
                                    <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                                        Explore Courses
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 p-2 text-center">
                            <div
                                style="border: 2px solid grey; border-radius: 8px; padding: 15px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Health-Safety.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <h3>Health & Safety</h3>
                                    <p class="fw-bolder">Bundle of 6 – Get 30% OFF</p>
                                    <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                                        Explore Courses
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 p-2 text-center">
                            <div
                                style="border: 2px solid grey; border-radius: 8px; padding: 15px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Health-and-social-care-4.webp') }}" alt=""
                                    style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <h3>Health & Social Care</h3>
                                    <p class="fw-bolder">Bundle of 6 – Get 30% OFF</p>
                                    <button class="px-4 py-2 border-0 text-white custom-hover-red me-2 fw-bolder"
                                        style="background-color: rgb(3, 63, 3); border-radius: 8px;">
                                        Explore Courses
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="p-5" style="background-color: rgb(122, 7, 7);">
            <div class="text-sec" style="margin-left: 18rem">
                <h1 class="px-5" style="color: white;">Want to Know More About Our Festive <br>Special Offers?
                </h1>
            </div>
            <div class="d-flex justify-content-center g-3">
                <div>
                    <p class="text-white fs-5" style="margin-right:8rem">Reach out to our friendly team and get your
                        queries resolved quickly to avail these <br> limited-time offers.
                    </p>
                </div>
                <div style="position:relative; top:-20px">
                    <button class="px-4 p-2 text-danger fs-4" style="border-radius:7px; border:none;">
                        <i class="fa-solid fa-phone"></i> Call Now
                    </button>
                    <button class="px-4 p-2 fs-4 "
                        style="background-color: #25D366; color:white; border-radius:7px;border:none">
                        <i class="fab fa-whatsapp" style="margin-right: 5px;"></i>

                        WhatsApp</button>

                </div>
            </div>
        </section>

        <section style="background-color: #ffffff">
            <div class="container py-5">
                <h1 class="text-center mb-5">What Our Students Say About Us</h1>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%202025-01-13%20003416-E2dMHyCdU1j3DzvWHR5H7yodITRtJL.png"
                                        alt="" class="profile-img">
                                    <div>
                                        <h6 class="mb-0">gladys ohi gabriel</h6>
                                        <small class="text-muted">2024-03-13</small>
                                    </div>
                                </div>
                                <img src="https://www.google.com/favicon.ico" alt="Google" class="google-icon">
                            </div>
                            <div class="star-rating mb-2">
                                ★★★★★
                            </div>
                            <p class="review-text mb-2">My decision to enrol with Inspire London College is one of the
                                best in my quest of learning, it has been mind-blowing, I now understand service users
                                better and I...</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="profile-initial bg-primary">A</div>
                                    <div>
                                        <h6 class="mb-0">America erica</h6>
                                        <small class="text-muted">2023-06-27</small>
                                    </div>
                                </div>
                                <img src="https://www.google.com/favicon.ico" alt="Google" class="google-icon">
                            </div>
                            <div class="star-rating mb-2">
                                ★★★★★
                            </div>
                            <p class="review-text mb-2">I recently completed the Level 5 Diploma in Health and Social
                                Care, I am delighted to share my positive experience with others...</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="profile-initial bg-dark">D</div>
                                    <div>
                                        <h6 class="mb-0">Danny Coe</h6>
                                        <small class="text-muted">2018-07-10</small>
                                    </div>
                                </div>
                                <img src="https://www.google.com/favicon.ico" alt="Google" class="google-icon">
                            </div>
                            <div class="star-rating mb-2">
                                ★★★★★
                            </div>
                            <p class="review-text mb-2">I have taken the Business Management, Risk Management and
                                Project Management Level 4 Diploma and on each of these courses the response I have
                                received fro...</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </section>
        <section>
            <div class="container py-5">
                <h1 class="text-center mb-5">Frequently Asked Questions</h1>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row" id="faq-container">
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            <script>
                const faqs = [{
                        question: "Are these discounted courses self-paced?",
                        answer: "Yes, all our discounted courses are completely self-paced. You can learn at your own convenience and take as much time as you need to complete the course materials."
                    },
                    {
                        question: "Are there any hidden fees for these offers?",
                        answer: "No, there are no hidden fees. The price you see is the total amount you'll pay for the course, with all materials and features included."
                    },
                    {
                        question: "How do the instalments work for the qualification courses?",
                        answer: "Our instalment plans allow you to split the course fee into manageable monthly payments. Contact our support team for detailed payment plans."
                    },
                    {
                        question: "What are the benefits of the 6-bundle video courses offer?",
                        answer: "The 6-bundle video courses offer provides comprehensive learning materials, lifetime access, and significant cost savings compared to purchasing courses individually."
                    },
                    {
                        question: "What does the 30% course discount include?",
                        answer: "The 30% discount applies to the full course price and includes all course materials, assessments, and certificates upon completion."
                    },
                    {
                        question: "Is there any support available during the courses?",
                        answer: "Yes, we provide full support throughout your learning journey, including access to tutors, discussion forums, and technical assistance."
                    }
                ];

                function createFAQItems() {
                    const faqContainer = document.getElementById('faq-container');

                    faqs.forEach((faq, index) => {
                        const faqItem = document.createElement('div');
                        faqItem.className = 'col-md-6 mb-4';
                        faqItem.innerHTML = `
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span class="plus-icon">+</span>
                                    <span class="question-text">${faq.question}</span>
                                </button>
                                <div class="faq-answer">
                                    <p class="mb-0">${faq.answer}</p>
                                </div>
                            </div>
                        `;
                        faqContainer.appendChild(faqItem);
                    });
                }

                function handleFAQClicks() {
                    document.querySelectorAll('.faq-question').forEach(button => {
                        button.addEventListener('click', function() {
                            const currentAnswer = this.nextElementSibling;
                            const currentIcon = this.querySelector('.plus-icon');

                            document.querySelectorAll('.faq-answer').forEach(answer => {
                                if (answer !== currentAnswer && answer.classList.contains('active')) {
                                    answer.classList.remove('active');
                                    answer.previousElementSibling.querySelector('.plus-icon').classList
                                        .remove('active');
                                }
                            });

                            currentAnswer.classList.toggle('active');
                            currentIcon.classList.toggle('active');
                        });
                    });
                }

                document.addEventListener('DOMContentLoaded', function() {
                    createFAQItems();
                    handleFAQClicks();
                });
            </script>
        </section>

    </div>

    <section>
        <div class="container py-5">
            <h1 class="text-center mb-5">Why Learn with Us?</h1>

            <div class="row g-4">
                <div class="col-md-4 col-lg-2">
                    <div class="feature-card" style="border: 2px dashed grey; padding: 10px;">
                        <img src="{{ asset('assets/site/icon5.svg') }}" alt="Flexible Learning" class="feature-icon">
                        <p class="feature-title">Flexible Online Learning</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="feature-card" style="border: 2px dashed grey; padding: 10px;">
                        <img src="{{ asset('assets/site/icon2.png') }}" alt="Instant Access" class="feature-icon">
                        <p class="feature-title">Instant Course Access</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="feature-card" style="border: 2px dashed grey; padding: 10px;">
                        <img src="{{ asset('assets/site/icon4.png') }}" alt="Tutor Support" class="feature-icon">
                        <p class="feature-title">Dedicated Tutor Support</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="feature-card" style="border: 2px dashed grey; padding: 10px;">
                        <img src="{{ asset('assets/site/icon6.svg') }}" alt="Assessment" class="feature-icon">
                        <p class="feature-title">Exam-free Assessment</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="feature-card" style="border: 2px dashed grey; padding: 10px;">
                        <img src="{{ asset('assets/site/icon-enrollment.png') }}" alt="24/7 Access"
                            class="feature-icon">
                        <p class="feature-title">24/7 Learning Material Access</p>
                    </div>
                </div>


                <div class="col-md-4 col-lg-2">
                    <div class="feature-card" style="border: 2px dashed grey; padding: 10px;">
                        <img src="{{ asset('assets/site/icon-award.png') }}" alt="Certificate" class="feature-icon">
                        <p class="feature-title">Certificate on Course Completion</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const cards = document.querySelectorAll('.feature-card');

                function checkScroll() {
                    cards.forEach(card => {
                        const cardTop = card.getBoundingClientRect().top;
                        if (cardTop < window.innerHeight) {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }
                    });
                }

                checkScroll();

                window.addEventListener('scroll', checkScroll);
            });
        </script>
    </section>


    <footer style="background: url('assets/site/preview.jpg') no-repeat center center; background-size: cover;">
        <div class="text-center p-5">
            <img src="assets/site/115.png" alt="Logo" style="width: 180px">
            <div class="d-flex justify-content-center text-start gap-2 mt-4 p-3">
                <a href="#" class="btn p-0 bg-primary"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;">
                    <i class="fab fa-facebook-f" style="font-size: 20px; color: white;"></i>
                </a>
                <a href="#" class="btn p-0"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #25d366;">
                    <i class="fab fa-whatsapp" style="font-size: 20px; color: white;"></i>
                </a>
                <a href="#" class="btn p-0"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #0077b5;">
                    <i class="fab fa-linkedin-in" style="font-size: 20px; color: white;"></i>
                </a>
                <a href="#" class="btn p-0"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #1DA1F2;">
                    <i class="fab fa-twitter" style="font-size: 20px; color: white;"></i>
                </a>
                <a href="#" class="btn p-0"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #C13584;">
                    <i class="fab fa-instagram" style="font-size: 20px; color: white;"></i>
                </a>
                <a href="#" class="btn p-0"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: red;">
                    <i class="fab fa-youtube" style="font-size: 20px; color: white;"></i>
                </a>
                <a href="#" class="btn p-0"
                    style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #1DA1F2;">
                    <i class="fab fa-twitter" style="font-size: 20px; color: white;"></i>
                </a>
            </div>
            <img src="assets/site/sliderBottom.png" alt="Slider Bottom" style="width: 600px" class="pb-3">
            <h4 class="text-white">© 2024 – inspirelondoncollege.co.uk – All Rights Reserved</h4>
        </div>
    </footer>

    <script>
        function createStar() {
            const star = document.createElement('div');
            star.className = 'star';

            const directions = ['moveRight', 'moveLeft', 'moveUp', 'moveDown'];
            const direction = directions[Math.floor(Math.random() * directions.length)];
            const size = Math.random() * 3 + 1;
            const duration = Math.random() * 3 + 2;

            star.style.top = `${Math.random() * 100}%`;
            star.style.left = `${Math.random() * 100}%`;
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;
            star.style.animation = `${direction} ${duration}s linear infinite`;

            return star;
        }

        function addStars() {
            const footer = document.querySelector('footer');
            setInterval(() => {
                const star = createStar();
                footer.appendChild(star);
                setTimeout(() => {
                    footer.removeChild(star);
                }, 5000);
            }, 200);
        }

        document.addEventListener('DOMContentLoaded', addStars);
    </script>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>
