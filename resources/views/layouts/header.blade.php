<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


     <style>
         footer {
            background-color: rgb(95, 93, 93);
        }
     </style>

</head>
<body>
    <header>
        <div class="header-sec d-flex justify-content-between align-items-center p-3"
            style="background-image: url('{{ asset('assets/site/Cover.jpg') }}'); background-size: cover; background-position: center;">

            <div class="w-75 d-flex justify-content-center">
                <h3 class="text-white fw-bold text-center" style="padding-left: 55px">
                    Pay <span class="text-warning">£70</span> to start a Qualification + Get
                    <span class="text-warning">30%</span> Off on Bundle Video Courses.
                </h3>
            </div>
            <a href="{{ route('offer') }}">
                <button type="button" style="border: 4px solid white;" class="btn btn-danger fw-bold px-4">
                    Click Here
                </button>
            </a>
        </div>

        <div class="header-sec d-flex justify-content-between align-items-center p-3"
            style="background-color:rgb(235, 54, 180)">
            <div class="w-50 text-center d-flex fw-bold text-white"
                style="padding-left: 50px; justify-content: center; padding-top: 13px">
                <p>Book Today | Level 3 Phlebotomy Part 1 & Part 2 | Only £350 and Get Health & Safety Course Free
                </p>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('booksnow') }}">
                    <button type="button" class="btn btn-info border-0 text-white fw-bold px-4"
                        style="border-radius: 50px; padding: 10px 0px">
                        Booking Now
                    </button>
                </a>
                <a href="{{ route('contact') }}">
                    <button type="button" class="btn btn-info border-0 text-white fw-bold px-4 "
                        style="border-radius: 50px; padding: 10px 0">
                        Contact Us
                    </button>
                </a>
                <form class="d-flex " role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            style="border-radius: 50px 0 0 50px;">
                        <button class="btn btn-info text-white fw-bold" type="submit"
                            style="border-radius: 0 50px 50px 0;">Search</button>
                    </div>
                </form>
            </div>
        </div>


    </header>


    @yield('content')

    <footer>
        <div class="container py-4">
            <div class="row flex-wrap">
                <div class="col-sm-3">
                    <h3 class="text-white fw-bolder">Information</h3>
                    <ul class="text-white px-1" style="list-style: none">
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Terms & Conditions</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Cookie Policy</a></li>
                        <li><a href="#" class="text-white text-decoration-none">FAQ's</a></li>
                        <li><a href="#" class="text-white text-decoration-none">How to Pay</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <h3 class="text-white fw-bolder">Quick Links</h3>
                    <ul class="text-white text-decoration-none px-1" style="list-style: none">
                        <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Fees & Pricing</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Apply For Certificate</a>
                        </li>
                        <li><a href="#" class="text-white text-decoration-none">Apply Student Discount
                                Card</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Apply H&S Care
                                Certificate</a>
                        </li>
                        <li><a href="#" class="text-white text-decoration-none">Request Info</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Jobs</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <h3 class="text-white fw-bolder">Popular Courses</h3>
                    <p class="text-white">Level 3 Certificate in Phlebotomy (Part 1) Phlebotomy Course</p>
                    <button class="px-3 p-2 fs-5 border-0" style="border: 18px solid green">Review as on <img src="{{ asset('assets/site/star-removebg-preview.png') }}" alt="" style="width: 30px; "><span class="fw-bolder">Trustpilot</span></button>
                </div>

                <div class="col-sm-3">
                    <h3 class="text-white fw-bolder">Contact Info</h3>
                    <ul class="text-white px-1" style="list-style: none">
                        <li>Address: 123 Example Street, City</li>
                        <li>Email: info@example.com</li>
                        <li>Phone: +123-456-7890</li>
                    </ul>
                    <div>
                        <a href=""><img src="{{ asset('assets/site/fB.png') }}" alt="" style="width: 30px"></a>
                        <a href=""><img src="{{ asset('assets/site/whatsapp-removebg-preview.png') }}" alt="" width="30px"></a>
                        <a href=""><img src="{{ asset('assets/site/linkdin.png') }}" alt="" width="30px"></a>
                        <a href=""><img src="{{ asset('assets/site/youtube.png') }}" alt="" width="30px"></a>
                        <a href=""><img src="{{ asset('assets/site/instagram.jpg') }}" alt="" width="30px"></a>
                        <a href=""><img src="{{ asset('assets/site/fB.png') }}" alt="" style="width: 30px"></a>
                    </div>
                </div>
            </div>

            <div class="text-center text-white mt-4">
                <p>© Copyright 2013 – 2024
                    <span class="text-danger">Inspire London College </span> All Rights Reserved | Powered by
                    <span class="text-danger">Whoopit Agency</span>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
