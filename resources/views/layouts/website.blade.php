<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        @media (min-width: 768px) {
            .custom-md-margin {
                margin-right: 5rem;
            }
        }

        .top-banner {
            background-image: url('assets/site/Chistmas-scaled.webp');
            background-size: cover;
            background-position: top;
        }

        .secondary-header {
            background-color: rgb(235, 54, 180);
        }

        .navbar-nav .nav-link {
            color: #333;
            font-size: 0.9rem;
        }

        .category-section .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin: 10px 10px;
        }

        .category-section .category-card {
            flex: 0 0 calc(13.66% - 1rem);
            max-width: calc(13.66% - 1rem);
            min-width: 200px;
            height: 10rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0.5rem;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .category-card a {
            display: block;
            height: 100%;
            color: inherit;
            text-decoration: none;
        }

        .category-card i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .category-card:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .category-section .category-card {
                flex: 0 0 calc(33.33% - 1rem);
            }
        }


        @media (max-width: 480px) {
            .category-section .category-card {
                flex: 0 0 calc(50% - 1rem);
            }
        }

        .category-icon {
            color: #000;
            transition: color 0.3s ease;
        }


        .category-card:hover .category-icon {
            color: #68adf7;
        }


        .news-ticker {
            background-color: #00bfff;
            height: 70px;
            overflow: hidden;
            display: flex;
            align-items: stretch;
        }

        .news-button {
            background-color: #ff0099;
            color: #ffffff;
            border: none;
            height: 100%;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s;
            padding: 0 15px;
        }

        .news-button:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .news-content {
            background-color: #00bcd4;
            height: 100%;
            overflow: hidden;
        }

        .scroll-text {
            color: #ffffff;
            font-weight: 500;
            white-space: nowrap;
            padding: 0 20px;
            animation: scroll 20s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @media (max-width: 768px) {
            .news-button {
                font-size: 12px;
                padding: 0 10px;
            }
        }

        .social-buttons {
            position: fixed;
            bottom: 20px;
            left: 0;
            right: 0;
            padding: 15px;
            background-color: white;
            border-top: 1px solid #dee2e6;
        }

        .social-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
        }

        .whatsapp-btn {
            background-color: #25D366;
        }

        .messenger-btn {
            background-color: #0084FF;
        }

        .offcanvas {
            width: 280px;
        }

        .offcanvas-header .btn-close {
            background-color: #ff007f;
            opacity: 1;
        }

        .navbar {
            padding: 0.5rem 2rem;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 50px;
        }

        .nav-link {
            color: #00bcd4 !important;
            padding: 0.5rem 1.5rem !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #666 !important;

        }

        .icon-hover:hover {
            color: #00bcd4;
            transition: color 0.1s ease;
        }

        .btn-platform {
            background-color: #e91e63;
            color: white;
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
            margin-right: 10px;
        }

        .btn-vle {
            background-color: #00bcd4;
            color: white;
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
        }

        .level-6-title {
            color: #C13584;
            transition: color 0.1s ease;
        }

        .level-6-title:hover {
            color: #00C8E8;
        }

        .position-relative {
            height: 100%;
            display: flex;
            align-items: center;
        }

        .explore-btn {
            background-color: rgb(235, 54, 180);
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            text-align: center;
            transition: all 0.3s ease;
        }

        .explore-btn:hover {
            background-color: rgb(210, 30, 150);
            color: #fff;
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: scale(1.1);
            opacity: 0.9;
        }

        .social-icon:hover.bg-primary {
            background-color: #006bb3;
        }

        .social-icon:hover[style*="background-color: #25d366"] {
            background-color: #128c7e;
        }

        .social-icon:hover[style*="background-color: #0077b5"] {
            background-color: #006097;
        }

        .social-icon:hover[style*="background-color: #1DA1F2"] {
            background-color: #0d8bca;
        }

        .social-icon:hover[style*="background-color: #C13584"] {
            background-color: #9b2a6f;
        }

        .social-icon:hover[style*="background-color: red"] {
            background-color: #cc0000;
        }

        .category-card {
            background: white;
            padding: 1rem;
            text-align: center;
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .category-icon {
            font-size: 2rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .border-dotted {
            border: 2px dotted #343a40;
        }

        .custom-hover:hover {
            background-color: rgb(241, 41, 175);
            color: #ffffff;
        }

        .navbar-nav a {
            color: #17a2b8;
        }

        .star-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .star {
            position: absolute;
            background-image: url('path/to/your/star-image.png');
            background-size: contain;
            background-repeat: no-repeat;
            width: 40px;
            height: 40px;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
        }

        @keyframes twinkle {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(1.5);
            }
        }

        @keyframes move-up {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-100vh);
            }
        }

        @keyframes move-down {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(100vh);
            }
        }

        @keyframes move-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100vw);
            }
        }

        @keyframes move-right {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(100vw);
            }
        }

        .move-up {
            animation-name: twinkle, move-up;
            animation-duration: 50s, 25s;
        }

        .move-down {
            animation-name: twinkle, move-down;
            animation-duration: 50s, 25s;
        }

        .move-left {
            animation-name: twinkle, move-left;
            animation-duration: 50s, 25s;
        }

        .move-right {
            animation-name: twinkle, move-right;
            animation-duration: 50s, 25s;
        }

        .category-card {
            background: #faf8f8;
            border-radius: 8px;
            padding: 3rem 2rem;
            text-align: center;
            transition: transform 0.2s;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: #e6f0ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .icon-circle img {
            width: 32px;
            height: 32px;
        }

        .see-courses-btn {
            background-color: var(--primary-color);
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: opacity 0.2s;
        }

        .see-courses-btn:hover {
            opacity: 0.9;
            color: white;
        }

        .view-all-btn {
            background-color: var(--primary-color);
            border: none;
            padding: 0.5rem 2rem;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            float: right;
        }

        .view-all-btn:hover {
            opacity: 0.9;
            color: white;
        }

        .curved-bg {
            background: #00bfff;
            border-radius: 0 0 50% 50%;
            padding: 4rem 1rem 8rem;
            text-align: center;
            color: white;
        }

        .card-container {
            margin-top: -6rem;
        }


        .flip-card {
            perspective: 1000px;
            height: 250px;
            margin-bottom: 1rem;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 1rem;
            box-shadow: 0 8px 8px rgba(168, 16, 16, 0.1);
        }

        .flip-card-front {
            background: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .flip-card-back {
            background: rgba(243, 134, 196, 0.7);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            text-align: center;
        }

        .img-white {
            filter: brightness(0) invert(1);
            width: 60px;
            height: auto;
            padding: 10px;
        }


        .flip-card-front .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
        }

        .icon {
            width: 60px;
            height: 60px;
            background: #ff1493;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .icon svg {
            width: 30px;
            height: 30px;
            color: white;
        }

        .hover-container {
            position: relative;
        }

        .hover-container:hover .more-text {
            display: block;
        }

        .more-text {
            display: none;
            padding-top: 10px;
        }

        .cards-container {
            width: 18rem;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .card-container:hover {
            transform: translateY(-5px);
        }

        .hover-text {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            opacity: 0;
        }

        .card-container:hover .hover-text {
            max-height: 100px;
            opacity: 1;
        }

        .card:hover .hover-img {
            transform: scale(1.01);
            transition: transform 0.1s ease;
        }

        .card-img-wrapper {
            position: relative;
        }

        .hover-img {
            transition: transform 0.1s ease;
        }

        .card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .custom-hover:hover {
            background-color: #ff1493 !important;
        }

       @keyframes scrollUp {
            from {
                bottom: 0;
            }
            to {
                bottom: 100%;
            }
        }


        .footer-container {
            position: relative;
            overflow: hidden;
            background-color: rgb(36, 35, 35);
        }

        .star {
            position: absolute;
            background-color: white;
            border-radius: 50%;
            animation-duration: 20s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @keyframes move-up {
            from {
                transform: translateY(0);
                opacity: 1;
            }

            to {
                transform: translateY(-100vh);
                opacity: 0;
            }
        }

        @keyframes move-down {
            from {
                transform: translateY(0);
                opacity: 1;
            }

            to {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        @keyframes move-left {
            from {
                transform: translateX(0);
                opacity: 1;
            }

            to {
                transform: translateX(-100vw);
                opacity: 0;
            }
        }

        @keyframes move-right {
            from {
                transform: translateX(0);
                opacity: 1;
            }

            to {
                transform: translateX(100vw);
                opacity: 0;
            }
        }

        .move-up {
            animation-name: move-up;
        }

        .move-down {
            animation-name: move-down;
        }

        .move-left {
            animation-name: move-left;
        }

        .move-right {
            animation-name: move-right;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="top-banner">
                <div class="container">
                    <div class="row align-items-center py-3">
                        <div class="col-md-9 text-center text-md-start">
                            <h3 class="text-white fw-bold">
                                Pay <span class="text-warning">£70</span> to start a Qualification + Get
                                <span class="text-warning">30%</span> Off on Bundle Video Courses.
                            </h3>
                        </div>
                        <div class="col-md-3 text-center text-md-end mt-3 mt-md-0 ">
                            <a href="/christmas" class="btn btn-danger px-4 "
                                style="border: 3px solid white; font-weight:600">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondary-header py-3">
                <div class="px-md-4">
                    <div class="row align-items-center">
                        <div class="col-lg-7 text-center text-lg-start mb-3 mb-lg-0">
                            <p class="text-white mb-0 fs-5 fw-medium">
                                Book Today | Level 3 Phlebotomy Part 1 & Part 2 | Only £350 Get Health & Safety Course
                                Free
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-lg-end gap-2">
                                <a href="{{ route('booksnow') }}" class="btn btn-info text-white fw-bold px-4 py-2 rounded-pill">Book
                                    Now</a>
                                <a href="/contact"
                                    class="btn btn-info text-white fw-bold px-4 py-2 rounded-pill">Contact Us</a>
                                <form class="d-flex mt-2 mt-md-0" role="search">
                                    <div class="input-group">
                                        <input class="form-control rounded-start-pill" type="search"
                                            placeholder="Search" aria-label="Search">
                                        <button class="btn btn-info text-white fw-bold rounded-end-pill"
                                            type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="#">
                    <img src="assets/site/ILC-logo-1024x616.webp" alt="Inspire London College Logo"
                        style="width: 150px; height: auto;">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto d-flex flex-row">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Endorsed Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">CPD Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Phlebotomy</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Ofqual Qualifications</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">CPD Video Training</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Care Courses</a>
                        </li>
                    </ul>
                    <div class="d-none d-lg-flex align-items-center gap-2">
                        <button class="btn text-white py-2 px-4"
                            style="background-color: #FF007F; border-radius: 50px; font-size: 0.9rem;">
                            Learning Platform
                        </button>
                        <button class="btn btn-info text-white px-3 py-2"
                            style="border-radius: 50px; width: 180px; font-size: 0.9rem;">
                            VLE
                        </button>
                    </div>
                </div>
            </nav>



            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" href="#endorsedCoursesCollapse">
                                Endorsed Courses
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="collapse" id="endorsedCoursesCollapse">
                                <ul class="nav flex-column ms-3 ">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('accounting') }}">Accounting and
                                            Finance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin
                                            Secretarial &
                                            PA</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('business') }}">Business
                                            Management</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('human') }}">HR
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('leadership') }}">Leadership $ management</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" href="#cpdCoursesCollapse">
                                CPD Courses
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="collapse" id="cpdCoursesCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('accounting') }}">Accounting $ Finance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('beauty') }}">Beauty
                                            Therapy</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('childphychology') }}">Child Psychology</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('human') }}">HR
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('supply') }}">Supply
                                            Chain Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('workplace') }}">Workplace Management</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" href="#phlebotomyCollapse">
                                Phlebotomy
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="collapse" id="phlebotomyCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('booksnow') }}">Level 3
                                            Certicate Phebotomy (part 2 $ 2) </a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('level') }}">Level 3
                                            Certicate Phelotomy (Part 2)</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('level') }}">Phebotmist Placement</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="">Live Blood Practical</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" href="#ofqualCollapse">
                                Ofqual Qualifications
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="collapse" id="ofqualCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('business') }}">Business
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('cyber') }}">Cyber
                                            Security </a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('education') }}">Education $ training </a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('health') }}">Healt $
                                            Safety</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" href="#videoTrainingCollapse">
                                CPD Video Training
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="collapse" id="videoTrainingCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('business') }}">Business
                                            Skills</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('health') }}">Health $
                                            Safety </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Professional
                                            Developer</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" href="#careCoursesCollapse">
                                Care Courses
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="collapse" id="careCoursesCollapse">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('mandatory') }}">Manadatory</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('additional') }}">Additional Courses</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <button class="btn text-white py-2 px-4 w-100 mb-2"
                            style="background-color: #FF007F; border-radius: 50px; font-size: 0.9rem;">
                            Learning Platform
                        </button>
                        <button class="btn btn-info text-white px-3 py-2 w-100"
                            style="border-radius: 50px; font-size: 0.9rem;">
                            VLE
                        </button>
                    </div>
                </div>
                <div class="social-buttons d-flex justify-content-around">
                    <a href="#" class="social-button whatsapp-btn">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="social-button messenger-btn">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>
                </div>
            </div>

            <div class="category-section bg-white" id="categorySection" style="display:none;">
                <div class="row">
                </div>
            </div>
            <div class="bg-danger">

                <div class="news-ticker px-lg-3 d-flex align-items-center">
                    <button class="news-button">Latest News</button>
                    <div class="news-content flex-grow-1 d-flex align-items-center">
                        <div class="scroll-text">
                            We are now Endorsed by Skills for Care | Breaking News: New Features Released | Important
                            Update: System Maintenance Scheduled
                        </div>
                    </div>
                    <img src="{{ asset('assets/site/Skill-for-care.webp') }}" alt=""
                        style="width: 145px; height:auto">
                </div>



                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const categorySection = document.getElementById('categorySection');
                        const navItems = document.querySelectorAll('.navbar-nav .dropdown');
                        let isHovering = false;

                        const categories = {
                            'Endorsed Courses': [{
                                    name: 'Accounting & Finance',
                                    icon: 'fas fa-calculator',
                                    route: '/accounting'
                                },
                                {
                                    name: 'Admin & Secretarial',
                                    icon: 'fas fa-user-cog',
                                    route: '/admin'
                                },
                                {
                                    name: 'Business Management',
                                    icon: 'fas fa-hands-helping',
                                    route: '/business'
                                },
                                {
                                    name: 'HR Management',
                                    icon: 'fas fa-user-tie',
                                    route: '/human'
                                },
                                {
                                    name: 'Leadership & Management',
                                    icon: 'fas fa-user-check',
                                    route: '/leadership'
                                },
                                {
                                    name: 'Project Management',
                                    icon: 'fas fa-project-diagram',
                                    route: '/project'
                                }
                            ],
                            'CPD Courses': [{
                                    name: 'Accounting & Finance',
                                    icon: 'fas fa-calculator',
                                    route: '/accounting'
                                },
                                {
                                    name: 'Beauty Therapy',
                                    icon: 'fas fa-leaf',
                                    route: '/beauty'
                                },
                                {
                                    name: 'Child Psychology',
                                    icon: 'fas fa-child',
                                    route: '/childphychology'
                                },
                                {
                                    name: 'HR Management',
                                    icon: 'fas fa-user-tie',
                                    route: '/human'
                                },
                                {
                                    name: 'Supply Chain Management',
                                    icon: 'fas fa-link',
                                    route: '/supply'
                                },
                                {
                                    name: 'Workplace Management',
                                    icon: 'fas fa-project-diagram',
                                    route: '/workplace'
                                }
                            ],
                            'Phlebotomy': [{
                                    name: 'Phlebotomy Level 3 Part 1 & 2',
                                    icon: 'fas fa-syringe',
                                    route: '/booksnow'
                                },
                                {
                                    name: 'Phlebotomist Placement',
                                    icon: 'fas fa-hands-helping',
                                    route: '/placement-programme'
                                },
                                {
                                    name: 'Blood Level',
                                    icon: 'fas fa-vials',
                                    route: '/level'
                                }
                            ],
                            'Ofqual Qualifications': [{
                                    name: 'Business Management',
                                    icon: 'fas fa-briefcase',
                                    route: '/business'
                                },
                                {
                                    name: 'Cyber Security',
                                    icon: 'fas fa-unlock-alt',
                                    route: '/cyber'
                                },
                                {
                                    name: 'Education & Training',
                                    icon: 'fas fa-chalkboard-teacher',
                                    route: '/education'
                                },
                                {
                                    name: 'Health & Safety',
                                    icon: 'fas fa-heartbeat',
                                    route: '/health'
                                }
                            ],
                            'CPD Video Training': [{
                                    name: 'Business Skills',
                                    icon: 'fas fa-briefcase',
                                    route: '/business'
                                },
                                {
                                    name: 'Health & Safety',
                                    icon: 'fas fa-heartbeat',
                                    route: '/health'
                                },
                            ],
                            'Care Courses': [{
                                    name: 'Mandatory Training',
                                    icon: 'fas fa-file-alt',
                                    route: '/mandatory'
                                },
                                {
                                    name: 'Additional Courses',
                                    icon: 'fas fa-plus-circle',
                                    route: '/additional'
                                }
                            ]
                        };

                        function loadCategories(categoryName) {
                            const row = categorySection.querySelector('.row');
                            row.innerHTML = '';

                            const catList = categories[categoryName] || [];
                            let rowContent = '';

                            catList.forEach(cat => {
                                rowContent += `
                           <div class="card text-center category-card bg-grey">
                         <a href="${cat.route}" class="text-decoration-none text-dark d-flex flex-column justify-content-center align-items-center h-100">
                         <i class="${cat.icon} category-icon"></i>
                        <div>${cat.name}</div>
                             </a>
                          </div>
                          `;
                            });

                            rowContent += `
                        <div class="card text-center category-card">
                            <a href="/all-categories" class="text-decoration-none text-dark d-flex flex-column justify-content-center align-items-center h-100">
                                <i class="fas fa-th category-icon"></i>
                                <div>All Categories</div>
                            </a>
                        </div>`;

                            row.innerHTML = rowContent;
                        }

                        function showCategorySection(categoryName) {
                            loadCategories(categoryName);
                            categorySection.style.display = 'block';
                        }

                        function hideCategorySection() {
                            if (!isHovering) {
                                categorySection.style.display = 'none';
                            }
                        }

                        navItems.forEach(item => {
                            const dropdownLink = item.querySelector('.nav-link.dropdown-toggle');
                            dropdownLink.addEventListener('mouseenter', () => {
                                isHovering = true;
                                const categoryName = dropdownLink.textContent.trim();
                                showCategorySection(categoryName);
                            });

                            item.addEventListener('mouseleave', () => {
                                isHovering = false;
                                setTimeout(hideCategorySection, 300);
                            });
                        });

                        categorySection.addEventListener('mouseenter', () => {
                            isHovering = true;
                        });

                        categorySection.addEventListener('mouseleave', () => {
                            isHovering = false;
                            setTimeout(hideCategorySection, 300);
                        });

                        document.addEventListener('click', (event) => {
                            if (!categorySection.contains(event.target) && !event.target.closest('.dropdown')) {
                                isHovering = false;
                                hideCategorySection();
                            }
                        });
                    });
                </script>
        </header>



        <section>
            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden bg-info"
                style="min-height: 70vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/bg.webp') }}'); background-size: cover; background-position: center;">
                <div class="star-container position-absolute w-100 h-100"></div>

                <div class="card p-3 p-lg-4 my-4 mx-2 mx-lg-0"
                    style="max-width: 90%; border-radius: 40px; background: transparent; border: 10px solid white; z-index: 2;">
                    <div class="card-body text-center">
                        <h1 class="card-title text-white fw-bolder pb-2">Learn & Get Endorsed</h1>
                        <h3 class="card-subtitle mb-2 text-white pb-2">Distance Learning Courses UK</h3>
                        <p class="card-text text-white fs-6 pb-2">
                            A flexible and convenient way of learning new skills. Find the right Distance Learning
                            Courses and CPD Training <br> for you.
                        </p>
                        <a href="#" class="btn mb-2 explore-btn text-white fw-bold"
                            style="background-color: rgb(235, 54, 180); padding: 8px 18px; border-radius: 5px; text-decoration: none;">
                            Explore Our Courses
                            <i class="fa-solid fa-arrow-right ms-2" style="font-size: 1.2em;"></i>
                        </a>

                        <div class="mt-3 d-flex justify-content-center gap-2 flex-wrap">
                            <a href="#"
                                class="btn social-icon bg-primary p-0 d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px">
                                <i class="fab fa-facebook-f text-white" style="font-size: 18px;"></i>
                            </a>
                            <a href="#" class="btn social-icon d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;  background-color: #25d366;">
                                <i class="fab fa-whatsapp text-white" style="font-size: 18px;"></i>
                            </a>
                            <a href="#" class="btn social-icon d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;  background-color: #0077b5;">
                                <i class="fab fa-linkedin-in text-white" style="font-size: 18px;"></i>
                            </a>
                            <a href="#" class="btn social-icon d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;  background-color: #1DA1F2;">
                                <i class="fab fa-twitter text-white" style="font-size: 18px;"></i>
                            </a>
                            <a href="#" class="btn social-icon d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;  background-color: #C13584;">
                                <i class="fab fa-instagram text-white" style="font-size: 18px;"></i>
                            </a>
                            <a href="#" class="btn social-icon d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px; background-color: red;">
                                <i class="fab fa-youtube text-white" style="font-size: 18px;"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container mt-5 position-relative" style="top: -100px;">
                <div class="row g-4 justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="card text-center shadow-lg"
                            style="width: 100%; max-width: 24rem; border-radius: 10px;">
                            <div class="card-body d-flex align-items-center p-4 gap-2">
                                <div>
                                    <i class="fas fa-users"
                                        style="font-size: 50px; color: #FF007F; width: 70px; text-align: center;"></i>
                                </div>
                                <div class="px-3">
                                    <h4 class="card-title" style="color: #FF007F; font-weight: 700;">65,545+</h4>
                                    <p class="card-text" style="font-weight: 700;">Enrolled Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="card text-center shadow-lg"
                            style="width: 100%; max-width: 24rem; border-radius: 10px;">
                            <div class="card-body d-flex align-items-center p-4 gap-2">
                                <div>
                                    <i class="fas fa-book-open" style="font-size: 50px; color: #FF007F;"></i>
                                </div>
                                <div class="px-3">
                                    <h4 class="card-title fw-bolder" style="color: #FF007F;">450+</h4>
                                    <p class="card-text fw-bolder">Courses Offered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="card text-center shadow-lg"
                            style="width: 100%; max-width: 24rem; border-radius: 10px;">
                            <div class="card-body d-flex align-items-center p-4 gap-2">
                                <div>
                                    <i class="fas fa-graduation-cap" style="font-size: 50px; color: #FF007F;"></i>
                                </div>
                                <div class="px-3">
                                    <h4 class="card-title fw-bolder" style="color: #FF007F;">41,688+</h4>
                                    <p class="card-text fw-bolder">Certificates Awarded</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="card text-center shadow-lg"
                            style="width: 100%; max-width: 24rem; border-radius: 10px;">
                            <div class="card-body d-flex align-items-center p-4 gap-2">
                                <div>
                                    <i class="fas fa-check-circle" style="font-size: 50px; color: #FF007F;"></i>
                                </div>
                                <div class="px-3">
                                    <h4 class="card-title fw-bolder" style="color: #FF007F;">97%</h4>
                                    <p class="card-text fw-bolder">Satisfaction Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const starContainer = document.querySelector('.star-container');

                    function createStar() {
                        const star = document.createElement('div');
                        star.classList.add('star');

                        const x = Math.random() * 100;
                        const y = Math.random() * 100;
                        const delay = Math.random() * 2;
                        const size = Math.random() * 8 + 2;
                        const direction = Math.floor(Math.random() * 4);

                        star.style.left = `${x}vw`;
                        star.style.top = `${y}vh`;
                        star.style.animationDelay = `${delay}s`;
                        star.style.width = `${size}px`;
                        star.style.height = `${size}px`;

                        switch (direction) {
                            case 0:
                                star.classList.add('move-up');
                                break;
                            case 1:
                                star.classList.add('move-down');
                                break;
                            case 2:
                                star.classList.add('move-left');
                                break;
                            case 3:
                                star.classList.add('move-right');
                                break;
                        }

                        starContainer.appendChild(star);

                        star.addEventListener('animationend', () => {
                            star.remove();
                        });
                    }

                    setInterval(createStar, 100);
                });
            </script>

        </section>


        <section class="px-3 px-md-5">
            <div class="container">
                <div class="row align-items-center mt-5 mb-5">
                    <div class="col-lg-6 mt-5">
                        <h6 class="text-uppercase fw-bold mb-2 text-start " style="color: #FF007F;">
                            INSPIRE LONDON COLLEGE
                        </h6>
                        <h2 class=" mb-3 pt-2 text-start ">
                            Build Your Skills Online <br> Anytime
                        </h2>
                        <p class="text-black mb-3 text-start  pt-2 pb-3 fs-6" style="line-height: 1.5;">
                            Inspire London College is the leading specialist provider of Distance<br>Learning Courses
                            UK.
                            We are distinguished global distance and online<br>learning platforms dedicated to providing
                            courses UK, short courses online,<br>CPD training in the UK and worldwide. We deliver a
                            wide range of online courses<br> UK with certification from reputable awarding
                            organisations.
                        </p>
                        <div class="text-start text-sm-center text-lg-start">
                            <a href="#" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover">
                                    Read More
                                </button>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/site/card-image.webp') }}" alt="Inspire London College"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </section>


        <section class="p-5" style="background-color: ghostwhite;">
            <div class="text-center pb-3">
                <h2 class="fs-2 p-2 fw-bolder">Our Best Selling Course</h2>
                <p class="fs-5 pb-2">
                    Take a look at our best-selling online qualification that thousands of learners have availed to make
                    a rewarding career.
                </p>
            </div>

            <div class="container mb-5">
                <div class="row align-items-center g-4">
                    <div class="col-12 col-md-6 text-center">
                        <img src="{{ asset('assets/site/healt.webp') }}" alt="Health and Social Care"
                            class="img-fluid" style="width: 100%; max-width: 650px;">
                    </div>

                    <div class="col-12 col-md-6 text-start">
                        <h2 class="pb-3 fw-bolder">Level 3 Diploma in Health and Social Care</h2>
                        <div class="d-flex flex-wrap align-items-center mb-3">
                            <span class="badge me-2 p-2 px-3 fs-6"
                                style="background-color: #C13584;">Qualification</span>
                            <span class="text-warning" style="font-size: 1.5rem;">★★★★★</span>
                            <strong class="ms-2 fs-6">500+</strong>
                            <span class="badge bg-primary ms-2 px-3 p-2 fw-bolder fs-6">Top Rated</span>
                        </div>
                        <p class="fs-5 pb-2" style="line-height: 1.8;">
                            With a focus on real-world application and progression opportunities, <br> the Qualifi
                            Level 3 Diploma provides a stepping stone toward advanced <br> qualifications and rewarding
                            roles.
                        </p>

                        <div class="row g-3 mb-3">
                            <div class="col-12 col-sm-4 text-start">
                                <div class="p-3 border-dashed" style="border: 3px dashed rgb(68, 168, 199);">
                                    <h6 class="fw-bolder fs-5" style="color: #FF007F;">Duration</h6>
                                    <p>6 months - 12 months</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 text-start">
                                <div class="p-3 border-dashed" style="border: 3px dashed rgb(68, 168, 199);">
                                    <h6 class="fw-bolder fs-5" style="color: #FF007F;">Assessment</h6>
                                    <p>Assignments / Report</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 text-start">
                                <div class="p-3 border-dashed" style="border: 3px dashed rgb(68, 168, 199);">
                                    <h6 class="fw-bolder fs-5" style="color: #FF007F;">Awarding Body</h6>
                                    <p>Qualifi Ltd.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 text-center text-md-start d-flex flex-column flex-md-row gap-3">
                            <button class="btn fw-bolder p-2 px-4 w-md-100"
                                style="background-color: #FF007F; color: white; font-size: 1rem;">
                                Enrol Now
                            </button>
                            <button class="btn fw-bolder p-2 px-4 w-md-100"
                                style="background-color: #25D366; color: white; font-size: 1rem;">
                                WhatsApp
                            </button>
                        </div>

                    </div>
                </div>
            </div>



        </section>





        <section class="catagories-sec py-5">
            <div class="container py-5">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 w-100">
                    <h1 class="h2 mb-3 mb-md-0 text-center flex-grow-1">Courses Category</h1>
                    <a href="{{ route('view') }}" class="text-decoration-none">
                        <button type="button"
                            class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                            style="font-weight: 500">
                            View All
                            <i class="fa-solid fa-arrow-right ms-2"
                                style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 2px 2px; font-size: 14px;"></i>
                        </button>
                    </a>
                </div>

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/team.png') }}" alt="HR Management"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">HR Management</h3>
                            <a href="{{ route('human') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/project-management.png') }}" alt="Project Management"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Project Management</h3>
                            <a href="{{ route('project') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/down-time.png') }}" alt="Construction Management"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Construction Management</h3>
                            <a href="{{ route('construction') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/management.png') }}" alt="Leadership Management"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Leadership Management</h3>
                            <a href="{{ route('leadership') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/estimate.png') }}" alt="Accounting and Finance"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Accounting and Finance</h3>
                            <a href="{{ route('accounting') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/user.png') }}" alt="Admin, Secretarial & PA"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Admin, Secretarial & PA</h3>
                            <a href="{{ route('admin') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/leadership.png') }}" alt="Business Management"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Business Management</h3>
                            <a href="{{ route('business') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card text-center p-3 border rounded shadow-sm">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('assets/site/education.png') }}" alt="Education and Training"
                                    style="width: 50px; height: auto;">
                            </div>
                            <h3 class="h5 mb-3">Education and Training</h3>
                            <a href="{{ route('education') }}" class="text-decoration-none">
                                <button type="button"
                                    class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="courses py-5" style="background-color: ghostwhite">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center align-items-center mb-5 w-100">
                    <h1 class="h2 mb-0 flex-grow-1 text-center mb-2">Popular Course</h1>
                    <a href="{{ route('view') }}" class="text-decoration-none text-start">
                        <button type="button"
                            class="btn btn-info border-0 text-white px-4 py-2 rounded-pill custom-hover"
                            style="font-weight: 500">
                            View All
                            <i class="fa-solid fa-arrow-right ms-2"
                                style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 2px 2px; font-size: 14px;"></i>
                        </button>
                    </a>
                </div>

                <div class="row g-2">

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/workplace.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 6 Diploma in Project
                                    Management</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 2.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 7 Diploma in HR Management
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 4.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 6 Diploma in the
                                    Professional Supervisor</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 2.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 7 Diploma in Operations
                                    Management</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 6.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 5 Diploma in Facilities
                                    Management</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 7.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 7 Diploma in Counselling
                                    Skills</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 3.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 4 Diploma in Child
                                    Psychology</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/work 2.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3"
                                style="border-radius: 10px; margin: 20px; position:relative; top:-50px">
                                <h5 class="card-title text-center mb-3 level-6-title">Level 5 Diploma in Train the
                                    Trainer</h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="feedback py-5">
            <h1 class="text-center mb-4">Student Feedback</h1>

            <div id="feedbackCarousel" class="carousel slide p-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor, sit amet
                                            consectetur adipisicing elit. Dicta blanditiis nobis consectetur, eveniet,
                                            alias distinctio aspernatur sit delectus consequuntur, optio error deserunt
                                            itaque animi cumque qui? Quia impedit maxime excepturi recusandae ratione
                                            eum beatae reprehenderit, doloribus alias rem ad aliquam!</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 mb-4">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Ratione magni ullam ducimus? Quisquam, rerum. Ipsum beatae
                                            odit nemo exercitationem magnam enim ea unde illo ducimus laboriosam
                                            reiciendis officiis qui, quia quaerat consequatur veritatis dolor recusandae
                                            iure facere. Ad, ut culpa?
                                        </p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


        <section class="cartificate" style="background-color: ghostwhite">
            <div class="container pt-5 pb-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 text-center">
                        <img src="{{ asset('assets/site/New.webp') }}" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>

                    <div class="col-12 col-md-6 pt-5 pt-md-0 px-4 text-center text-md-start">
                        <h1 class="fw-bolder mb-2" style="font-weight: 900; font-size: 48px;">
                            Get an Additional <span style="color: #FF007F">10% Discount <br>On Certificates.</span>
                        </h1>
                        <p class="pt-3 fs-5 text-secondary">
                            Supercharge your career growth with an inclusive 10% discount on all certificates.<br> Don’t Delay – Enrol Today
                        </p>
                        <button style="background-color: rgb(235, 54, 180); border-radius: 50px; border: 4px solid rgb(147, 227, 247)"
                                class="p-2 mt-2 px-3 fs-5">
                            <a style="text-decoration: none;" href="#" class="card-link text-white fw-bolder px-3">Clims Certificate</a>
                        </button>

                        <div class="py-4 d-flex flex-wrap justify-content-center gap-3">
                            <img src="{{ asset('assets/site/endorsed-1.webp') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                            <img src="{{ asset('assets/site/end 2.webp') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                            <img src="{{ asset('assets/site/end 3.jpg') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                            <img src="{{ asset('assets/site/end 4.webp') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                            <img src="{{ asset('assets/site/end 5.webp') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                            <img src="{{ asset('assets/site/end 7.webp') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                            <img src="{{ asset('assets/site/end 4.webp') }}" alt="" width="70px" class="p-3" style="border: 2px dashed #d2d3d4;">
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section style="background-image: url({{ asset('assets/site/abc.webp') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center pb-5 pt-5">
                <h4 class="text-white fs-3">Flexible & Convenient Learning</h4>
                <h3 class="h4 mt-3 pb-5 text-white fs-3">Experience The Best Online Study Scheme</h3>
            </div>

            <div class="container card-container pt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="flip-card" style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3); min-width: 250px;">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/customer-service.png') }}" alt="" class="img-white">
                                    </div>
                                    <h5>Dedicated Tutor Support</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>Get personalized support from our experienced tutors throughout your learning journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="flip-card" style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3); min-width: 250px;">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/clock-with-white-face.png') }}" alt="" class="img-white">
                                    </div>
                                    <h5>Self-Study Courses</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>All courses are specially designed for self-study and are often personalised to fit the needs of individual students.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="flip-card" style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3); min-width: 250px;">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/palm.png') }}" alt="" class="img-white">
                                    </div>
                                    <h5>Easy Access</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>Access your courses anytime, anywhere with our user-friendly platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="flip-card" style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3); min-width: 250px;">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/medal.png') }}" alt="" class="img-white">
                                    </div>
                                    <h5>Accredited Certificates</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>Earn recognized certificates upon successful completion of your courses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="mb-5" style="background-color: ghostwhite">
            <h1 class="pb-5 text-center pt-5">Blogs</h1>
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card d-flex flex-column" style="background: transparent; border: none; min-height: 400px;">
                            <div class="card-img-wrapper" style="overflow: hidden;">
                                <img src="{{ asset('assets/site/cards.webp') }}" class="card-img-top hover-img" alt="...">
                            </div>
                            <div class="card-body" style="border-left: 12px solid #fff; border-right: 12px solid #fff;">
                                <h5 class="card-title">Skills for Care Now Endorses Our Exceptional Training</h5>
                                <p class="card-text">In the dynamic landscape of education and training, institutes that prioritise</p>
                                <a href="#" class="text-decoration-none text-start">
                                    <button type="button" class="btn border-0 text-info fw-bold px-4 py-2 custom-hover" style="background-color: #fff">
                                        Read More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card d-flex flex-column" style="background: transparent; border: none; min-height: 400px;">
                            <div class="card-img-wrapper" style="overflow: hidden;">
                                <img src="{{ asset('assets/site/card2.webp') }}" class="card-img-top hover-img" alt="...">
                            </div>
                            <div class="card-body" style="border-left: 12px solid #fff; border-right: 12px solid #fff;">
                                <h5 class="card-title">What is Phlebotomy</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="text-decoration-none text-start">
                                    <button type="button" class="btn border-0 text-info fw-bold px-4 py-2 mt-3 custom-hover" style="background-color: #fff">
                                        Read More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card d-flex flex-column" style="background: transparent; border: none; min-height: 400px;">
                            <div class="card-img-wrapper" style="overflow: hidden;">
                                <img src="{{ asset('assets/site/card3.webp') }}" class="card-img-top hover-img" alt="...">
                            </div>
                            <div class="card-body" style="border-left: 12px solid #fff; border-right: 12px solid #fff;">
                                <h5 class="card-title">What is Personal Development?</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="text-decoration-none text-start">
                                    <button type="button" class="btn border-0 text-info fw-bold px-4 py-2 mt-3 custom-hover" style="background-color: #fff">
                                        Read More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section>
            <div class="container my-5">
                <div class="row align-items-center">
                    <div class="col-md-6 text-end">
                        <img src="{{ asset('assets/site/care.webp') }}" alt="" class="img-fluid" width="600px">
                    </div>

                    <div class="col-md-6">
                        <button class="text-white fs-4 p-2 text-start px-4 fw-bolder mb-3 mt-3 mt-sm-4 mt-md-0" style="background-color: #FF007F; border: none;">Latest News</button>

                        <div class="scrolling-text p-1" style="overflow: hidden; position: relative; height: 435px;">
                            <div style="position: absolute; animation: scrollUp 10s linear infinite;">
                                <h4>Inspire London College Has Officially Achieved Skills for Care Approval</h4>
                                <p class="lead mb-4">This text is scrolling from bottom to top. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat fugiat totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-4">This text is scrolling from bottom to top. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat fugiat totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-4">This text is scrolling from bottom to top. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat fugiat totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-0">This text is scrolling from bottom to top. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat fugiat totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-0">This text is scrolling from bottom to top. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat fugiat totam beatae. Officia, ipsa eligendi!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const starContainer = document.querySelector('.footer-container');

                function createStar() {
                    const star = document.createElement('div');
                    star.classList.add('star');

                    const x = Math.random() * 100;
                    const y = Math.random() * 100;
                    const delay = Math.random() * 2;
                    const size = Math.random() * 8 + 2;
                    const direction = Math.floor(Math.random() * 4);

                    star.style.left = `${x}vw`;
                    star.style.top = `${y}vh`;
                    star.style.animationDelay = `${delay}s`;
                    star.style.width = `${size}px`;
                    star.style.height = `${size}px`;

                    star.classList.add(['move-up', 'move-down', 'move-left', 'move-right'][direction]);

                    starContainer.appendChild(star);

                    star.addEventListener('animationend', () => {
                        star.remove();
                    });
                }

                setInterval(createStar, 100);
            });
        </script>


        <footer class="footer-container bg-dark text-white py-4">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <h3 class="fw-bolder">Information</h3>
                        <ul class="px-0" style="list-style: none;">
                            <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Terms & Conditions</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Cookie Policy</a></li>
                            <li><a href="#" class="text-white text-decoration-none">FAQ's</a></li>
                            <li><a href="#" class="text-white text-decoration-none">How to Pay</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <h3 class="fw-bolder">Quick Links</h3>
                        <ul class="px-0" style="list-style: none;">
                            <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Fees & Pricing</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Apply For Certificate</a>
                            </li>
                            <li><a href="#" class="text-white text-decoration-none">Apply Student Discount
                                    Card</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Apply H&S Care
                                    Certificate</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Request Info</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Jobs</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <h3 class="fw-bolder">Popular Courses</h3>
                        <p>Level 3 Certificate in Phlebotomy (Part 1) Phlebotomy Course</p>
                        <button class="px-3 p-2 fs-5 border-0" style="border: 18px solid green;">
                            Review as on <img src="{{ asset('assets/site/star-removebg-preview.png') }}"
                                alt="" style="width: 30px;">
                            <span class="fw-bolder">Trustpilot</span>
                        </button>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <h3 class="fw-bolder">Contact Info</h3>
                        <ul class="px-0" style="list-style: none;">
                            <li>Address: 123 Example Street, City</li>
                            <li>Email: info@example.com</li>
                            <li>Phone: +123-456-7890</li>
                        </ul>

                        <div class="d-flex gap-2 mt-4">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center text-white mt-5 bg-black p-3" style="position: relative; top:22px">
                <p class="fs-5 mb-0">© Copyright 2013 – 2024 <span style="color: #FF007F">Inspire London
                        College</span> All Rights Reserved | Powered by <span style="color: #FF007F">Whoopit
                        Agency</span></p>
            </div>
        </footer>

    </div>
</body>

</html>
