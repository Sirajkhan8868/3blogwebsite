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
            background: white;
            border-radius: 50%;
            animation: twinkle 50s, moveStars 25s linear infinite;
        }

        @keyframes twinkle {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 4;
                transform: scale(1.5);
            }
        }

        @keyframes moveStars {
            0% {
                transform: translateY(-50px) translateX(0);
            }

            100% {
                transform: translateY(100vh) translateX(50px);
            }
        }

        :root {
            --primary-color: #00d4ff;
        }

        .star {
            position: absolute;
            background-image: url('path/to/your/star-image.png');
            background-size: contain;
            background-repeat: no-repeat;
            width: 50px;
            height: 50px;
            animation: twinkle 50s infinite, moveStars 13s ease-in-out infinite;
            animation-fill-mode: forwards;
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
            height: 200px;
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
            background: #f386c4;
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            text-align: center;
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
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .card-img-wrapper {
            position: relative;
        }

        .hover-img {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .custom-hover:hover {
            background-color: #ff1493 !important;
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

                <div class="d-flex gap-5">
                    <a href="{{ route('booksnow') }}">
                        <button type="button" class="btn btn-info border-0 text-white fw-bolder px-4"
                            style="border-radius: 50px; padding: 10px 0px">
                            Booking Now
                        </button>
                    </a>
                    <a href="{{ route('contact') }}">
                        <button type="button" class="btn btn-info border-0 text-white fw-bolder px-4 "
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
                            <li class="nav-item dropdown" >
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
                            <button class="btn px-3 text-white p-2 fw-bolder"
                                style="background-color: #FF007F; border-radius: 50px;">Learning Platform</button>
                            <button class="btn btn-vle px-3 p-2 fw-bolder"
                                style="padding: 0px 70px; width: 180px;">VLE</button>
                        </div>

                    </div>
                </div>
            </nav>

            <div class="category-section" id="categorySection">
                <div class="container-fluid d-flex">
                    <div class="row flex-grow-1">
                        <div class="col">
                            <div class="category-card" >
                                <img src="{{ asset('assets/site/accounting-finance.jpg') }}"
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
                                icon: '💼'
                            },
                            {
                                name: 'Admin & Secretarial',
                                icon: '📑'
                            },
                            {
                                name: 'Business Management',
                                icon: '📊'
                            },
                            {
                                name: 'HR Management',
                                icon: '👥'
                            },
                            {
                                name: 'Leadership & Management',
                                icon: '🌟'
                            },
                            {
                                name: 'Project Management',
                                icon: '📅'
                            }
                        ],
                        'CPD Courses': [{
                                name: 'courses',
                                icon: '📚'
                            },
                            {
                                name: 'Beauty Therapy',
                                icon: '🎓'
                            },
                            {
                                name: 'ChildPsychology',
                                icon: '📖'
                            },
                            {
                                name: 'HR Management',
                                icon: '📜'
                            },
                            {
                                name: 'Supply Chain Management',
                                icon: '📝'
                            },
                            {
                                name: 'Workplace Managnment',
                                icon: '📘'
                            }
                        ],
                        'Phlebotomy': [{
                                name: 'Level 3 Certificate in Phlebotomy (Part 2 $ 2)',
                                icon: '🩸'
                            },
                            {
                                name: 'Level 3 Certificate in Phlebotomy (Part 2)',
                                icon: '🩺'
                            },
                            {
                                name: 'Phlebotomist Placement Programme',
                                icon: '💉'
                            },
                            {
                                name: 'Level Bloods Practical Session',
                                icon: '🩹'
                            }
                        ],
                        'Ofqual Qualifications': [{
                                name: 'Business Management',
                                icon: '🏆'
                            },
                            {
                                name: 'Cyber Security',
                                icon: '🎓'
                            },
                            {
                                name: 'Education $ Training',
                                icon: '📝'
                            },
                            {
                                name: 'Health $ Safery',
                                icon: '📜'
                            },
                            {
                                name: 'Health $ Socail Care',
                                icon: '📘'
                            },
                            {
                                name: 'Early Year Education $ Child Care',
                                icon: '📚'
                            }
                        ],
                        'CPD Video Training': [{
                                name: 'Business Skills',
                                icon: '🎥'
                            },
                            {
                                name: 'Health $ Safety',
                                icon: '📹'
                            }
                        ],
                        'Care Courses': [

                            {
                                name: 'Mandatory Courses',
                                icon: '📜'
                            },
                            {
                                name: 'Specialist Courses',
                                icon: '📘'
                            },
                            {
                                name: 'Additional Courses',
                                icon: '📚'
                            }
                        ]

                    };

                    function loadCategories(categoryName) {
                        const row = categorySection.querySelector('.row');
                        row.innerHTML = '';

                        const catList = categories[categoryName] || [];
                        catList.forEach(cat => {
                            row.innerHTML += `
                                <div class="col">
                                    <div class="category-card">
                                        <i class="category-icon">${cat.icon}</i>
                                        <div>${cat.name}</div>
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
                    style="width: 50rem; border-radius: 40px; background: transparent; border: 8px solid white; z-index: 2;">
                    <div class="card-body text-center">
                        <h1 class="card-title text-white">Learn & Get Endorsed</h1>
                        <h3 class="card-subtitle mb-2 text-white">Distance Learning Courses UK</h3>
                        <p class="card-text text-white">A flexible and convenient way of learning new skills. Find the
                            right Distance Learning Courses and CPD Training for you.</p>

                            <a href="#"
                            style="background-color: rgb(235, 54, 180); padding: 10px 20px; border-radius: 5px; color: white; text-decoration: none; font-weight: bold; display: inline-block; text-align: center;"
                            class="explore-btn"> Explore Our Courses
                            <i class="fa-solid fa-arrow-right"></i>

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

                            <a href="#" class="btn p-0 social-icon" style="background-color: red;">
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
                            <div class="card text-center shadow-lg" style="width: 18rem;">
                                <div class="card-body d-flex align-items-center p-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="#FF007F" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                    </div>
                                    <div class="px-4">
                                        <h4 class="card-title fw-bolder" style="color: #FF007F">65,545+</h4>
                                        <p class="card-text fw-bolder">Enrolled Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="card text-center shadow-lg" style="width: 18rem;">
                                <div class="card-body d-flex align-items-center p-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="#FF007F" class="bi bi-book-half" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0c.4 0 .7.3.7.7v14.6c0 .4-.3.7-.7.7-.2 0-.4-.1-.5-.3l-2.5-3.4-2.5 3.4c-.1.2-.3.3-.5.3-.4 0-.7-.3-.7-.7V.7C7.3.3 7.6 0 8 0z" />
                                        </svg>
                                    </div>
                                    <div class="px-4">
                                        <h4 class="card-title fw-bolder" style="color: #FF007F">450+</h4>
                                        <p class="card-text fw-bolder">Courses Offered</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="card text-center shadow-lg" style="width: 18rem; ">
                                <div class="card-body d-flex align-items-center p-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="#FF007F" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                            <path d="M8 0L0 4l8 4 8-4-8-4zM0 8l8 4 8-4-8-4-8 4z" />
                                        </svg>
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
                            <div class="card text-center shadow-lg" style="width: 18rem;">
                                <div class="card-body d-flex align-items-center p-4">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                            fill="#FF007F" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.974 4.026a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L7 8.586l5.974-5.96a1 1 0 0 1 1.414 0z" />
                                        </svg>
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

                        star.style.left = `${x}vw`;
                        star.style.top = `${y}vh`;
                        star.style.animationDelay = `${delay}s`;
                        star.style.width = `${size}px`;
                        star.style.height = `${size}px`;

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
            <div class="d-flex justify-content-evenly mt-5 mb-5">
                <div class="mt-5 ">
                    <h6 class="text-uppercase text-info fw-bold mb-2 text-start " style="padding-left: 60px">
                        INSPIRE LONDON COLLEGE
                    </h6>
                    <h2 class="fw-bold mb-3 pt-2 text-start" style="padding-left: 60px">
                        Build Your Skills Online <br> Anytime
                    </h2>
                    <p class="text-muted mb-3 text-start pt-2  pb-3 fs-5" style="padding-left: 60px; line-height: 1.8">
                        Inspire London College is the leading specialist provider of Distance Learning Courses
                        UK<br>
                        .Weare distinguished global distance and online learning platforms dedicated to providing
                        <br>
                        courses UK, short courses online, CPD training in the UK and worldwide. We deliver a
                        wide<br>
                        range of online courses UK with certification from reputable awarding organisations.
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
                        class="img-fluid">
                </div>
            </div>
        </section>

        <section class="p-5" style="background-color: ghostwhite">
            <div class="row align-items-center mb-5 g-0">
                <div class="col-md-6 text-center pe-0">
                    <img src="{{ asset('assets/site/healt.webp') }}" alt="Health and Social Care" class="img-fluid"
                        style="width: 650px; padding-left: 5%">
                </div>

                <div class="col-md-6 text-start">
                    <h2 class="pb-2">Level 3 Diploma in Health and Social Care</h2>
                    <div class="d-flex align-items-center text-start mb-2">
                        <span class="badge me-2 p-2 px-3 fw-bolder"
                            style="background-color: #C13584">Qualification</span>
                        <span class="text-warning">★★★★★</span>
                        <strong class="ms-2">500+</strong>
                        <span class="badge bg-primary ms-2 px-3 p-2 fw-bolder">Top Rated</span>
                    </div>
                    <p class="fs-5 pb-2" style="line-height: 40px">With a focus on real-world application and
                        progression opportunities, <br>the Qualifi
                        Level 3 Diploma provides a stepping stone toward advanced <br>qualifications and rewarding
                        roles.
                    </p>

                    <div class="row mb-2 " style="gap: 10px">
                        <div class="col-md-3 p-2 border-dotted mb-3">
                            <h6 class="text-pink fw-bolder " style="color: #FF007F">Duration</h6>
                            <p>6 months - 12 months</p>
                        </div>
                        <div class="col-md-3 p-2 border-dotted mb-3">
                            <h6 class="text-pink fw-bolder " style="color: #FF007F">Assesment Method</h6>
                            <p>Assignments / Report
                            </p>
                        </div>
                        <div class="col-md-3 p-2 border-dotted mb-3">
                            <h6 class="text-pink fw-bolder " style="color: #FF007F">Awarding Body</h6>
                            <p>Qualifi Ltd.</p>
                        </div>
                    </div>




                    <div class="text-start">
                        <button class="btn fw-bolder"
                            style="background-color: #FF007F; color: white; padding-left: 2rem; padding-right: 2rem;">
                            Enrol Now
                        </button>
                        <button class="btn fw-bolder"
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
                    <a href="{{ route('view') }}"
                    style="padding: 10px 20px; border-radius: 50px; color: white; text-decoration: none; font-weight: bold; display: inline-block; text-align: center;"
                    class="explore-btn view-all-btn ms-auto px-4 fw-bolder"> View All
                    <i class="fa-solid fa-arrow-right"></i>

                </a>
                </div>

                <div class="row g-4">

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='9' cy='7' r='4'/%3E%3Cpath d='M23 21v-2a4 4 0 0 0-3-3.87'/%3E%3Cpath d='M16 3.13a4 4 0 0 1 0 7.75'/%3E%3C/svg%3E"
                                    alt="HR Icon">
                            </div>
                            <h3 class="h5 mb-4">HR Management</h3>
                            <a href="{{ route('hr') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>

                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Crect x='3' y='3' width='18' height='18' rx='2' ry='2'/%3E%3Cline x1='3' y1='9' x2='21' y2='9'/%3E%3Cline x1='9' y1='21' x2='9' y2='9'/%3E%3C/svg%3E"
                                    alt="Project Icon">
                            </div>
                            <h3 class="h5 mb-4">Project Management</h3>
                            <a href="{{ route('pm') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z'/%3E%3Cpolyline points='9 22 9 12 15 12 15 22'/%3E%3C/svg%3E"
                                    alt="Construction Icon">
                            </div>
                            <h4 class="h5 mb-4">Contruction Management</h4>

                            <a href="{{ route('cm') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>

                                              </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='9' cy='7' r='4'/%3E%3Cpath d='M23 21v-2a4 4 0 0 0-3-3.87'/%3E%3Cpath d='M16 3.13a4 4 0 0 1 0 7.75'/%3E%3C/svg%3E"
                                    alt="Leadership Icon">
                            </div>
                            <h4 class="h5 mb-4">Leadership Management</h4>
                            <a href="{{ route('lm') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>                       </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Crect x='2' y='3' width='20' height='14' rx='2' ry='2'/%3E%3Cline x1='2' y1='7' x2='22' y2='7'/%3E%3C/svg%3E"
                                    alt="Accounting Icon">
                            </div>
                            <h3 class="h5 mb-4">Accounting and Finance</h3>
                            <a href="{{ route('af') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>                       </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/%3E%3Ccircle cx='12' cy='7' r='4'/%3E%3C/svg%3E"
                                    alt="Admin Icon">
                            </div>
                            <h3 class="h5 mb-4">Admin, Secretarial & PA</h3>
                            <a href="{{ route('as') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>
                                              </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'/%3E%3C/svg%3E"
                                    alt="Business Icon">
                            </div>
                            <h4 class="h5 mb-4">Business Management</h4>
                            <a href="{{ route('bm') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

                                </button>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="category-card">
                            <div class="icon-circle">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2300d4ff' stroke-width='2'%3E%3Cpath d='M22 10v6M2 10l10-5 10 5-10 5z'/%3E%3Cpath d='M6 12v5c3 3 9 3 12 0v-5'/%3E%3C/svg%3E"
                                    alt="Education Icon">
                            </div>
                            <h4 class="h5 mb-4">Education and Training</h4>
                            <a href="{{ route('et') }}" class="text-decoration-none text-start ">
                                <button type="button"
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                    See Courses   <i class="fa-solid fa-arrow-right"></i>

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
                    <a href="{{ route('view') }}"
                    style="padding: 10px 20px; border-radius: 50px; color: white; text-decoration: none; font-weight: bold; display: inline-block; text-align: center;"
                    class="explore-btn view-all-btn ms-auto px-4 fw-bolder"> View All
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                </div>
                <div class="row g-2 mb-2">

                    <div class="col">
                        <div class="card-container mt-1">
                            <div class="card shadow">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/site/workplace.webp') }}" class="card-img-top"
                                        alt="Education">
                                    <div class="card-img-overlay"></div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 6 Diploma in
                                        Project Management</h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 7 Diploma in
                                        HR Management
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 6 Diploma in
                                        the Professional Supervisor
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 7 Diploma in
                                        Operations Management
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 5 Diploma in
                                        Facilities Management
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 7 Diploma in
                                        Counselling Skills
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 4 Diploma in
                                        Child Psychology
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                            <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="color: #C13584">Level 5 Diploma in
                                        Train the Trainer
                                    </h5>
                                    <div class="hover-text">
                                        <p class="card-text text-start" style="font-size: 14px">Endorsed by TQUK
                                            Certificate. 15 Modules.</p>
                                        <button class="text-center mx-auto d-block border border-primary text-primary px-4 p-2 border"
                                            style="border-radius: 50px; background-color:transparent">Know
                                            More</button>
                                    </div>
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                                        <p class="card-text fs-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
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
                <div class="img-sec">
                    <img src="{{ asset('assets/site/New.webp') }}" alt="">
                </div>
                <div class="pt-5 px-4">
                    <h1 class="fw-bolder">
                        Get an Additional <span>10% Discount <br>On Certificates.</span></h1>
                    <p style="white-space: pre-line" class="pt-3">Supercharge your career growth with an
                        inclusive
                        10% discount on all certificates.
                        Don’t Delay – Enrol Today</p>
                    <button style="background-color: rgb(235, 54, 180); border-radius: 50px" class="p-2 border-0">
                        <a style="text-decoration: none;" href="#"
                            class="card-link text-white fw-bolder px-3">Clims Certificate</a>
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

        <section
            style="background-image: url({{ asset('assets/site/abc.webp') }}); background-position:center; background-repeat:no-repeat; height: 70vh;">
            <div class="text-center pb-5 pt-5">
                <h4 class="text-white">Flexible & Convenient Learning</h4>
                <h3 class="h4 mt-3 pb-5 text-white">Experience The Best Online Study Scheme</h3>
            </div>

            <div class="container card-container pt-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <h5>Dedicated Tutor Support</h5>
                                </div>
                                <div class="flip-card-back">
                                    <p>Get personalized support from our experienced tutors throughout your learning
                                        journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                    <h5>Self-Study Courses</h5>
                                </div>
                                <div class="flip-card-back">
                                    <p>All courses are specially designed for self-study and are often personalised to
                                        fit the needs of individual students.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                                        </svg>
                                    </div>
                                    <h5>Easy Access</h5>
                                </div>
                                <div class="flip-card-back">
                                    <p>Access your courses anytime, anywhere with our user-friendly platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                    </div>
                                    <h5>Accredited Certificates</h5>
                                </div>
                                <div class="flip-card-back">
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
                <div class="card" style="width: 22rem;">
                    <div class="card-img-wrapper" style="overflow: hidden;">
                        <img src="{{ asset('assets/site/cards.webp') }}" class="card-img-top hover-img"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Skills for Care Now Endorses Our Exceptional Training</h5>
                        <p class="card-text">In the dynamic landscape of education and training, institutes that
                            prioritise</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button"
                                class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                Read More   <i class="fa-solid fa-arrow-right"></i>

                            </button>
                        </a>
                        <a href="" class="text-start"
                                   style="padding: 10px 20px; border-radius: 50px; color: white; text-decoration: none; font-weight: bold;
                                   display: inline-block; text-align: start;"
                                   class="explore-btn view-all-btn px-4 fw-bolder">
                                    View All

                                </a>
                    </div>
                </div>

                <div class="card" style="width: 22rem;">
                    <div class="card-img-wrapper" style="overflow: hidden;">
                        <img src="{{ asset('assets/site/card2.webp') }}" class="card-img-top hover-img"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">What is Phlebotomy</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button"
                                class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="card pb-3" style="width: 22rem;">
                    <div class="card-img-wrapper" style="overflow: hidden;">
                        <img src="{{ asset('assets/site/card3.webp') }}" class="card-img-top hover-img"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">What is Personal Development?</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="text-decoration-none text-start ">
                            <button type="button"
                                class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill custom-hover">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>




        <section>
            <div class="d-flex justify-content-center mb-5">
                <div class="p-2">
                    <img src="{{ asset('assets/site/Care.webp') }}" alt="" style="width: 500px">
                </div>
                <div class=" mt-2">
                    <button style="background-color: rgb(235, 54, 180);" class="p-2 border-0">
                        <a style="text-decoration: none;" href="#"
                            class="card-link text-white fs-5 fw-bolder px-3">LATEST NEWS</a>
                    </button>
                    <h5 class="mt-3">Inspire London College Has Officially Achieved Skills for <br>
                        Care Approval
                    </h5>
                    <p style="white-space: pre-line text-start">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Ducimus labore a sed magni, fuga natus. <br>Tempora quisquam accusantium laborum beatae,
                        minima deleniti exceptur sed perspiciatis fugit libero<br> quia dolore ipsam.</p>
                    <p style="white-space: pre-line">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Ducimus Tempora quisquam accusantium laborum beatae, minima deleniti excepturi sed perspiciatis
                        fugit libero quia dolore ipsam. labore a sed magni, fuga natus.</p>
                    <p style="white-space: pre-line ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Ducimus labore a sed magni, fuga natus. Tempora quisquam accusantium laborum beatae, minima
                        deleniti excepturi sed perspiciatis fugit libero quia dolore ipsam.</p>
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
                        <div class=" d-flex justify-content-start text-start gap-1 mt-4">
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
    </div>
</body>

</html>
