<?php
include 'header.php';

?>
    <!-- start carsoule -->
    <section>
        <div class="container-md">
            <div class="row">
                <div class="col-md-9">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">

                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1" hidden></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2" hidden></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3" hidden></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                                aria-label="Slide 4" hidden></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                                aria-label="Slide 5" hidden></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                                aria-label="Slide 6" hidden></button>

                        </div>
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img src="../../assets/image/Ajman_01.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/image/Dubai_02.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/image/Fujairah_01.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/image/Sharjah_01.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/image/Umm-Al-Qaiwain_01.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/image/Umm-Al-Qaiwain_02.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-3 shadow">
                    <div class="p-3" style="background: white; width: 100%;">
                        <h5 class="p-1" style="background-color: rgb(42, 93, 42); color:white">WELCOME TO THE EMBASSYOF
                            UAE, NEW DELHI</h5>
                        <P>
                            Dear Visitors,<br>
                            On behalf of the Embassy of the United Arab Emirates in New Delhi, I have the pleasure to
                            welcome you to the Embassy’s website, which has been designed to provide the users an access
                            to the Embassy, and its links with the Ministry of Foreign Affairs of UAE and the Government
                            Institutions.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end carsoule  -->

    <!-- start banner -->
    <section class="banner">
        <div class="container-md">
            <div class="row">
                <div class="col-md-12 text-end">
                    <img src="../../assets/image/buttons1.jpg" class="img-thumbnail" alt="..." style="width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- end banner -->

    <!-- strat body area -->
    <section>
        <div class="container-md shadow p-5 mb-3 mt-2">
            <div class="row">
                <div class="col-md-3">
                    <h6>THE EMBASSY</h6>
                    <ul>
                        <li>Information on UAE Seven Emirates</li>
                        <li>Government</li>
                        <li>Foreign System</li>
                        <li>Media & Culture</li>
                        <li>People & Society</li>
                        <li>Doing Business in UAE</li>
                        <li>Economy</li>
                        <li>Energy</li>
                        <li>Environment</li>
                        <li>Infrastructure</li>
                    </ul>
                    <img src="../../assets/image/enews_letters.jpg" alt="">
                </div>
               
                <div class="col-md-7">
                    <h4 class="mb-3" style="text-align: center;">e-VISA VERIFICATION</h4>
                    <p>UAE Consular Section offers e-Visa verification service for the clients. The applicant can get their e-Visa verified before travelling.
                    </p>
                    <h6 style="color: red;">Application Requirements</h6>
                    <form action="e_visadb.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter Reference Number:</label>
                        <input type="text" name="reference" class="form-control" id="exampleFormControlInput1" placeholder="Reference number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter Passport Number:</label>
                        <input type="text" name="passport" class="form-control" id="exampleFormControlInput1" placeholder="Passport number">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-danger">Submit</button>
                    </div>
</from>
                </div>
                <div class="col-md-2 text-end">
                    <img src="../../assets/image/UAE_TheFounderLeader.jpg" alt="" class="mb-3 shadow">
                    <br>
                    <img src="../../assets/image/UAE_ThePresident.jpg" alt="" class="mb-3 shadow">
                    <br>
                    <img src="../../assets/image/UAE_TheVicePresident.jpg" alt="" class="mb-3 shadow">
                </div>
            </div>
        </div>
    </section>
    <!-- end body area -->



    <!-- footer start -->
    <section>
        <div class="container mb-4 shadow p-4">
            <div class="row">
                <div class="col-md-2">
                    <div class="row">
                        <h4>MOBILE APP</h4>
                        <div class="col-md-6">
                            <img src="../../assets/image/apple_store.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="../../assets/image/google_playstore.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <li>Website is last updated: June 15, 2020 14:03:47</li>
                    <li>This site is best viewed on 1280 x 1024 Resolution</li>
                    <li>Website Establish in 2009 (Embassy of the United Arab Emirates, New Delhi)</li>
                    <li>Supports Microsoft Internet Explorer 6.0+, Firefox 2.0+, Safari 1.2+, Opera 6.0+</li>
                </div>
                <div class="col-md-3 page">
                    <ul>
                        <li>Home</li>
                        <li>Contact Us</li>
                        <li>Sitemap</li>
                        <li>Privacy & Policy</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center social">
                    <ul>
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-square-instagram"></i></li>
                        <li><i class="fa-brands fa-youtube"></i> </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5>Embassy of the United Arab Emirates</h5>
                    <p>12, Chandragupta Marg, Chanakyapuri, New Delhi - 110021 (India)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

</body>

</html>