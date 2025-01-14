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

        .navbar {
            padding: 1rem 2rem;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 50px;
        }

        .nav-link {
            color: #00bcd4 !important;
            padding: 0.5rem 1rem !important;
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

        .category-section {
            display: none;
            background-color: #f8f9fa;
            padding: 1rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .level-6-title {
            color: #C13584;
            transition: color 0.1s ease;
        }

        .level-6-title:hover {
            color: #00C8E8;
        }

        .latest-news {
            background-color: #e91e63;
            color: white;
            padding: 1rem 2rem;
            margin-right: 1rem;
        }

        .ticker-wrapper {
            display: flex;
            align-items: stretch;
            height: 90px;
            background-color: #00C8E8;
        }

        .ticker-label {
            background-color: #FF007F;
            color: white;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-weight: bold;
        }

        .ticker {
            flex-grow: 1;
            overflow: hidden;
        }

        .ticker-content {
            display: flex;
            align-items: center;
            height: 100%;
            white-space: nowrap;
            animation: scroll 10s linear infinite;
        }

        .position-relative {
            height: 100%;
            display: flex;
            align-items: center;
        }

        img {
            height: 100%;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .ticker-content {
            animation: scroll 50s linear infinite;
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
            0% {
                transform: translateY(100%);
            }

            100% {
                transform: translateY(-100%);
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
            <div class="header-sec d-flex justify-content-between align-items-center p-3 "
                style="background-image: url('{{ asset('assets/site/Chistmas-scaled.webp') }}'); background-size: cover; background-position: top">

                <div class="w-75 d-flex justify-content-center">
                    <h3 class="text-white fw-bold text-center pt-3" style="padding-left: 55px">
                        Pay <span class="text-warning">£70</span> to start a Qualification + Get
                        <span class="text-warning">30%</span> Off on Bundle Video Courses.
                    </h3>
                </div>
                <a href="{{ route('christmas') }}">
                    <button type="button"
                        style="border: 3px solid white; background-color:rgb(173, 30, 30); margin-right: 8rem;"
                        class="fw-bolder px-5 p-2 text-white">
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

                <div class="d-flex gap-5">
                    <a href="{{ route('booksnow') }}">
                        <button type="button" class="btn btn-info border-0 text-white fw-bolder px-4"
                            style="border-radius: 50px; padding: 10px 0px">
                            Book Now
                        </button>
                    </a>
                    <a href="{{ route('contact') }}">
                        <button type="button" class="btn btn-info border-0 text-white fw-bolder px-4 "
                            style="border-radius: 50px; padding: 10px 0">
                            Contact Us
                        </button>
                    </a>
                    <form class="d-flex" role="search">
                        <div class="input-group w-100">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                style="border-radius: 50px 0 0 50px;">
                            <button class="btn btn-info text-white fw-bolder" type="submit"
                                style="border-radius: 0 50px 50px 0;">Search</button>
                        </div>

                    </form>

                </div>
            </div>

            <nav class="navbar navbar-expand-lg p-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/site/ILC-logo-1024x616.webp') }}" alt="Inspire London College Logo"
                            style="width: 150px; height: auto;">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto px-5 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Endorsed Courses
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    CPD Courses
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Phlebotomy
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Ofqual Qualifications
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    CPD Video Training
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Care Courses
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center gap-3 px-5">
                            <button class="btn px-4 text-white  "
                                style="background-color: #FF007F; border-radius: 50px;">Learning Platform</button>
                            <button class="btn btn-vle px-3 p-2 " style="padding: 0px 70px; width: 180px;">VLE</button>
                        </div>

                    </div>
                </div>
            </nav>

            <div class="category-section bg-white" id="categorySection">
                <div class="container-fluid d-flex">
                    <div class="row flex-grow-1">
                        <div class="col">
                            <div class="category-card">
                                <img src="{{ route('contact') }}"
                                    alt="Accounting & Finance" class="category-image">
                                <div>Accounting & Finance</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card ">
                                <img src="{{ asset('assets/site/admin-secretarial.jpg') }}" alt="Admin & Secretarial"
                                    class="category-image">
                                <div>Admin & Secretarial</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card">
                                <img src="{{ asset('assets/site/business-management.jpg') }}"
                                    alt="Business Management" class="category-image">
                                <div>Business Management</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card">
                                <img src="{{ asset('assets/site/hr-management.jpg') }}" alt="HR Management"
                                    class="category-image">
                                <div>HR Management</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card">
                                <img src="{{ asset('assets/site/leadership-management.jpg') }}"
                                    alt="Leadership & Management" class="category-image">
                                <div>Leadership & Management</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card">
                                <img src="{{ asset('assets/site/project-management.jpg') }}" alt="Project Management"
                                    class="category-image">
                                <div>Project Management</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card">
                                <img src="{{ asset('assets/site/all-categories.jpg') }}" alt="All Categories"
                                    class="category-image">
                                <div>All Categories</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const categorySection = document.getElementById('categorySection');
                    const navItems = document.querySelectorAll('.navbar-nav .dropdown');
                    let isHovering = false;

                    const categories = {
                        'Endorsed Courses': [{
                                name: 'Accounting & Finance',
                                icon: '<i class="fas fa-calculator icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/accounting'
                            },
                            {

                                name: 'Admin & Secretarial',
                                icon: '<i class="fas fa-user-cog icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/admin'

                            },
                            {
                                name: 'Business Management',
                                icon: '<i class="fas fa-hands-helping icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/business'
                            },
                            {
                                name: 'HR Management',
                                icon: '<i class="fas fa-user-tie icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/human'
                            },
                            {
                                name: 'Leadership & Management',
                                icon: '<i class="fas fa-user-check icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/leadership'
                            },
                            {
                                name: 'Project Management',
                                icon: '<i class="fas fa-project-diagram icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: 'project'
                            }
                        ],
                        'CPD Courses': [{
                                name: 'Accounting $ Finance',
                                icon: '<i class="fas fa-calculator icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/accounting'
                            },
                            {
                                name: 'Beauty Therapy',
                                icon: '<i class="fas fa-leaf icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'ChildPsychology',
                                icon: '<i class="fas fa-child icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'HR Management',
                                icon: '<i class="fas fa-user-tie icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/human'
                            },
                            {
                                name: 'Supply Chain Management',
                                icon: '<i class="fas fa-link icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'Workplace Management',
                                icon: '<i class="fas fa-project-diagram icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            }
                        ],
                        'Phlebotomy': [{
                                name: 'Level 3 Certificate in Phlebotomy (Part 2 $ 2)',
                                icon: '<i class="fas fa-syringe icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/bookssnow'
                            },
                            {
                                name: 'Level 3 Certificate in Phlebotomy (Part 2)',
                                icon: '<i class="fas fa-syringe icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/bookssnow'

                            },
                            {
                                name: 'Phlebotomist Placement Programme',
                                icon: '<i class="fas fa-user-nurse icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'Level Bloods Practical Session',
                                icon: '<i class="fas fa-eye-dropper icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            }
                        ],
                        'Ofqual Qualifications': [{
                                name: 'Business Management',
                                icon: '<i class="fas fa-hands-helping icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/business'
                            },
                            {
                                name: 'Cyber Security',
                                icon: '<i class="fas fa-unlock-alt icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'Education & Training',
                                icon: '<i class="fas fa-book-open icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/education'
                            },
                            {
                                name: 'Health & Safety',
                                icon: '<i class="fas fa-hand-holding-heart icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'Health & Social Care',
                                icon: '<i class="fas fa-hand-holding-medical icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },

                        ],
                        'CPD Video Training': [{
                                name: 'Business Skills',
                                icon: '<i class="fas fa-hands-helping icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'Health & Safety',
                                icon: '<i class="fas fa-hand-holding-heart icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                            {
                                name: 'Business Skills',
                                icon: '<i class="fas fa-hands-helping icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>'
                            },
                        ],
                        'Care Courses': [{
                                name: 'Mandatory Courses',
                                icon: '<i class="far fa-newspaper icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                                route: '/contact'

                            },

                            {
                                name: 'Additional Courses',
                                icon: '<i class="far fa-list-alt icon-hover" style="font-size: 40px; padding-bottom: 4px"></i>',
                            }
                        ]
                    }

                    function loadCategories(categoryName) {
    const row = categorySection.querySelector('.row');
    row.innerHTML = '';

    const catList = categories[categoryName] || [];
    catList.forEach(cat => {
        row.innerHTML += `
            <div class="col">
                <div class="category-card">
                    <a href="${cat.route || '#'}" class="category-link" style="text-decoration:none;color:black ;font-size:16px">
                        <i class="category-icon">${cat.icon}</i>
                        <div>${cat.name}</div>
                    </a>
                </div>
            </div>`;
    });

    row.innerHTML += `
       <div class="col">
    <div class="category-card">
        <a href="/all-categories" class="d-block text-decoration-none">
            <i class="category-icon" style="font-size: 40px; font-weight: bold;">≡</i>
            <div class="text-dark">All Categories</div>
        </a>
    </div>
</div>`;
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



            <div class="ticker-wrapper">
                <div class="ticker-label mx-3 p-5 fs-3 ">Latest News</div>
                <div class="ticker">
                    <div class="ticker-content">
                        <span class="text-white fw-bolder" style="word-spacing: 5px">
                            First breaking news item Second important update Third news flash Fourth headline of the day
                        </span>
                    </div>
                </div>
                <div class="position-relative">
                    <img src="{{ asset('assets/site/skill-for-care.webp') }}" alt="" style="width: 200px;"
                        class="mx-3">
                </div>
            </div>


        </header>


        <section>
            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden bg-info"
                style="min-height: 70vh; background-image: linear-gradient(rgba(0, 32, 96, 0.8), rgba(0, 64, 128, 0.8)), url('{{ asset('assets/site/bg.webp') }}'); background-size: cover; background-position: center;">
                <div class="star-container position-absolute w-100 h-100"></div>

                <div class="card p-5 mt-5 mb-5"
                    style="width: 65rem; border-radius: 40px; background: transparent; border: 15px solid white; z-index: 2;">
                    <div class="card-body text-center">
                        <h1 class="card-title text-white fw-bolder pb-2">Learn & Get Endorsed</h1>
                        <h3 class="card-subtitle mb-2 text-white pb-2">Distance Learning Courses UK</h3>
                        <p class="card-text text-white fs-5 pb-2">A flexible and convenient way of learning new skills.
                            Find the
                            right Distance Learning Courses and CPD Training for you.</p>

                        <a href="#"
                            style="background-color: rgb(235, 54, 180); padding: 10px 20px; border-radius: 5px; color: white; text-decoration: none; font-weight: bold; display: inline-block; text-align: center;"
                            class="explore-btn mb-2"> Explore Our Courses
                            <i class="fa-solid fa-arrow-right" style="font-size: 1.2em;"></i>

                        </a>

                        <div class="mt-3 d-flex justify-content-center gap-2 mt-4">
                            <a href="#" class="btn p-0 bg-primary social-icon">
                                <i class="fab fa-facebook-f" style="font-size: 35px; color: white;"></i>
                            </a>

                            <a href="#" class="btn p-0 social-icon" style="background-color: #25d366;">
                                <i class="fab fa-whatsapp" style="font-size: 35px; color: white;"></i>
                            </a>

                            <a href="#" class="btn p-0 social-icon" style="background-color: #0077b5;">
                                <i class="fab fa-linkedin-in" style="font-size: 35px; color: white;"></i>
                            </a>

                            <a href="#" class="btn p-0 social-icon" style="background-color: #1DA1F2;">
                                <i class="fab fa-twitter" style="font-size: 35px; color: white;"></i>
                            </a>

                            <a href="#" class="btn p-0 social-icon" style="background-color: #C13584;">
                                <i class="fab fa-instagram" style="font-size: 35px; color: white;"></i>
                            </a>

                            <a href="#" class="btn p-0 social-icon"
                                style="background-color: red; padding: 10px;">
                                <i class="fab fa-youtube" style="font-size: 35px; color: white;"></i>
                            </a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container mt-5 position-relative" style="top: -100px">
                <div class="d-flex justify-content-center align-items-start">
                    <div class="row g-4 justify-content-center align-items-start">
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="card text-center shadow-lg" style="width: 24rem;border-radius: 10px">
                                <div class="card-body d-flex align-items-center p-4 gap-1">
                                    <div>
                                        <i class="fas fa-users"
                                            style="font-size: 50px; color: #FF007F; width: 70px; text-align: center;"></i>
                                    </div>

                                    <div class="px-4">
                                        <h4 class="card-title" style="color: #FF007F; font-weight: 700;">65,545+</h4>
                                        <p class="card-text " style="font-weight: 700">Enrolled Students</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="card text-center shadow-lg" style="width: 24rem;border-radius:10px">
                                <div class="card-body d-flex align-items-center p-4 gap-4">
                                    <div>
                                        <i class="fas fa-book-open" style="font-size: 50px; color:#FF007F"></i>
                                    </div>
                                    <div class="px-4">
                                        <h4 class="card-title fw-bolder" style="color: #FF007F">450+</h4>
                                        <p class="card-text fw-bolder">Courses Offered</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="card text-center shadow-lg" style="width: 24rem; border-radius:10px">
                                <div class="card-body d-flex align-items-center p-4 gap-1">
                                    <div>
                                        <i class="fas fa-graduation-cap" style="font-size: 50px; color:#FF007F"></i>

                                    </div>
                                    <div class="px-4">
                                        <h4 class="card-title fw-bolder" style="color: #FF007F">
                                            41,688+
                                        </h4>
                                        <p class="card-text fw-bolder">Certificates Award</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="card text-center shadow-lg" style="width: 24rem; border-radius:10px">
                                <div class="card-body d-flex align-items-center p-4 gap-2">
                                    <div>
                                        <i class="fas fa-check-circle" style="font-size: 50px; color:#FF007F"></i>

                                    </div>
                                    <div class="px-4">
                                        <h4 class="card-title fw-bolder" style="color: #FF007F">
                                            97%
                                        </h4>
                                        <p class="card-text fw-bolder">Satisfaction Rate</p>
                                    </div>
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
            <div class="d-flex justify-content-evenly mt-5 mb-5 " style="padding: 0px 10rem">
                <div class="mt-5 ">
                    <h6 class="text-uppercase fw-bold mb-2 text-start " style="padding-left: 60px;color:#FF007F">
                        INSPIRE LONDON COLLEGE
                    </h6>
                    <h2 class="fw-bold mb-3 pt-2 text-start" style="padding-left: 60px">
                        Build Your Skills Online <br> Anytime
                    </h2>
                    <p class="text-black mb-3 text-start pt-2  pb-3 fs-5"
                        style="padding-left: 60px; line-height: 1.8">
                        Inspire London College is the leading specialist provider of Distance <br>Learning CoursesUK
                        .Weare distinguished global distance and online<br> learning platforms dedicated to providing
                        courses UK, short courses online, <br>CPD training in the UK and worldwide. We deliver a
                        wide range of online courses <br> UK with certification from reputable awarding organisations.
                    </p>
                    </p>

                    <a href="#" class="text-decoration-none text-start" style="padding-left: 60px;
">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bolder px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
                <div>
                    <img src="{{ asset('assets/site/card-image.webp') }}" alt="Inspire London College"
                        class="img-fluid" style="width: 110%; max-width: none;">
                </div>

            </div>
        </section>

        <section class="p-5" style="background-color: ghostwhite">
            <div class="text-center pb-3">

            <h2 class="fs-2 p-2 fw-bolder">Our Best Selling Course</h2>
            <p class="fs-5 pb-2">Take a look at our best-selling online qualification that thousands of learners have availed to make mark rewarding career.
            </p>
        </div>

            <div class="d-flex justify-content-center align-items-center mb-5 gap-4">
                <div class="text-center pe-0">
                    <img src="{{ asset('assets/site/healt.webp') }}" alt="Health and Social Care" class="img-fluid"
                        style="width: 650px; padding-left: 5%;">
                </div>

                <div class="text-start">
                    <h2 class="pb-3 fw-bolder">Level 3 Diploma in Health and Social Care</h2>
                    <div class="d-flex align-items-center text-start mb-3">
                        <span class="badge me-2 p-2 px-3  fs-6" style="background-color: #C13584">Qualification</span>
                        <span class="text-warning" style="font-size: 1.5rem">★★★★★</span>
                        <strong class="ms-2 fs-6">500+</strong>
                        <span class="badge bg-primary ms-2 px-3 p-2 fw-bolder fs-6">Top Rated</span>
                    </div>
                    <p class="fs-5 pb-2" style="line-height: 40px">
                        With a focus on real-world application and progression opportunities, <br>the Qualifi
                        Level 3 Diploma provides a stepping stone toward advanced <br>qualifications and rewarding
                        roles.
                    </p>

                    <div class="d-flex mb-3" style="gap: 10px;">
                        <div class="text-start fs-5"
                            style="padding: 0px 20px; padding-top:10px; border: 3px dashed rgb(68, 168, 199)">
                            <h6 class="text-pink fw-bolder fs-3" style="color: #FF007F">Duration</h6>
                            <p>6 months - 12 months</p>
                        </div>
                        <div class=" p-2 border-dotted text-start  fs-4"
                            style="padding: 10px 20px; border: 3px dashed rgb(68, 168, 199)">
                            <h6 class="text-pink fw-bolder fs-5" style="color: #FF007F">Assessment Method</h6>
                            <p>Assignments / Report</p>
                        </div>
                        <div class=" p-2 border-dotted text-start fs-5"
                            style="padding: 10px 20px; border: 3px dashed rgb(68, 168, 199)">
                            <h6 class="text-pink fw-bolder fs-4" style="color: #FF007F">Awarding Body</h6>
                            <p>Qualifi Ltd.</p>
                        </div>
                    </div>

                    <div class="text-start mt-4">
                        <button class="btn fw-bolder p-2 px-5 "
                            style="background-color: #FF007F; color: white; padding-left: 2rem; padding-right: 2rem;">
                            Enrol Now
                        </button>
                        <button class="btn fw-bolder p-2 px-5"
                            style="background-color: #25D366; color: white; padding-left: 2rem; padding-right: 2rem;">
                            WhatsApp
                        </button>
                    </div>
                </div>
            </div>

        </section>




        <section class="catagories-sec py-5">
            <div class="container py-5">
                <div class="d-flex justify-content-center align-items-center mb-5 w-100">
                    <h1 class="h2 mb-0 flex-grow-1 text-center">Courses Category</h1>
                    <a href="{{ route('view') }}" class="text-decoration-none text-start">
                        <button type="button"
                            class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                            style="font-weight: 500">
                            View All
                            <i class="fa-solid fa-arrow-right ms-2"
                                style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 2px 2px; font-size: 14px;"></i>
                        </button>
                    </a>
                </div>


                <div class="row g-4">

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/team.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h3 class="h5 mb-4">HR Management</h3>
                            <a href="{{ route('human') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/project-management.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h3 class="h5 mb-4">Project Management</h3>
                            <a href="{{ route('project') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/down-time.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h4 class="h5 mb-4">Contruction Management</h4>

                            <a href="{{ route('construction') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>

                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/management.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h4 class="h5 mb-4">Leadership Management</h4>
                            <a href="{{ route('leadership') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/estimate.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h3 class="h5 mb-4">Accounting and Finance</h3>
                            <a href="{{ route('accounting') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/user.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h3 class="h5 mb-4">Admin, Secretarial & PA</h3>
                            <a href="{{ route('admin') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/leadership.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h4 class="h5 mb-4">Business Management</h4>
                            <a href="{{ route('business') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                                    style="font-weight: 500">
                                    See Courses
                                    <i class="fa-solid fa-arrow-right ms-2"
                                        style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 3px 4px; font-size: 12px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="{{ asset('assets/site/education.png') }}" alt=""
                                    style="width: 50px; height:auto">
                            </div>
                            <h4 class="h5 mb-4">Education and Training</h4>
                            <a href="{{ route('education') }}" class="text-decoration-none text-start">
                                <button type="button"
                                    class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
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

        <section class="courses py-5 " style="background-color: ghostwhite">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center mb-5 w-100">
                    <h1 class="h2 mb-0 flex-grow-1 text-center">Popular Course</h1>
                    <a href="{{ route('view') }}" class="text-decoration-none text-start">
                        <button type="button"
                            class="btn btn-info border-0 text-white  px-4 py-2 rounded-pill custom-hover"
                            style="font-weight: 500">
                            View All
                            <i class="fa-solid fa-arrow-right ms-2"
                                style="border-radius: 50%; background-color: #fbfcfd; color: rgb(65, 241, 247); padding: 2px 2px; font-size: 14px;"></i>
                        </button>
                    </a>
                </div>
                <div class="row g-2 mb-2">

                    <div class="col">
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
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 7 Diploma in
                                    HR Management
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 6 Diploma in
                                    the Professional Supervisor
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 7 Diploma in
                                    Operations Management
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row g-2">

                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 5 Diploma in
                                    Facilities Management
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 7 Diploma in
                                    Counselling Skills
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 4 Diploma in
                                    Child Psychology
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
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
                                <h5 class="card-title text-center mb-3 level-6-title">Level 5 Diploma in
                                    Train the Trainer
                                </h5>
                                <div class="hover-text">
                                    <p class="card-text text-start" style="font-size: 13px">Endorsed by TQUK
                                        Certificate. 15 Modules.</p>
                                    <button
                                        class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                        style="border-radius: 50px; background-color:transparent">Know
                                        More</button>
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
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card" style="width: 100%">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium
                                            delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta
                                            recusandae
                                            eum explicabo,</p>
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
            <div class="d-flex justify-content-center pt-5 pb-5">
                <div class="img-sec text-center">
                    <img src="{{ asset('assets/site/New.webp') }}" alt="" class="img-fluid"
                        style="width: 600px;">
                </div>


                <div class="pt-5 px-4">
                    <h1 class="fw-bolder mb-2" style="font-weight: 900; font-size: 48px">
                        Get an Additional <span style="color: #FF007F">10% Discount <br>On Certificates.</span></h1>
                    <p class="pt-3 fs-5 text-secondary">Supercharge your career growth with an inclusive 10% discount on all
                        certificates.<br> Don’t Delay – Enrol Today</p>
                    <button
                        style="background-color: rgb(235, 54, 180); border-radius: 50px; border: 4px solid rgb(147, 227, 247)"
                        class="p-2 mt-2 px-3 fs-5">
                        <a style="text-decoration: none;" href="#"
                            class="card-link text-white fw-bolder px-3">Clims Certificate</a>
                    </button>
                    <div class="py-4 d-flex flex-wrap justify-content-center gap-3">
                        <img src="{{ asset('assets/site/endorsed-1.webp') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                        <img src="{{ asset('assets/site/end 2.webp') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                        <img src="{{ asset('assets/site/end 3.jpg') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                        <img src="{{ asset('assets/site/end 4.webp') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                        <img src="{{ asset('assets/site/end 5.webp') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                        <img src="{{ asset('assets/site/end 7.webp') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                        <img src="{{ asset('assets/site/end 4.webp') }}" alt="" width="90px"
                            class="p-3" style="border: 2px dashed #d2d3d4;">
                    </div>

                </div>
            </div>
        </section>

        <section
            style="background-image: url({{ asset('assets/site/abc.webp') }}); background-position:center; background-repeat:no-repeat; height: 60vh;">
            <div class="text-center pb-5 pt-5">
                <h4 class="text-white fs-3">Flexible & Convenient Learning</h4>
                <h3 class="h4 mt-3 pb-5 text-white fs-3">Experience The Best Online Study Scheme</h3>
            </div>

            <div class="container card-container pt-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="flip-card"
                            style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/customer-service.png') }}" alt=""
                                            class="img-white">
                                    </div>
                                    <h5>Dedicated Tutor Support</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>Get personalized support from our experienced tutors throughout your learning
                                        journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card"
                            style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/clock-with-white-face.png') }}"
                                            alt="" class="img-white">
                                    </div>
                                    <h5>Self-Study Courses</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>All courses are specially designed for self-study and are often personalised to
                                        fit the needs of individual students.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card"
                            style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/palm.png') }}" alt=""
                                            class="img-white">
                                    </div>
                                    <h5>Easy Access</h5>
                                </div>
                                <div class="flip-card-back text-white">
                                    <p>Access your courses anytime, anywhere with our user-friendly platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card"
                            style="border-radius: 15px; box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <img src="{{ asset('assets/site/medal.png') }}" alt=""
                                            class="img-white">
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
            <div class="d-flex justify-content-center gap-4 pb-5">
                <div class="card" style="width: 24rem; background: transparent;border:none">
                    <div class="card-img-wrapper" style="overflow: hidden;">
                        <img src="{{ asset('assets/site/cards.webp') }}" class="card-img-top hover-img"
                            alt="...">
                    </div>
                    <div class="card-body" style="border-left: 12px solid #fff; border-right: 12px solid #fff">
                        <h5 class="card-title">Skills for Care Now Endorses Our Exceptional Training</h5>
                        <p class="card-text">In the dynamic landscape of education and training, institutes that
                            prioritise</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button" class="btn border-0 text-info fw-bold px-4 py-2 custom-hover"
                                style="background-color: #fff">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 24rem;background:transparent;border:none">
                    <div class="card-img-wrapper" style="overflow: hidden;">
                        <img src="{{ asset('assets/site/card2.webp') }}" class="card-img-top hover-img"
                            alt="...">
                    </div>
                    <div class="card-body" style="border-left: 12px solid #fff; border-right: 12px solid #fff">
                        <h5 class="card-title">What is Phlebotomy</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button" class="btn border-0 text-info fw-bold px-4 py-2  custom-hover"
                                style="background-color: #fff">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>

                <div class="card pb-3" style="width: 24rem;background:transparent;border:none">
                    <div class="card-img-wrapper" style="overflow: hidden;">
                        <img src="{{ asset('assets/site/card3.webp') }}" class="card-img-top hover-img"
                            alt="...">
                    </div>
                    <div class="card-body" style="border-left: 12px solid #fff; border-right: 12px solid #fff">
                        <h5 class="card-title">What is Personal Development?</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button" class="btn border-0 text-info fw-bold px-4 py-2  custom-hover"
                                style="background-color: #fff">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container my-5">
                <div class="row align-items-center">
                    <div class="col-md-6 text-end">
                        <img src="{{ asset('assets/site/care.webp') }}" alt="" class="img-fluid"
                            width="600px">
                    </div>

                    <div class="col-md-6">
                        <button class="text-white fs-4 p-2 text-start px-4 fw-bolder mb-3"
                            style="background-color: #FF007F; border: none;">Latest News</button>
                        <div class="scrolling-text p-1 " style="overflow: hidden; position: relative; height: 435px;">
                            <div style="position: absolute; animation: scrollUp 10s linear infinite;">
                                <h4>Inspire London College Has Officially Achieved Skills for Care Approval
                                </h4>
                                <p class="lead mb-4 ">This text is scrolling from bottom to top. Lorem ipsum, dolor sit
                                    amet
                                    consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat
                                    fugiat
                                    totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-4">This text is scrolling from bottom to top. Lorem ipsum, dolor sit
                                    amet
                                    consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat
                                    fugiat
                                    totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-4">This text is scrolling from bottom to top. Lorem ipsum, dolor sit
                                    amet
                                    consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat
                                    fugiat
                                    totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-0">This text is scrolling from bottom to top. Lorem ipsum, dolor sit
                                    amet
                                    consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat
                                    fugiat
                                    totam beatae. Officia, ipsa eligendi!</p>
                                <p class="lead mb-0">This text is scrolling from bottom to top. Lorem ipsum, dolor sit
                                    amet
                                    consectetur adipisicing elit. Velit laboriosam voluptates ipsa voluptate repellat
                                    fugiat
                                    totam beatae. Officia, ipsa eligendi!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const starContainer = document.querySelector('.footer-container'); // Updated selector for footer

                function createStar() {
                    const star = document.createElement('div');
                    star.classList.add('star');

                    const x = Math.random() * 100;
                    const y = Math.random() * 100;
                    const delay = Math.random() * 2;
                    const size = Math.random() * 8 + 2;
                    const direction = Math.floor(Math.random() * 4); // 0 to 3 for four directions

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


        <footer class="footer-container" style="position: relative; overflow: hidden;">
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
                                    Certificate</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Request Info</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Jobs</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h3 class="text-white fw-bolder">Popular Courses</h3>
                        <p class="text-white">Level 3 Certificate in Phlebotomy (Part 1) Phlebotomy Course</p>
                        <button class="px-3 p-2 fs-5 border-0" style="border: 18px solid green">Review as on <img
                                src="{{ asset('assets/site/star-removebg-preview.png') }}" alt=""
                                style="width: 30px;"><span class="fw-bolder">Trustpilot</span></button>
                    </div>

                    <div class="col-sm-3">
                        <h3 class="text-white fw-bolder">Contact Info</h3>
                        <ul class="text-white px-1" style="list-style: none">
                            <li>Address: 123 Example Street, City</li>
                            <li>Email: info@example.com</li>
                            <li>Phone: +123-456-7890</li>
                        </ul>
                        <div class="d-flex justify-content-start text-start gap-1 mt-4">
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
            <div class="text-center text-white mt-4 bg-black p-3">
                <p class="mt-3 text-center fs-5">© Copyright 2013 – 2024 <span style="color: #FF007F">Inspire London
                        College </span> All Rights Reserved | Powered by <span style="color: #FF007F">Whoopit
                        Agency</span></p>
            </div>
        </footer>

    </div>
</body>

</html>
