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
                qualifications that are more affordable than before. Secure your qualification with just a <span class="text-danger fw-bolder">£70</span> initial
                deposit and pay the rest in easy instalments. Plus, enjoy a limited-time <span class="text-danger fw-bolder">30%</span> course discount.</p>
        </div>

        <div class="card" style="border: none;">
            <div class="row px-5 ">

                <div class="col-md-6 p-2 d-flex justify-content-between" style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/111.webp') }}" alt="" style="width: 230px; height: 200px">
                    <div class="px-3 mt-3">
                        <h2>Business Management</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); border-radius: 8px">
                            Explore Courses
                        </button>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex justify-content-between" style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/114.webp') }}" alt="" style="width: 230px; height: 200px">
                    <div class="px-3 mt-3">
                        <h2>Health and Social Care</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); transition: background-color 0.3s, color 0.3s; border-radius: 8px">
                            Explore Courses
                        </button>
                    </div>
                </div>

                <div class="col-md-6 p-2 mr-2 d-flex justify-content-between" style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/112.webp') }}" alt="" style="width: 230px; height: 200px">
                    <div class="px-3 mt-3">
                        <h2>Cyber Security</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); border-radius: 8px">
                            Explore Courses
                        </button>
                    </div>
                </div>

                <div class="col-md-6 p-2 d-flex justify-content-between" style="border: 2px solid grey; margin-bottom: 20px;">
                    <img src="{{ asset('assets/site/113.webp') }}" alt="" style="width: 230px; height: auto">
                    <div class="px-3 mt-3">
                        <h2>Education & Training</h2>
                        <p>Become a healthcare professional this festive season to make a positive impact on people’s lives</p>
                        <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder"
                            style="background-color: rgb(3, 63, 3); transition: background-color 0.3s, transform 0.2s; border-radius: 8px">
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
                    want at a reasonable price with our <span class="text-danger fw-bolder">festive special bundle offer.</span> Get 6 bundle video courses of your
                    desired category at an incredible <span class="text-danger fw-bolder">30% OFF</span> and make this festive season an exciting learning
                    adventure.</p>
            </div>

            <div class="card g-3" style="border: none; background-color: transparent;">
                <div class="card g-3 mb-4" style="border: none; background-color: transparent;">
                    <div class="row px-5 g-3">
                        <div class="col-sm-4 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; padding: 15px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Business-Skills.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <h3>Business Skills</h3>
                                    <p class="fw-bolder">Bundle of 6 – Get 30% OFF</p>
                                    <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Explore Courses
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; padding: 15px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Health-Safety.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <h3>Health & Safety</h3>
                                    <p class="fw-bolder">Bundle of 6 – Get 30% OFF</p>
                                    <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); transition: background-color 0.3s, color 0.3s; border-radius: 8px">
                                        Explore Courses
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 p-2 text-center">
                            <div style="border: 2px solid grey; border-radius: 8px; padding: 15px; background-color: transparent;">
                                <img src="{{ asset('assets/site/Health-and-social-care-4.webp') }}" alt="" style="width: 100%; height: auto;">
                                <div class="px-3 mt-3">
                                    <h3>Health & Social Care</h3>
                                    <p class="fw-bolder">Bundle of 6 – Get 30% OFF</p>
                                    <button class="px-4 py-2 border-0 text-white custom-hover-green me-2 fw-bolder" style="background-color: rgb(3, 63, 3); border-radius: 8px">
                                        Explore Courses
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <footer
        style="background: url('{{ asset('assets/site/preview.jpg') }}') no-repeat center center; background-size: cover; ">
        <div class="text-center p-5 ">
            <img src="{{ asset('assets/site/115.png') }}" alt="" style="width: 180px">
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
            <img src="{{ asset('assets/site/sliderBottom.png') }}" alt="" style="width: 600px"
                class="pb-3">
            <h4 class="text-white">© 2024 – inspirelondoncollege.co.uk – All Rights Reserved

            </h4>
        </div>

    </footer>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>
