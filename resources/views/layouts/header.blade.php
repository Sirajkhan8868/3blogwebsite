<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            display: flex;
            align-items: stretch;
            height: 60px;
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




        .category-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.2s;
        }

        .category-card:hover {
            transform: translateY(-5px);
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


        footer {
            background-color: rgb(95, 93, 93);
        }
    </style>

</head>
<body>
    <header>
        <div class="header-sec d-flex justify-content-between align-items-center p-3 "
            style="background-image: url('{{ asset('assets/site/Chistmas-scaled.webp') }}'); background-size: cover; background-position: top">

            <div class="w-75 d-flex justify-content-center">
                <h3 class="text-white fw-bold text-center pt-3" style="padding-left: 55px">
                    Pay <span class="text-warning">£70</span> to start a Qualification + Get
                    <span class="text-warning">30%</span> Off on Bundle Video Courses.
                </h3>
            </div>
            <a href="{{ route('offer') }}">
                <button type="button" style="border: 4px solid white;" class="btn btn-danger fw-bolder px-4">
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

            <div class="d-flex gap-4">
                <a href="{{ route('booksnow') }}">
                    <button type="button" class="btn btn-info border-0 text-white fw-bolder px-5"
                        style="border-radius: 50px; padding: 10px 0px">
                        Booking Now
                    </button>
                </a>
                <a href="{{ route('contact') }}">
                    <button type="button" class="btn btn-info border-0 text-white fw-bolder px-5 "
                        style="border-radius: 50px; padding: 10px 0">
                        Contact Us
                    </button>
                </a>
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            style="border-radius: 50px 0 0 50px;">
                        <button class="btn btn-info text-white fw-bolder" type="submit"
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
                    <ul class="navbar-nav me-auto px-5">
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
                    <div class="d-flex justify-content-center gap-3 px-5">
                        <button class="btn px-4 text-white  fw-bolder" style="background-color: #FF007F; border-radius: 50px;">Learning Platform</button>
                        <button class="btn btn-vle px-3 p-2 fw-bolder" style="padding: 0px 70px; width: 180px;">VLE</button>
                    </div>

                </div>
            </div>
        </nav>

        <div class="category-section" id="categorySection">
            <div class="container-fluid d-flex">
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
            <div class="ticker-label mx-3 p-4">Latest News</div>
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


    @yield('content')

    <footer>
        <div class="container py-4">
            <div class="row flex-wrap">
                <div class="col-sm-3">
                    <h3 class="text-white fw-bolder">Information</h3>
                    <ul class="text-white px-1" style="list-style: none">
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
                        </li>
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
                        <li><a href="#" class="text-white text-decoration-none">Apply For
                                Certificate</a>
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
                    <div class="mt-3 d-flex justify-content-start text-start gap-1 mt-4">
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
