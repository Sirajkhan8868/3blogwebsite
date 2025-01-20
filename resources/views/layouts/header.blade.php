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
        .scrolling-text {
            color: #ffffff;
            font-weight: 500;
            white-space: nowrap;
            padding: 0 20px;
            animation: scroll 15s linear infinite;
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
            background-color: #ffffff;
            padding: 1rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
                        <a href="/christmas" class="btn btn-danger px-4 " style="border: 2px solid white; font-weight:600">Click Here</a>
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
                            <a href="/booksnow" class="btn btn-info text-white fw-bold px-4 py-2 rounded-pill">Book
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
                <img src="assets/site/ILC-logo-1024x616.webp" alt="Inspire London College Logo" style="width: 150px; height: auto;">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto d-flex flex-row">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Endorsed Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">CPD Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Phlebotomy</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ofqual Qualifications</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">CPD Video Training</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Care Courses</a>
                    </li>
                </ul>
                <div class="d-none d-lg-flex align-items-center gap-2">
                    <button class="btn text-white py-2 px-4" style="background-color: #FF007F; border-radius: 50px; font-size: 0.9rem;">
                        Learning Platform
                    </button>
                    <button class="btn btn-info text-white px-3 py-2" style="border-radius: 50px; width: 180px; font-size: 0.9rem;">
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
                                <li class="nav-item"><a class="nav-link" href="{{ route('accounting') }}">Accounting and
                                        Finance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin Secretarial &
                                        PA</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('business') }}">Business Management</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('human') }}">HR Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('leadership') }}">Leadership $ management</a></li>

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
                                <li class="nav-item"><a class="nav-link" href="{{ route('accounting') }}">Accounting $ Finance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('beauty') }}">Beauty Therapy</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('childphychology') }}">Child Psychology</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('human') }}">HR Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('supply') }}">Supply Chain Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('workplace') }}">Workplace Management</a></li>

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
                                <li class="nav-item"><a class="nav-link" href="{{ route('booksnow') }}">Level 3 Certicate Phebotomy (part 2 $ 2) </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('level') }}">Level 3 Certicate Phelotomy (Part 2)</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Phebotmist Placement</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Live Blood Practical</a></li>

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
                                <li class="nav-item"><a class="nav-link" href="{{ route('business') }}">Business Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('cyber') }}">Cyber Security </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('education') }}">Education $ training </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('health') }}">Healt $ Safety</a></li>

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
                                <li class="nav-item"><a class="nav-link" href="{{ route('business') }}">Business Skills</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('health') }}">Health $ Safety </a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Professional Developer</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="{{ route('mandatory') }}">Manadatory</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('additional') }}">Additional Courses</a></li>
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
                            route: '/childpsychology'
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
                            route: '/phlebotomy-lvl3'
                        },
                        {
                            name: 'Phlebotomist Placement',
                            icon: 'fas fa-hands-helping',
                            route: '/placement-programme'
                        },
                        {
                            name: 'Practical Sessions',
                            icon: 'fas fa-vials',
                            route: '/practical-sessions'
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
                            route: '/cyber-security'
                        },
                        {
                            name: 'Education & Training',
                            icon: 'fas fa-chalkboard-teacher',
                            route: '/education'
                        },
                        {
                            name: 'Health & Safety',
                            icon: 'fas fa-heartbeat',
                            route: '/health-safety'
                        }
                    ],
                    'CPD Video Training': [{
                            name: 'Business Skills',
                            icon: 'fas fa-briefcase',
                            route: '/business-skills'
                        },
                        {
                            name: 'Health & Safety',
                            icon: 'fas fa-heartbeat',
                            route: '/health-safety'
                        },
                        {
                            name: 'Professional Development',
                            icon: 'fas fa-user-graduate',
                            route: '/professional-development'
                        }
                    ],
                    'Care Courses': [{
                            name: 'Mandatory Training',
                            icon: 'fas fa-file-alt',
                            route: '/mandatory-training'
                        },
                        {
                            name: 'Additional Courses',
                            icon: 'fas fa-plus-circle',
                            route: '/additional-courses'
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




    @yield('content')


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
                        <li><a href="#" class="text-white text-decoration-none">Apply For Certificate</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Apply Student Discount Card</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Apply H&S Care Certificate</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Request Info</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Jobs</a></li>
                    </ul>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <h3 class="fw-bolder">Popular Courses</h3>
                    <p>Level 3 Certificate in Phlebotomy (Part 1) Phlebotomy Course</p>
                    <button class="px-3 p-2 fs-5 border-0" style="border: 18px solid green;">
                        Review as on <img src="{{ asset('assets/site/star-removebg-preview.png') }}" alt="" style="width: 30px;">
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
                        <a href="#" class="btn p-0 bg-primary" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;">
                            <i class="fab fa-facebook-f" style="font-size: 20px; color: white;"></i>
                        </a>
                        <a href="#" class="btn p-0" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #25d366;">
                            <i class="fab fa-whatsapp" style="font-size: 20px; color: white;"></i>
                        </a>
                        <a href="#" class="btn p-0" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #0077b5;">
                            <i class="fab fa-linkedin-in" style="font-size: 20px; color: white;"></i>
                        </a>
                        <a href="#" class="btn p-0" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #1DA1F2;">
                            <i class="fab fa-twitter" style="font-size: 20px; color: white;"></i>
                        </a>
                        <a href="#" class="btn p-0" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: #C13584;">
                            <i class="fab fa-instagram" style="font-size: 20px; color: white;"></i>
                        </a>
                        <a href="#" class="btn p-0" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; background-color: red;">
                            <i class="fab fa-youtube" style="font-size: 20px; color: white;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center text-white mt-5 bg-black p-3" style="position: relative; top:22px">
            <p class="fs-5 mb-0">© Copyright 2013 – 2024 <span style="color: #FF007F">Inspire London College</span> All Rights Reserved | Powered by <span style="color: #FF007F">Whoopit Agency</span></p>
        </div>
    </footer>
</body>

</html>
