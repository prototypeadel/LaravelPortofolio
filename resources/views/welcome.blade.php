 @extends('layouts.layout')
 @section('header')
        <div class="container">
            <div class="text-center text-white intro-milieu ">
                <h2 class="fonttexte"> Welcome To Our Studio </h2>
                <h1 class="fonttexte"> IT'S NICE TO MEET YOU</h1>

                <a class="btn bg-warning text-white px-4 py-3 mt-4" href="### ">TELL ME MORE</a>
            </div>

    </header>
    </div>
    @endsection
    @section('content')
    <!-- 2eme partie-->
    <section class="text-center mt-5 ">
        <div>
            <h3 class="">Services</h3>
            <h4 class="mt-3 mb-5"> bl abla bala </h4>
        </div>
        <div class="row text-center container mx-auto">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="text-dark font-weight-bold mb-3 mt-3">E-commerce </h4>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.</b> Architecto consequuntur iste accusamus
                    fugiat numquam unde quis necessitatibus at, tenetur enim laboriosam, labore tempora ipsam. Corrupti magni
                    inventore cum veniam omnis.
                </p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="font-weight-bold text-dark mb-3 mt-3 "> Responsive Design </h4>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.</b> Ab facilis rerum itaque minus obcaecati saepe
                    mollitia asperiores, non impedit vero ipsum nulla est quos delectus minima amet, expedita unde! Cumque.
                </p>

            </div>

            <div class="col-md-4 ">

                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span>

                <h4 class="font-weight-bold text-dark mb-3 mt-3 ">
                    Web security
                </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</b> Vel officiis sequi consequatur, ducimus voluptatibus
                    magnam quos, ut, optio sapiente impedit consectetur voluptatum culpa delectus in amet libero reprehenderit
                    quasi voluptates!</p>
            </div>
        </div>
        <!-- 3eme partie -->
    </section>
    <section class="bg-light mb-5 pb-4 ">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center mt-5 ">
                    <h3 class="partie2text mt-5 ">
                        Portofolio
                    </h3>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                </div>
            </div>
            <div class="row mt-5 no-wrap text-center">

                <div class="col-md-4 bg-white mr-2">

                    <img class="imgTaille p-3" src='{{asset("theme/img/01-thumbnail.jpg")}}' alt="tss">

                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>
                <div class="col-md-4 bg-white pr-1 mr-2">
                    <img class="imgTaille p-3" src='{{asset("theme/img/02-full.jpg")}}' alt="h">
                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>
                <div class="col-4 bg-white ">
                    <img class="imgTaille p-3" src='{{asset("theme/img/03-thumbnail.jpg")}}' alt="h">
                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>

            </div>
            <div class="row mt-5 no-wrap text-center">

                <div class="col-md-4 bg-white mr-2">
                    <img class="imgTaille p-3" src='{{asset("theme/img/01-thumbnail.jpg")}}' alt="tss">
                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>
                <div class="col-md-4 bg-white pr-1 mr-2">
                    <img class="imgTaille p-3" src='{{asset("theme/img/02-full.jpg")}}' alt="h">
                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>
                <div class="col-4 bg-white ">
                    <img class="imgTaille p-3" src='{{asset("theme/img/03-thumbnail.jpg")}}' alt="h">
                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>

            </div>
        </div>
    </section>
    <section class="container mb-5 mt-5 pt-5" id="4eme partie">

        <h2 class="text-center"> About</h2>
        <h4 class="text-muted text-center">Lorem ipsum dolor sit amet consectetur.</h4>

        <!-- timeline -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 d-flex flex-column">
                <h3 class="text-right mt-4">
                    2009-2011 </br>Our Humble Beginnings
                    </h4>
                    <p class="text-right text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui
                        quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    </p>
            </div>
            <div class="col-3 time pr-5">
                <img class="rounded-circle img-fluid mt-3 border p-1" src='{{asset("theme/img/about/1.jpg")}}' alt="h">
            </div>
            <div class="col-4"></div>
        </div>

        <div class="row mt-5">
            <div class="col-5"></div>
            <div class="col-3 time pl-3">
                <img class="rounded-circle img-fluid mt-3 border p-1" src='{{asset("theme/img/about/1.jpg")}}' alt="h">
            </div>
            <div class="col-4 d-flex flex-column mt-3">
                <h3 class="text-left ">
                    2009-2011 </br>Our Humble Beginnings
                    </h4>
                    <p class="text-left text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui
                        quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    </p>
            </div>


        </div>
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-4 d-flex flex-column">
                <h3 class="text-right mt-5">
                    2009-2011 </br>Our Humble Beginnings
                    </h4>
                    <p class="text-right text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui
                        quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    </p>
            </div>
            <div class="col-3 time pr-5">
                <img class="rounded-circle img-fluid mt-3 border p-1" src='{{asset("theme/img/about/1.jpg")}}' alt="h">
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row mt-5">
            <div class="col-5"></div>
            <div class="col-3 pl-3">
                <img class="rounded-circle img-fluid mt-3 border p-1" src='{{asset("theme/img/about/1.jpg")}}' alt="h">
            </div>
            <div class="col-4 d-flex flex-column mt-3">
                <h3 class="text-left ">
                    2009-2011 </br>Our Humble Beginnings
                </h3>
                <p class="text-left text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui
                    quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                </p>
            </div>


        </div>

    </section>
    <section id="5eme partie crew" class="bg-light pt-5">
        <div class="container pt-5">

            <h2 class="text-center text-uppercase">Our Amazing Team</h2>
            <p class="text-center text-muted mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda similique voluptatem magnam consequatur dolore,
                tempora repudiandae ratione fugit minima praesentium tempore impedit perspiciatis iste ullam molestiae libero
                eveniet enim cupiditate.</p>
            <div class="row mt-5 pt-5">
                <div class="col-4 text-center">
                    <img class="rounded-circle img-fluid p-5" src='{{asset("theme/img/about/3 (1).jpg")}}' alt="tof1">
                    <h4> adel el amrani</h4>
                    <p class="text-muted"> webdesigner </p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-4 text-center">
                    <img class="rounded-circle img-fluid p-5" src='{{asset("theme/img/about/1 (1).jpg")}}' alt="tof2">
                    <h4> adel el amrani</h4>
                    <p class="text-muted"> webdesigner </p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 text-center">
                    <img src='{{asset("theme/img/about/2 (1).jpg")}}' class="rounded-circle img-fluid p-5" alt="tof3">
                    <h4> adel el amrani</h4>
                    <p class="text-muted"> webdesigner </p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="form" class="container mb-5">
        <div class="container mt-5">
            <h3 class="text-center pt-5">
                CONTACTEZ-NOUS
            </h3>
            <p class="text-muted text-center pt-4">
                Lorem ipsum dolor sit amet consect
            </p>
        </div>
    @endsection
@section('form')
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

 @endsection