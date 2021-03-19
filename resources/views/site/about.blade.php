@extends('site.template.master')
@section('title' , 'من نحن')
@section('content')
    <!-- General Info-->
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row row-50 justify-content-md-center justify-content-lg-start">
                <div class="col-md-10 col-lg-6">
                    <div class="image-custom-1"><img src="images/about-1-601x350.jpg" alt="" width="601" height="350"/>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="box-inset-1">
                        <!-- Bootstrap tabs -->
                        <div class="tabs-custom tabs-horizontal tabs-corporate tabs-corporate_left" id="tabs-about">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#tabs-about-1" data-toggle="tab">What i do</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabs-about-2" data-toggle="tab">My Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabs-about-3" data-toggle="tab">My Values</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-about-1">
                                    <h4>The Basis of My Therapy</h4>
                                    <p>Cur fraticinida cadunt? Animaliss studere, tanquam ferox historia. Brodium, armarium, et decor. Cum cursus potus, omnes hibridaes carpseris mirabilis, fortis nuclear vexatum iacerees.</p>
                                    <p>Est grandis parma, cesaris. Omnias sunt lactas de velox onus. Fatalis, brevis urias aliquando experientia de camerarius, secundus index. Nunquam imperium lanista. Itineris tramitems peregrinatione, tanquam rusticus diatria. Cum vortex ire, omnes compateres manifestum nobilis, bi-color calcariaes.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-about-2">
                                    <h4>Providing Caring Atmosphere</h4>
                                    <p>Dexter, fidelis equisos foris visum de talis, festus nixus. Cum apolloniates nocere, omnes capioes anhelare salvus, grandis abnobaes.</p>
                                    <p>A falsis, boreas domesticus abnoba. Ferox hippotoxotas ducunt ad ignigena. Lamia moris, tanquam placidus verpa. Ecce, emeritis messor! Hercle, abactor salvus!, adiurator! Hydra de brevis fluctus, examinare historia! Candidatus albus gluten est. Cum gluten congregabo, omnes medicinaes attrahendam regius, mirabilis armariumes.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-about-3">
                                    <h4>Efficient Psychological Therapy</h4>
                                    <p>Nunquam anhelare lumen. Barbatus tuss ducunt ad particula. Frondators sunt bursas de altus rector. Idoleum de magnum omnia, imperium mensa.</p>
                                    <p>Demissios peregrinationes in noster revalia! Hercle, coordinatae noster!. Nocere sed mire ducunt ad albus diatria. Lanistas persuadere! Cum guttus persuadere, omnes mensaes locus salvus, teres mineralises. Nunquam consumere particula. Fatalis parss ducunt ad quadra. Cum index observare, omnes buboes attrahendam brevis, pius poetaes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <!-- Team-->--}}
{{--    <section class="section section-lg bg-gray-light text-center">--}}
{{--        <div class="container">--}}
{{--            <h2>Meet Our Team</h2>--}}
{{--            <div class="row row-50">--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <!-- Card Creative-->--}}
{{--                    <article class="card-creative">--}}
{{--                        <div class="card-creative__inner">--}}
{{--                            <figure class="card-creative__media"><img src="images/team-1-230x211.jpg" alt="" width="230" height="211"/>--}}
{{--                            </figure>--}}
{{--                            <p class="card-creative__title">Kate Smith</p>--}}
{{--                            <p class="card-creative__subtitle">Clinical Psychologist</p>--}}
{{--                            <div class="card-creative__divider"></div>--}}
{{--                            <div class="card-creative__aside">--}}
{{--                                <ul class="list-inline list-inline-md">--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-facebook" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-twitter" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-google-plus" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-pinterest-p" href="#"></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <!-- Card Creative-->--}}
{{--                    <article class="card-creative">--}}
{{--                        <div class="card-creative__inner">--}}
{{--                            <figure class="card-creative__media"><img src="images/team-2-230x211.jpg" alt="" width="230" height="211"/>--}}
{{--                            </figure>--}}
{{--                            <p class="card-creative__title">Peter Wilson</p>--}}
{{--                            <p class="card-creative__subtitle">Registered Psychotherapist</p>--}}
{{--                            <div class="card-creative__divider"></div>--}}
{{--                            <div class="card-creative__aside">--}}
{{--                                <ul class="list-inline list-inline-md">--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-facebook" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-twitter" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-google-plus" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-pinterest-p" href="#"></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <!-- Card Creative-->--}}
{{--                    <article class="card-creative">--}}
{{--                        <div class="card-creative__inner">--}}
{{--                            <figure class="card-creative__media"><img src="images/team-3-230x211.jpg" alt="" width="230" height="211"/>--}}
{{--                            </figure>--}}
{{--                            <p class="card-creative__title">Emily Rose</p>--}}
{{--                            <p class="card-creative__subtitle">Psychometrist</p>--}}
{{--                            <div class="card-creative__divider"></div>--}}
{{--                            <div class="card-creative__aside">--}}
{{--                                <ul class="list-inline list-inline-md">--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-facebook" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-twitter" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-google-plus" href="#"></a></li>--}}
{{--                                    <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-pinterest-p" href="#"></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- Facts-->
    <section class="section parallax-container bg-gray-darker" data-parallax-img="images/bg-image-2-1920x640.jpg">
        <div class="parallax-content">
            <div class="section-lg text-center">
                <div class="container">
                    <h2>Some Facts About Me</h2>
                    <p class="offset-top-5 text-style-1">My recent achievements</p>
                    <div class="row row-30 offset-top-1">
                        <div class="col-sm-6 col-md-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__main"><span>543</span></div>
                                <div class="box-counter__divider"></div>
                                <p class="box-counter__title">Regular Clients</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__main">
                                    <div class="counter">12</div>
                                </div>
                                <div class="box-counter__divider"></div>
                                <p class="box-counter__title">Therapy Services</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__main">
                                    <div class="counter">20</div><span class="small">k</span>
                                </div>
                                <div class="box-counter__divider"></div>
                                <p class="box-counter__title">Positive Reviews</p>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__main">
                                    <div class="counter">99</div><span class="small small_top">%</span>
                                </div>
                                <div class="box-counter__divider"></div>
                                <p class="box-counter__title">Satisfied Customers</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients-->
    <section class="section section-md bg-gray-light text-center">
        <div class="container">
            <h2>What My Clients Say</h2>
            <!-- Owl Carousel -->
            <div class="owl-outer-navigation-wrap owl-carousel_nav-classic wow fadeIn">
                <div class="owl-carousel quote-creative-carousel" data-items="1" data-lg-items="2" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="false" data-navigation-container="#owl-carousel-nav" data-dots-each="1">
                    <div class="item">
                        <!-- Quote Creative-->
                        <article class="quote-creative">
                            <div class="quote-creative__header">
                                <div class="quote-creative__media"><img src="images/client-1-93x93.jpg" alt="" width="93" height="93"/>
                                </div>
                                <div class="quote-creative__info">
                                    <p class="quote-creative__title">Mike Johnson,</p>
                                    <p class="quote-creative__subtitle">Entrepreneur</p>
                                </div>
                            </div>
                            <div class="quote-creative__main">
                                <div class="quote-creative__main-text">
                                    <p>Dr. Crawford is a well-established psychologist who delivers a very professional service. As a skilled therapist, she brings depth, warmth, and wisdom to her practice, with a unique approach and humor.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <!-- Quote Creative-->
                        <article class="quote-creative">
                            <div class="quote-creative__header">
                                <div class="quote-creative__media"><img src="images/client-2-93x93.jpg" alt="" width="93" height="93"/>
                                </div>
                                <div class="quote-creative__info">
                                    <p class="quote-creative__title">Jane Wilson,</p>
                                    <p class="quote-creative__subtitle">Housewife</p>
                                </div>
                            </div>
                            <div class="quote-creative__main">
                                <div class="quote-creative__main-text">
                                    <p>Norah is an excellent clinical psychologist. She has the uncanny ability to get to the root of the issue and provides simple yet powerful tools to help you cope with your problems and even thrive.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <!-- Quote Creative-->
                        <article class="quote-creative">
                            <div class="quote-creative__header">
                                <div class="quote-creative__media"><img src="images/client-3-93x93.jpg" alt="" width="93" height="93"/>
                                </div>
                                <div class="quote-creative__info">
                                    <p class="quote-creative__title">Sam Wilson,</p>
                                    <p class="quote-creative__subtitle">Taxi Driver</p>
                                </div>
                            </div>
                            <div class="quote-creative__main">
                                <div class="quote-creative__main-text">
                                    <p>Thank you for helping me understand and rationalize my anxiety issues in a kind, caring and compassionate way. You listened to my fears and understood exactly what I was going through.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="owl-outer-navigation" id="owl-carousel-nav"></div>
            </div>
        </div>
    </section>

{{--    <!-- Partners-->--}}
{{--    <section class="section section-md bg-white text-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-50 align-items-sm-center">--}}
{{--                <div class="col-sm-6 col-md-3 wow fadeIn"><a class="link-image" href="#"><img src="images/brand-1-126x68.png" alt="" width="126" height="68"/></a></div>--}}
{{--                <div class="col-sm-6 col-md-3 wow fadeIn"><a class="link-image" href="#"><img src="images/brand-2-126x100.png" alt="" width="126" height="100"/></a></div>--}}
{{--                <div class="col-sm-6 col-md-3 wow fadeIn"><a class="link-image" href="#"><img src="images/brand-3-134x83.png" alt="" width="134" height="83"/></a></div>--}}
{{--                <div class="col-sm-6 col-md-3 wow fadeIn"><a class="link-image" href="#"><img src="images/brand-4-138x55.png" alt="" width="138" height="55"/></a></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- Page Footer-->
    <footer class="section footer-modern context-dark">
        <div class="footer-modern__main">
            <div class="container">
                <div class="row row-50 justify-content-sm-center justify-content-md-start justify-content-lg-between">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <p class="custom-heading-3">About Us</p>
                        <p class="ls-05">I’m Dr. Norah Crawford, a certified psychologist who adopts a holistic approach when treating clients.</p><a class="button button-primary button-ujarak button-sm" href="contact-us.html">Get in touch</a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <p class="custom-heading-3">Contact information</p>
                        <dl class="list-terms-block">
                            <dt>Phone</dt>
                            <dd><a class="link-md" href="tel:#">1-800-700-6200</a></dd>
                        </dl>
                        <dl class="list-terms-block">
                            <dt>E-mail</dt>
                            <dd><a href="mailto:#">info@demolink.org</a></dd>
                        </dl>
                        <dl class="list-terms-block">
                            <dt>Follow Me</dt>
                            <dd>
                                <ul class="list-inline list-inline-xxs">
                                    <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-google-plus" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-instagram" href="#"></a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-4">
                        <p class="custom-heading-3">Useful links</p>
                        <div class="row row-5">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <ul class="list-1">
                                    <li><a href="#">Family Therapy</a></li>
                                    <li><a href="#">Individual Therapy</a></li>
                                    <li><a href="#">Child Psychotherapy</a></li>
                                    <li><a href="#">Couples Counseling</a></li>
                                    <li><a href="#">Stress Management</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <ul class="list-1">
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="pricing-tables.html">Pricing</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact-us.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-default__aside">
            <div class="container">
                <div class="footer-default__aside-inner">
                    <!-- Rights-->
                    <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Dr. Norah Crawford</span><span>.&nbsp;</span><span>All Rights Reserved.</span></p><a class="privacy-link" href="privacy-policy.html">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- Global Mailform Output-->
@endsection
