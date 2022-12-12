<?php include_once('./templates/header.php'); ?>
    <section id="banner" class="container-fluid">
        <div class="row bg-black">
            <div class="col-lg-7 px-0">
                <div id="carouselCities" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselCities" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCities" data-slide-to="1"></li>
                        <li data-target="#carouselCities" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 op-3" src="./img/cities/dublin.jpg" alt="Dublin">
                            <div class="carousel-caption">
                                <h5 class="display-4 font-weight-bold d-block mb-3 m-md-0">Dublin</h5>
                                <p class="lead d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 op-3" src="./img/cities/paris.jpg" alt="Paris">
                            <div class="carousel-caption">
                                <h5 class="display-4 font-weight-bold d-block mb-3 m-md-0">Paris</h5>
                                <p class="lead d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 op-3" src="./img/cities/california.jpg" alt="California">
                            <div class="carousel-caption">
                                <h5 class="display-4 font-weight-bold d-block mb-3 m-md-0">California</h5>
                                <p class="lead d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselCities" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselCities" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-light d-flex flex-column justify-content-center p-3 p-md-5">
                <h2 class="display-4 font-weight-bold">Make your dream trip</h2>
                <p class="lead py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <form action="" method="post">
                    <div class="input-group mb-3 input-group-lg">
                        <input type="text" class="form-control" name="newsletter" placeholder="Email" aria-label="Recipient's username" aria-describedby="newsletter">
                        <div class="input-group-append">
                            <button class="btn btn-danger font-weight-bold" type="button" name="newsletter-submit" id="newsletter-submit">Sign</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section id="advantages" class="py-5 bg-light">
        <div class="container text-center">
            <h6 class="h6 text-uppercase">All the best for you</h6>
            <h2 class="display-4 text-danger font-weight-bold mb-5">Advantages</h2>
            <div class="row mb-5">
                <div class="col-xl-4 col-md-6 mt-2">
                    <div class="d-flex flex-column align-items-center">
                        <img class="icon mb-2" src="./img/icons/passport" alt="Passport">
                        <h3 class="py-2">Documents</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-2">
                    <div class="d-flex flex-column align-items-center">
                        <img class="icon mb-2" src="./img/icons/transfer" alt="Transfer">
                        <h3 class="py-2">Transfer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-2 mb-4">
                    <div class="d-flex flex-column align-items-center">
                        <img class="icon mb-2" src="./img/icons/tickets" alt="Ticket">
                        <h3 class="py-2">Tickets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mt-2">
                    <div class="d-flex flex-column align-items-center">
                        <img class="icon mb-2" src="./img/icons/beaches" alt="Passport">
                        <h3 class="py-2">Beaches</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-2">
                    <div class="d-flex flex-column align-items-center">
                        <img class="icon mb-2" src="./img/icons/tourism" alt="Transfer">
                        <h3 class="py-2">Tourism</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-2">
                    <div class="d-flex flex-column align-items-center">
                        <img class="icon mb-2" src="./img/icons/luggage" alt="Ticket">
                        <h3 class="py-2">Luggage</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="btn btn-lg btn-danger font-weight-bold">Buy a Plan</div>
        </div>
    </section>

    <section class="p-5 text-center text-light" id="quote">
        <div class="quote-overlay"></div>
        <blockquote class="subtitle font-weight-bold">
            <p>"The best and most beautiful things in the world cannot be seen or even touched — they must be felt with the heart."</p>
        </blockquote>
        <h4><em>-Helen Keller</em></h4>
    </section>

    <section class="my-5 bg-light" id="faq">
        <div class="container">
            <div class="text-center">
                <h6 class="h6 text-uppercase">Have doubts?</h6>
                <h2 class="display-4 text-danger font-weight-bold mb-5">FAQ</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                <div class="accordion" id="faq">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link faq-title text-danger" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="question1">
                                How do I book my trip?
                            </button>
                        </h5>
                        </div>

                        <div id="question1" class="collapse show" aria-labelledby="headingOne" data-parent="#faq">
                        <div class="card-body">
                            First register on our site, choose your travel option and wait up to 24 hours for payment confirmation.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed faq-title text-danger" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="false" aria-controls="question2">
                                What types of payment are accepted?
                            </button>
                        </h5>
                        </div>
                        <div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#faq">
                        <div class="card-body">
                            Pix, credit card or bill of pay.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed faq-title text-danger" type="button" data-toggle="collapse" data-target="#question3" aria-expanded="false" aria-controls="question3">
                                How can I get in touch?
                            </button>
                        </h5>
                        </div>
                        <div id="question3" class="collapse" aria-labelledby="headingThree" data-parent="#faq">
                        <div class="card-body">
                            You can send us an email at gabrielalbernazdev@yopmail.com or contact us at our number (xx) xxxx-xxxx.
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mt-4 text-center">
                    <span class="d-block mb-3">Still have doubts?</span>
                    <div class="btn btn-danger btn-lg font-weight-bold">Get in touch</div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('./templates/modalLogin.php'); ?>

<?php include_once('./templates/footer.php'); ?>