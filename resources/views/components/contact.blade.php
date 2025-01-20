@extends('layouts.header')

@section('styles')

<style>
      <style>
        .form-container {
    background-color: rgba(125, 211, 252, 0.8);
    min-height: 100vh;
    padding: 2rem;
}
        .form-wrapper {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</style>


@endsection

@section('content')
    <div>
        <h1 class="text-center pt-5">GOT A QUESTION?​ </h1>
        <p class="text-center fs-4">We’re here to help and answer any question you might have</p>
    </div>

    <div style="background-color: rgb(231, 159, 210); width: 100%">
        <section class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="pt-5">
                        <h4 style="line-height: 30px" class="mb-3 pt-4">
                            <i><span class="fa fa-map-marker"></span> First Floor, Fairlawn High Street<br>
                                Southall London UB1 3HB United Kingdom</i>
                        </h4>
                    </div>
                    <div class="p-1">
                        <h4 style="line-height: 30px" class="mb-3 p-3">
                            <i><span class="fa fa-phone"></span> +44 (0) 20 7101 9543<br>
                                +44 (0) 20 7193 1649</i>
                        </h4>
                    </div>
                    <div class="p-2">
                        <h4 class="mb-2 p-3">
                            <i><span class="fa fa-clock-o"></span> 10:00 – 17:00<br>
                                Monday – Friday</i>
                        </h4>
                    </div>
                    <div class="p-1">
                        <h4 class="mb-2 p-3">
                            <i><span class="fa fa-envelope"></span> Fill Contact form for General<br>
                                Enquiries/IT Support :</i>
                        </h4>
                    </div>
                    <div class="pb-5 pt-3">
                        <iframe width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19806.857345260143!2d-0.38496124745769703!3d51.51234477497888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760dc9b62c4f93%3A0x954fdc5537ad927f!2sSouthall%2C%20London%20UB1%203HB%2C%20UK!5e0!3m2!1sen!2suk!4v1704046754956!5m2!1sen!2suk"></iframe>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-container p-3" style="background-color: #a1d7f0; border-radius: 20px;">
                        <div class="form-wrapper p-3">
                            <h2 class="mb-2 text-black">Contact us</h2>
                            <p class="text-muted mb-4 text-white fs-6 fs-bolder">We look forward to hearing from you.</p>

                            <form>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="firstName" class="form-label text-black">First Name*</label>
                                        <input type="text" class="form-control" id="firstName" required style="border: 2px solid black; padding: 12px;">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="lastName" class="form-label text-black">Last Name*</label>
                                        <input type="text" class="form-control" id="lastName" required style="border: 2px solid black; padding: 12px;">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label text-black">Email*</label>
                                    <input type="email" class="form-control" id="email" required style="border: 2px solid black; padding: 12px;">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label text-black">Phone*</label>
                                    <input type="tel" class="form-control" id="phone" required style="border: 2px solid black; padding: 12px;">
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label text-black">Subject*</label>
                                    <input type="text" class="form-control" id="subject" required style="border: 2px solid black; padding: 12px;">
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label text-black">Your message</label>
                                    <textarea class="form-control" id="message" rows="4" style="border: 2px solid black; padding: 12px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                                        <label class="form-check-label text-black" for="privacyPolicy">
                                            I agree to the <a href="#" class="text-danger">Privacy Policy</a> and <a href="#" class="text-danger">Terms & Conditions</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="emailOffers">
                                        <label class="form-check-label text-black" for="emailOffers">
                                            I would like to receive further email offers
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-light px-4">Send</button>

                                <p class="mt-4 text-muted small">
                                    We are compliant with UK-GDPR. We will keep your details safe & secure
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict';
            var form = document.getElementById('contactForm');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>
@endsection
