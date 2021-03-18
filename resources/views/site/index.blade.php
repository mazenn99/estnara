@extends('site.template.master')
@section('content')
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper_style-2 swiper-controls-modern" data-loop="true" data-autoplay="false" data-simulate-touch="false">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-image-dark" data-slide-bg="images/slider-modern-slide-1-1920x660.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <h1 class="text-sbold" data-caption-animate="fadeInUpSmall"><span class="d-inline-block d-xl-block">{{trans('site/index.estnara_first_step')}}  </span><span class="d-inline-block d-xl-block">{{trans('site/index.settle_down')}}</span></h1>
                                    <p class="text-md" data-caption-animate="fadeInUpSmall" data-caption-delay="200">{{trans('site/index.overview_first_step')}}</p><a class="button button-lg button-primary button-ujarak" href="#">{{trans('site/index.download_app')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-image-dark" data-slide-bg="images/slider-modern-slide-2-1920x660.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <h1 class="text-sbold" data-caption-animate="fadeInUpSmall"><span class="d-inline-block d-xl-block">Efficient Psychological</span><span class="d-inline-block d-xl-block">Therapy Services</span></h1>
                                    <p class="text-md" data-caption-animate="fadeInUpSmall" data-caption-delay="200">I have successfully helped many individuals, couples, and families resolve a wide variety of personal concerns through individual therapy, marriage counseling, and family therapy.</p><a class="button button-lg button-primary button-ujarak" href="#">book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="swiper-pagination"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}
{{--            <div class="swiper-button-next"></div>--}}
        </section>

        <!-- Cloud Solutions-->
        <section class="section swiper-after_1 wow slideInUp">
            <div class="container">
                <div class="bg-white">
                    <div class="row row-style-2">
                        <div class="col-md-4">
                            <!-- Box Nina-->
                            <article class="box-nina">
                                <div class="box-nina__icon linearicons-woman"></div>
                                <div class="box-nina__main">
                                    <h4 class="box-nina__title"><a href="#">{{trans('site/index.gateway_to_psychological')}}</a></h4>
                                    <p>{{trans('site/index.easy_for_you')}}  </p>{{--<a class="button button-sm button-default button-ujarak" href="#">View Details</a> --}}
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <!-- Box Nina-->
                            <article class="box-nina">
                                <div class="box-nina__icon linearicons-group-work"></div>
                                <div class="box-nina__main">
                                    <h4 class="box-nina__title"><a href="#">{{trans('site/index.choose_mentor')}}</a></h4>
                                    <p>{{trans('site/index.consulting_service')}}</p>{{--<a class="button button-sm button-default button-ujarak" href="#">View Details</a> --}}
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <!-- Box Nina-->
                            <article class="box-nina">
                                <div class="box-nina__icon linearicons-star"></div>
                                <div class="box-nina__main">
                                    <h4 class="box-nina__title"><a href="#">{{trans('site/index.duration_consultation')}}</a></h4>
                                    <p>{{trans('site/index.provide_remote_session')}}</p>{{--<a class="button button-sm button-default button-ujarak" href="#">View Details</a> --}}
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{--        <!-- Search Layout-->--}}
{{--        <section class="section section-md bg-white wow fadeInUpXSmall" data-wow-duration=".8s">--}}
{{--            <div class="container">--}}
{{--                <article class="card-bordered">--}}
{{--                    <h2>Make an Appointment</h2>--}}
{{--                    <p class="mt-0 ls-05 text-md">Schedule a consultation to get free psychological support.</p>--}}
{{--                    <!-- RD Search-->--}}
{{--                    <form class="rd-mailform appointment-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">--}}
{{--                        <div class="row align-items-md-end row-narrow-20 row-20">--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">--}}
{{--                                    <label class="form-label" for="contact-name">Name</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber @Required">--}}
{{--                                    <label class="form-label" for="contact-phone">Phone</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-wrap">--}}
{{--                                    <label class="form-label" for="billing-date">Date</label>--}}
{{--                                    <input class="form-input input-date" id="billing-date" type="text" name="date" data-constraints="@Required" data-time-picker="date"><span class="calendar-icon linearicons-calendar-empty"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <button class="button button-lg button-primary button-ujarak" type="submit">send request</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <p class="ls-05 text-md">I am always ready to provide quality psychotherapy services.</p>--}}
{{--                </article>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- Pricing Plans-->
        <section class="section section-md bg-gray-light text-center oh">
            <div class="container wow fadeInUpSmall">
                <h2>أقسام استنارة</h2>
                <div class="row row-30 justify-content-md-center">
                    <div class="col-md-6 col-lg-4">
                        <!-- Pricing table item-->
                        <article class="pricing-table__item pricing-table-modern__item">
                            <div class="pricing-table__item-header">
                                <div class="pricing-table__item-header-bg">
                                    <div class="pricing-table__item-header-bg-inner"></div>
                                </div>
                                <p class="pricing-table__item-title">تربوية</p>
                            </div>
                            <div class="pricing-table__item-main">
                                <div class="pricing-table__item-price"><span class="pricing-table__item-price-currency">$</span><span class="pricing-table__item-price-value">99</span>
                                    <div class="pricing-table__item-price-aside"><span class="top">99</span></div>
                                </div>
                                <div class="pricing-table__item-divider"></div>
                                <p> 
                                نهدف إلى الرقي بالواقع التربوي وتطوير الخدمات التعليمية والإدارية وتقديم برامج إرشادية تربوية لكافة الجهات المعنية والمهتمة بالتطوير التربوي والتعليمي
                                </p>
                                {{--<ul class="pricing-table__item-features">
                                    <li>Personal Consultations</li>
                                    <li>Behavior Therapy</li>
                                    <li>Anger Management</li>
                                    <li>Evaluation</li>--}}
                                </ul>
                                <div class="pricing-table__item-control"><a class="button button-default button-ujarak" href="#">نخبة من الإستشارين التربويين</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Pricing table item-->
                        <article class="pricing-table__item pricing-table-modern__item pricing-table-modern__item_prefered">
                            <div class="pricing-table__item-header">
                                <div class="pricing-table__item-header-bg">
                                    <div class="pricing-table__item-header-bg-inner"></div>
                                </div>
                                <p class="pricing-table__item-title">نفسية</p>
                            </div>
                            <div class="pricing-table__item-main">
                                <div class="pricing-table__item-price"><span class="pricing-table__item-price-currency">$</span><span class="pricing-table__item-price-value">299</span>
                                    <div class="pricing-table__item-price-aside"><span class="top">99</span></div>
                                </div>
                                <div class="pricing-table__item-divider"></div>
                                <p>
                                    الوعي والتثقيف النفسي والمساندة في تقديم الإستشارات المتخصصة لمواجهة مشاكل الإضطرابات النفسية وتأمين الاستقرار النفسي للمجتمع
                                </p>
                                {{--<ul class="pricing-table__item-features">
                                    <li>Family Consultations</li>
                                    <li>Child Psychotherapy</li>
                                    <li>Psychological Analysis</li>
                                    <li>Psychological Testing</li>--}}
                                </ul>
                                <div class="pricing-table__item-control"><a class="button button-primary button-ujarak" href="#">نخبة من الإستشارين النفسيين</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Pricing table item-->
                        <article class="pricing-table__item pricing-table-modern__item">
                            <div class="pricing-table__item-header">
                                <div class="pricing-table__item-header-bg">
                                    <div class="pricing-table__item-header-bg-inner"></div>
                                </div>
                                <p class="pricing-table__item-title">اجتماعية</p>
                            </div>
                            <div class="pricing-table__item-main">
                                <div class="pricing-table__item-price"><span class="pricing-table__item-price-currency">$</span><span class="pricing-table__item-price-value">199</span>
                                    <div class="pricing-table__item-price-aside"><span class="top">99</span></div>
                                </div>
                                <div class="pricing-table__item-divider"></div>
                                <p>
                                    لمعالجة المشكلات الأسرية والاجتماعية لضمان تكافل الأسرة وتحسين نمط الحياة لأفراد المجتمع
                                </p>
                                {{--<ul class="pricing-table__item-features">
                                    <li>Stress Management</li>
                                    <li>Psychological Assessment</li>
                                    <li>Employee Assistance</li>
                                    <li>Team Building</li>--}}
                                </ul>
                                <div class="pricing-table__item-control"><a class="button button-default button-ujarak" href="#">نخبة من الإستشارين الاجتماعيين</a></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us-->
        <section class="section section-md bg-white text-center">
            <div class="container">
                <h2>مميزاتنا</h2>
                <div class="row row-30 row-md-70 wow fadeIn">
                    <div class="col-md-6 col-lg-4">
                        <!-- Box Lucy-->
                        <article class="box-lucy">
                            <div class="box-lucy__aside">
                                <div class="box-lucy__icon-outer">
                                    <div class="circle-decor"></div><span class="box-lucy__icon linearicons-fire"></span>
                                </div>
                                <h5 class="box-lucy__title">خبراء لكافة المواضيع</h5>
                            </div>
                            <div class="box-lucy__main">
                                <p> مهما كانت حاجتك توجد استشارات على مدار الساعة يقدمها أفضل المستشارين</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Box Lucy-->
                        <article class="box-lucy">
                            <div class="box-lucy__aside">
                                <div class="box-lucy__icon-outer">
                                    <div class="circle-decor circle-decor__mode-1"></div><span class="box-lucy__icon linearicons-fire"></span>
                                </div>
                                <h5 class="box-lucy__title">جدولة المواعيد</h5>
                            </div>
                            <div class="box-lucy__main">
                                <p>جدولة المواعيد وحجزها وتعديلها بطريقة سهلة ومناسبة للمستشار والعميل</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Box Lucy-->
                        <article class="box-lucy">
                            <div class="box-lucy__aside">
                                <div class="box-lucy__icon-outer">
                                    <div class="circle-decor circle-decor__mode-2"></div><span class="box-lucy__icon linearicons-sun"></span>
                                </div>
                                <h5 class="box-lucy__title">الخصوصية</h5>
                            </div>
                            <div class="box-lucy__main">
                                <p>يستخدم التطبيق معايير تشفير عالية للمحافظة على خصوصيتك ، وسرية استشارتك</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Box Lucy-->
                        <article class="box-lucy">
                            <div class="box-lucy__aside">
                                <div class="box-lucy__icon-outer">
                                    <div class="circle-decor circle-decor__mode-4"></div><span class="box-lucy__icon linearicons-fire"></span>
                                </div>
                                <h5 class="box-lucy__title">الدفع</h5>
                            </div>
                            <div class="box-lucy__main">
                                <p>طرق دفع آمنة وموثوقة ومتعددة لتلبي حاجتك في إتمام عملية حجز الموعد</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Box Lucy-->
                        <article class="box-lucy">
                            <div class="box-lucy__aside">
                                <div class="box-lucy__icon-outer">
                                    <div class="circle-decor"></div><span class="box-lucy__icon linearicons-fire"></span>
                                </div>
                                <h5 class="box-lucy__title">Executive Coaching</h5>
                            </div>
                            <div class="box-lucy__main">
                                <p>Improve your professional relationships and everyday business performance.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Box Lucy-->
                        <article class="box-lucy">
                            <div class="box-lucy__aside">
                                <div class="box-lucy__icon-outer">
                                    <div class="circle-decor circle-decor__mode-1"></div><span class="box-lucy__icon linearicons-fire"></span>
                                </div>
                                <h5 class="box-lucy__title">Online Support Groups</h5>
                            </div>
                            <div class="box-lucy__main">
                                <p>At my clinic, I regularly organize support groups for people of all ages and nationalities.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
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
                                    <div class="quote-creative__media"><img src="{{asset('front-end')}}/images/client-1-93x93.jpg" alt="" width="93" height="93"/>
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
                                    <div class="quote-creative__media"><img src="{{asset('front-end')}}/images/client-2-93x93.jpg" alt="" width="93" height="93"/>
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

        <!-- Subscribe-->
        <section class="section parallax-container bg-gray-darker context-dark" data-parallax-img="images/parallax-image-1-1920x450.jpg">
            <div class="parallax-content">
                <div class="section-md text-center text-md-left">
                    <div class="container">
                        <div class="row row-30 justify-content-md-center align-items-md-center">
                            <div class="col-md-10 col-lg-6 wow fadeInLeftSmall">
                                <h3>Subscribe to My Newsletter</h3>
                            </div>
                            <div class="col-md-10 col-lg-6 wow fadeInRightSmall">
                                <!-- RD Mailform-->
                                <form class="subscribe-form rd-mailform form_lg form_inline form_inline-centered form_outline form" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                    <div class="form-wrap">
                                        <input class="form-input" id="get-in-touch-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="get-in-touch-email">Enter your email</label>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-lg button-primary button-ujarak">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
@endsection
