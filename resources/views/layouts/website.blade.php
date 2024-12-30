<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sticky Footer Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            /* Full height */
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        footer {
            background-color: rgb(95, 93, 93);
        }
    </style>
</head>

<body>
    <div class="wrapper">
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
                    <a href="">
                        <button type="button" class="btn btn-info border-0 text-white fw-bold px-4"
                            style="border-radius: 50px; padding: 10px 0px">
                            Booking Now
                        </button>
                    </a>
                    <a href="">
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

        <div class="d-flex justify-content-center align-items-center"
            style="min-height: 50vh; background-image: url('{{ asset('assets/site/marek-piwnicki-jpLbO6lXTEk-unsplash.jpg') }}'); background-size: cover; background-position: center;">
            <div class="card p-5 mt-5 mb-5"
                style="width: 50rem; border-radius: 40px; background: transparent; border: 8px solid white;">
                <div class="card-body text-center">
                    <h1 class="card-title text-white">Learn & Get Endorsed</h1>
                    <h3 class="card-subtitle mb-2 text-white">Distance Learning Courses UK</h3>
                    <p class="card-text text-white">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                    <button style="background-color: rgb(235, 54, 180)" class="p-2 border-0">
                        <a style="text-decoration: none;" href="#"
                            class="card-link text-white fw-bolder px-3">Explore Over Courses</a>
                    </button>
                    <div class="mt-3 d-flex justify-content-center gap-2">
                        <button class="btn p-0"
                            style="width: 50px; height: 50px; background-color: #2e5fc9; border-radius: 50%;">
                            <a href=""><img src="{{ asset('assets/site/fb-removebg-preview.png') }}"
                                    alt="" class="img-fluid" style="width: 35px; height: 35px;"></a>
                        </button>
                        <button class="btn p-0"
                            style="width: 50px; height: 50px; background-color: #0077b5; border-radius: 50%;">
                            <a href=""><img src="{{ asset('assets/site/linkdin.webp') }}" alt=""
                                    class="img-fluid" style="width: 35px; height: 35px;"></a>
                        </button>
                        <button class="btn p-0"
                            style="width: 50px; height: 50px; background-color: #0077b5; border-radius: 50%;">
                            <a href=""><img src="{{ asset('assets/site/linkdin.webp') }}" alt=""
                                    class="img-fluid" style="width: 30px; height: 30px;"></a>
                        </button>
                        <button class="btn p-0"
                            style="width: 50px; height: 50px; background-color: #25D366; border-radius: 50%;">
                            <a href=""><img src="{{ asset('assets/site/whatsapp.webp') }}" alt=""
                                    class="img-fluid" style="width: 30px; height: 30px;"></a>
                        </button>
                        <button class="btn p-0"
                            style="width: 50px; height: 50px; background-color: #FF0000; border-radius: 50%;">
                            <a href=""><img
                                    src="{{ asset('assets/site/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.webp') }}"
                                    alt="" class="img-fluid" style="width: 30px; height: 30px;"></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <section class="px-3 px-md-5">
            <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="p-4">
                    <h6 class="text-uppercase text-primary fw-bold mb-2 text-start" style="padding-left: 99px">
                        INSPIRE LONDON COLLEGE
                    </h6>
                    <h4 class="fw-bold mb-3 text-start" style="padding-left: 99px">
                        Build Your Skills Online Anytime
                    </h4>

                    <p class="text-muted mb-4 text-start" style="white-space: pre-wrap; line-height: 1.8;">
                        Inspire London College is the leading specialist provider of Distance Learning Courses UK. We
                        are
                        distinguished global distance and online learning platforms dedicated to providing online
                        courses UK, short courses online, CPD training in the UK and worldwide. We deliver a wide range
                        of online courses UK with certification from reputable awarding organisations.
                    </p>

                    <a href="#" class="text-decoration-none text-start " style="padding-left: 99px">
                        <button type="button"
                            class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
                            See Courses
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                    class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
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
                                        class="btn btn-info border-0 text-white fw-bold px-4 py-2 rounded-pill">
                                        See Courses
                                    </button>
                                </a>

                            </div>
                        </div>
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
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/site/starts-removebg-preview.png') }}" alt="" style="width: 150px">
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
                    </div>

                    <div class="col-sm-3">
                        <h3 class="text-white fw-bolder">Contact Info</h3>
                        <ul class="text-white px-1" style="list-style: none">
                            <li>Address: 123 Example Street, City</li>
                            <li>Email: info@example.com</li>
                            <li>Phone: +123-456-7890</li>
                        </ul>
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
