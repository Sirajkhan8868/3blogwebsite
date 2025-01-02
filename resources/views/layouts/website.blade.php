<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

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
            color: #666 !important;
            padding: 0.5rem 1rem !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #00bcd4 !important;
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

        .latest-news {
            background-color: #e91e63;
            color: white;
            padding: 1rem 2rem;
            margin-right: 1rem;
        }

        .ticker-wrapper {
            background-color: #f8f9fa;
            padding: 10px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .ticker-label {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            margin-right: 15px;
            white-space: nowrap;
        }

        .ticker {
            overflow: hidden;
            width: 100%;
        }

        .ticker-content {
            display: inline-block;
            white-space: nowrap;
            animation: ticker 30s linear infinite;
        }

        .ticker-content span {
            margin-right: 50px;
        }

        @keyframes ticker {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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

        .snowfall-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .snowfall-container::before,
        .snowfall-container::after {
            content: "";
            position: absolute;
            top: -200px;
            left: 0;
            width: 100%;
            height: 200%;

            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.9) 2px, transparent 3px);
            background-size: 15px 15px, 25px 25px;
            animation: snowfall 10s linear infinite;

            opacity: 0.8;
        }

        .snowfall-container::after {
            animation: snowfall 15s linear infinite;
            opacity: 0.5;
        }

        @keyframes snowfall {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(100%);
            }
        }




        footer {
            background-color: rgb(95, 93, 93);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header-sec d-flex justify-content-between align-items-center p-3 "
                style="background-image: url('{{ asset('assets/site/Chistmas-scaled.webp') }}'); background-size: cover; background-position: top;">

                <div class="w-75 d-flex justify-content-center">
                    <h3 class="text-white fw-bold text-center pt-3" style="padding-left: 55px">
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

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/site/ILC-logo-1024x616.webp') }}" alt="Inspire London College Logo"
                            style="width: 100px; height: auto;">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Endorsed Courses
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    CPD Courses
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Phlebotomy
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Ofqual Qualifications
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    CPD Video Training
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    Care Courses
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex px-5">
                            <button class="btn btn-platform">Learning Platform</button>
                            <button class="btn btn-vle px-5" style="padding: 0px 70px">VLE</button>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="category-section" id="categorySection">
                <div class="container-fluid d-flex">
                    <div class="latest-news">
                        <h5 class="m-0">Latest News</h5>
                    </div>
                    <div class="row flex-grow-1">
                        <div class="col">
                            <div class="category-card">
                                <img src="{{ asset('assets/site/accounting-finance.jpg') }}" alt="Accounting & Finance"
                                    class="category-image">
                                <div>Accounting & Finance</div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="category-card">
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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const categorySection = document.getElementById('categorySection');
                    const navItems = document.querySelectorAll('.navbar-nav .dropdown');
                    let isHovering = false;

                    const categories = {
                        'Endorsed Courses': ['Accounting & Finance', 'Admin & Secretarial', 'Business Management',
                            'HR Management', 'Leadership $ Management', 'Project Management'
                        ],
                        'CPD Courses': ['CPD Course 1', 'CPD Course 2', 'CPD Course 3', 'CPD Course 4', 'CPD Course 5',
                            'CPD Course 6'
                        ],
                        'Phlebotomy': ['Phlebotomy Course 1', 'Phlebotomy Course 2', 'Phlebotomy Course 3',
                            'Phlebotomy Course 4'
                        ],
                        'Ofqual Qualifications': ['Qualification 1', 'Qualification 2', 'Qualification 3',
                            'Qualification 4', 'Qualification 5', 'Qualification 6',
                        ],
                        'CPD Video Training': ['Video Training 1', 'Video Training 2'],
                        'Care Courses': ['Care Course 1', 'Care Course 2']
                    };

                    function loadCategories(categoryName) {
                        const row = categorySection.querySelector('.row');
                        row.innerHTML = '';

                        const catList = categories[categoryName] || [];
                        catList.forEach(cat => {
                            row.innerHTML += `
                                <div class="col">
                                    <div class="category-card">
                                        <i class="category-icon">📘</i>
                                        <div>${cat}</div>
                                    </div>
                                </div>`;
                        });

                        row.innerHTML += `
                            <div class="col">
                                <div class="category-card">
                                    <i class="category-icon">≡</i>
                                    <div>All Categories</div>
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
                            const categoryName = dropdownLink.textContent.trim(); // Get category name
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

            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="ticker-wrapper">
                            <div class="ticker-label">Breaking News</div>
                            <div class="ticker">
                                <div class="ticker-content">
                                    <span>First breaking news item</span>
                                    <span>Second important update</span>
                                    <span>Third news flash</span>
                                    <span>Fourth headline of the day</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/site/skik') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </header>

        <section>

            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden"
                style="min-height: 70vh; background-image: url('{{ asset('assets/site/bg.webp') }}'); background-size: cover; background-position: center; filter: grayscale(100%) brightness(80%) sepia(20%) hue-rotate(190deg);">

                <div class="snowfall-container position-absolute w-100 h-100"></div>

                <div class="card p-5 mt-5 mb-5"
                    style="width: 50rem; border-radius: 40px; background: transparent; border: 8px solid white;">
                    <div class="card-body text-center">
                        <h1 class="card-title text-white">Learn & Get Endorsed</h1>
                        <h3 class="card-subtitle mb-2 text-white">Distance Learning Courses UK</h3>
                        <p class="card-text text-white">A flexible and convenient way of learning new skills. Find the
                            right Distance Learning Courses and CPD Training for you.</p>
                        <button style="background-color: rgb(235, 54, 180)" class="p-2 border-0">
                            <a style="text-decoration: none;" href="#"
                                class="card-link text-white fw-bolder px-3">Explore Our Courses</a>
                        </button>
                        <div class="mt-3 d-flex justify-content-center gap-2">
                            <button class="btn p-0"
                                style="width: 50px; height: 50px; background-color: #2e5fc9; border-radius: 50%;">
                                <a href="#"><img src="{{ asset('assets/site/fb-removebg-preview.png') }}"
                                        alt="" class="img-fluid" style="width: 35px; height: 35px;"></a>
                            </button>
                            <button class="btn p-0"
                                style="width: 50px; height: 50px; background-color: #0077b5; border-radius: 50%;">
                                <a href="#"><img src="{{ asset('assets/site/linkdin.webp') }}" alt=""
                                        class="img-fluid" style="width: 35px; height: 35px;"></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5 position-relative" style="top: -100px;">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card text-center border-primary shadow-lg">
                            <div class="card-body d-flex">
                                <div>
                                    <img src="" alt="">
                                </div>
                                <div>
                                    <h5 class="card-title text-primary">Card 1</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center border-success shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title text-success">Card 2</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center border-danger shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Card 3</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center border-danger shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Card 3</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="px-3 px-md-5">
            <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="p-4">
                    <h6 class="text-uppercase text-primary fw-bold mb-2 text-start" style="padding-left: 99px">
                        INSPIRE LONDON COLLEGE
                    </h6>
                    <h4 class="fw-bold mb-3 text-start" style="padding-left: 99px">
                        Build Your Skills Online Anytime
                    </h4>

                    <p class="text-muted mb-2 text-start" style="white-space: pre-wrap; line-height: 1.8;">
                        Inspire London College is the leading specialist provider of Distance Learning Courses UK. We
                        are
                        distinguished global distance and online learning platforms dedicated to providing online
                        courses UK, short courses online, CPD training in the UK and worldwide. We deliver a wide range
                        of online courses UK with certification from reputable awarding organisations.
                    </p>

                    <a href="#" class="text-decoration-none text-start" style="padding-left: 99px;
">
                        <button type="button"
                            class="btn btn-danger border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                            Read More
                        </button>
                    </a>
                </div>
                <div>
                    <img src="{{ asset('assets/site/card-image.webp') }}" alt="Inspire London College"
                        class="img-fluid">
                </div>
            </div>
        </section>
        <section class="catagories-sec py-5" style="background-color: gainsboro">
            <div class="container">
                <h1 class="text-center mt-5 mb-5">All Catagories</h1>
                <div class="row justify-content-center text-center g-4">
                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body  align-items-center justify-content-center">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>HR Management
                                </h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body align-items-center justify-content-center mb-3">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>Project Management
                                </h6>
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body  align-items-center justify-content-center">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>Construction Management
                                </h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body align-items-center justify-content-center">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>Leadership and Management
                                </h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center g-4 mb-5 mt-1">

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body  align-items-center justify-content-center mb-3">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>Accounting and Finance
                                </h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body  align-items-center justify-content-center">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>Admin, Secretarial & PA
                                </h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body align-items-center justify-content-center">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">
                                <h6>Business Management
                                </h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body  align-items-center justify-content-center">
                                <img src="{{ asset('assets/site/linkdin.webp') }}" alt="LinkedIn" class="img-fluid"
                                    style="max-width: 100px;">

                                <h6>Education and Training</h6>
                                <a href="#" class="text-decoration-none text-start ">
                                    <button type="button"
                                        class="btn btn-info border-0 text-white fw-bolder px-4 py-2 rounded-pill custom-hover">
                                        See Courses
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="courses py-5">
            <div class="container">
                <div class="row align-items-center pb-5">
                    <div class="col text-center">
                        <h1 class="d-inline-block mb-0">Popular Courses</h1>
                        <a href="#" class="btn btn-primary ms-2 float-left">View All Courses</a>
                    </div>
                </div>
                <div class="row g-0">

                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/workplace.webp') }}" class="img-fluid rounded"
                            alt="Image 1" style="width: 300px;">
                    </div>
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 2.webp') }}" class="img-fluid rounded" alt="Image 2"
                            style="width: 300px">
                    </div>
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 3.webp') }}" class="img-fluid rounded" alt="Image 3"
                            style="width: 300px">
                    </div>
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 4.webp') }}" class="img-fluid rounded" alt="Image 4"
                            width="300px">
                    </div>

                </div>
                <div class="row g-0 mt-3">
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 3.webp') }}" class="img-fluid rounded" alt="Image 1"
                            width="300px">
                    </div>
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 6.webp') }}" class="img-fluid rounded" alt="Image 2"
                            width="300px">
                    </div>
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 7.webp') }}" class="img-fluid rounded" alt="Image 3"
                            width="300px">
                    </div>
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/site/work 8.webp') }}" class="img-fluid rounded" alt="Image 4"
                            width="300px">
                    </div>
                </div>
            </div>
        </section>

        <section class="feedback py-5" style="background-color: gainsboro">
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
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Laura Evans
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Lydia Gibbs
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Laura Evans
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">George
                                            Leach</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Laura Evans
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">
                        <div class="row text-center d-flex justify-content-center">
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Lydia Gibbs
                                            <h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Lydia Gibbs
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}"
                                            alt="" style="width: 150px">
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Neque odit modi, aut voluptates fuga nesciunt aperiam accusantium delectus
                                            ipsum ut quo impedit molestiae minus exercitationem praesentium facere
                                            assumenda ullam cupiditate quod repellendus! Explicabo laborum illo
                                            obcaecati hic eum. Quas, nulla. Dolorum ratione molestiae soluta recusandae
                                            eum explicabo, minima eius ducimus doloribus beatae aspernatur impedit odit
                                            excepturi maxime fugiat eos blanditiis optio voluptate est quam dolore
                                            tempora. Assumenda alias quas blanditiis eum explicabo? Mollitia praesentium
                                            itaque, laudantium a quia, earum impedit ullam consequuntur fuga veniam nam
                                            doloribus consectetur minus? Quia quibusdam mollitia non aperiam praesentium
                                            commodi dolores quas repellat alias atque.</p>
                                        <h5><img src="{{ asset('assets/site/iii.webp') }}" alt="">Laura Evans
                                        </h5>

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

        <section class="cartificate">
            <div class="d-flex justify-content-center pt-5 pb-5">
                <div class="img-sec">
                    <img src="{{ asset('assets/site/New.webp') }}" alt="">
                </div>
                <div class="pt-5 px-4">
                    <h1 class="fw-bolder">
                        Get an Additional <span>10% Discount <br>On Certificates.</span></h1>
                    <p style="white-space: pre-line" class="pt-3">Supercharge your career growth with an inclusive
                        10% discount on all certificates.
                        Don’t Delay – Enrol Today</p>
                    <button style="background-color: rgb(235, 54, 180); border-radius: 50px" class="p-2 border-0">
                        <a style="text-decoration: none;" href="#"
                            class="card-link text-white fw-bolder px-3">Clim Certificate</a>
                    </button>
                    <div class="py-4">
                        <img src="{{ asset('assets/site/endorsed-1.webp') }}" alt="" width="90px"
                            class="p-1 border-dotted">
                        <img src="{{ asset('assets/site/end 2.webp') }}" alt="" width="90px"
                            class="p-1  border-dotted">
                        <img src="{{ asset('assets/site/end 3.jpg') }}" alt="" width="90px"
                            class="p-1 border-dotted">
                        <img src="{{ asset('assets/site/end 4.webp') }}" alt="" width="90px"
                            class="p-1 border-dotted">
                        <img src="{{ asset('assets/site/end 5.webp') }}" alt="" width="90px"
                            class="p-1  border-dotted">
                        <img src="{{ asset('assets/site/end 7.webp') }}" alt="" width="90px"
                            class="p-1 border-dotted">
                        <img src="{{ asset('assets/site/end 4.webp') }}" alt="" width="90px"
                            class="p-1 border-dotted">

                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: gainsboro">
            <h1 class="pb-5 text-center pt-5">Blogs</h1>
            <div class="d-flex justify-content-center gap-4 pb-5">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/site/cards.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Skills for Care Now Endorses Our Exceptional Training</h5>
                        <p class="card-text">In the dynamic landscape of education and training, institutes that
                            prioritise</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button"
                                class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                Read More
                            </button>
                        </a>

                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/site/card2.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">What is Phlebotomy</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button"
                                class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card pb-3" style="width: 22rem;">
                    <img src="{{ asset('assets/site/card3.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">What is Personal Development?</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button"
                                class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="d-flex justify-content-center">
                <div class="p-5">
                    <img src="{{ asset('assets/site/Care.webp') }}" alt="" style="width: 500px">
                </div>
                <div class=" mt-5">
                    <button style="background-color: rgb(235, 54, 180);" class="p-2 border-0">
                        <a style="text-decoration: none;" href="#"
                            class="card-link text-white fs-5 fw-bolder px-3">LATEST NEWS</a>
                    </button>
                    <h5 class="mt-3">Inspire London College Has Officially Achieved Skills for <br>
                        Care Approval
                    </h5>
                    <p style="white-space: pre-line text-start">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Ducimus
                        labore a sed magni, fuga natus. <br>Tempora quisquam accusantium laborum beatae, minima deleniti
                        exceptur sed perspiciatis fugit libero<br> quia dolore ipsam.</p>
                    <p style="white-space: pre-line">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus
                        Tempora quisquam accusantium laborum beatae, minima deleniti excepturi sed perspiciatis fugit
                        libero quia dolore ipsam. labore a sed magni, fuga natus.</p>
                    <p style="white-space: pre-line">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus
                        labore a sed magni, fuga natus. Tempora quisquam accusantium laborum beatae, minima deleniti
                        excepturi sed perspiciatis fugit libero quia dolore ipsam.</p>
                </div>
            </div>
        </section>

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
                        <button class="px-3 p-2 fs-5 border-0" style="border: 18px solid green">Review as on <img
                                src="{{ asset('assets/site/star-removebg-preview.png') }}" alt=""
                                style="width: 30px; "><span class="fw-bolder">Trustpilot</span></button>
                    </div>

                    <div class="col-sm-3">
                        <h3 class="text-white fw-bolder">Contact Info</h3>
                        <ul class="text-white px-1" style="list-style: none">
                            <li>Address: 123 Example Street, City</li>
                            <li>Email: info@example.com</li>
                            <li>Phone: +123-456-7890</li>
                        </ul>
                        <div>
                            <a href=""><img src="{{ asset('assets/site/fB.png') }}" alt=""
                                    style="width: 30px"></a>
                            <a href=""><img src="{{ asset('assets/site/whatsapp-removebg-preview.png') }}"
                                    alt="" width="30px"></a>
                            <a href=""><img src="{{ asset('assets/site/linkdin.png') }}" alt=""
                                    width="30px"></a>
                            <a href=""><img src="{{ asset('assets/site/youtube.png') }}" alt=""
                                    width="30px"></a>
                            <a href=""><img src="{{ asset('assets/site/instagram.jpg') }}" alt=""
                                    width="30px"></a>
                            <a href=""><img src="{{ asset('assets/site/linkdin.png') }}" alt=""
                                    width="30px"></a>
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
    </div>
</body>

</html>
