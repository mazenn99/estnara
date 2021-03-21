<!-- Page Footer-->
<footer class="section footer-modern context-dark">
    <div class="footer-modern__main">
        <div class="container">
            <div class="row row-50 justify-content-sm-center justify-content-md-start justify-content-lg-between">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <p class="custom-heading-3">{{trans('site/index.about_us_footer')}}</p>
                    <p class="ls-05">يمكنك إستنارة من طلب إستشارات في شتى المجالات لدينا نخبة من المستشارين والمتخصين في
                        مجال تقديم الإستشارات لاتتردد في الإتصال بنا وطرح استفسارك </p>
                    <a class="button button-primary button-ujarak button-sm" href="contact-us.html">تواصل معنا</a>
                </div>
                <div class="download-area py-4">
                    <div class="container text-center">
                        <h3 class="mb-3">{{trans('site/index.get_the_app')}}</h3>
                        <div
                            class="section-intro mb-4 single-col-max-width mx-auto">{{trans('site/index.download_the_application')}}</div>
                        <ul class="app-stores list-unstyled list-inline mx-auto  d-inline-block">
                            <li class="list-inline-item mr-3"><a href="http://onelink.to/estenarh"><img class="ios"
                                                                                                        src="https://www.estenarh.com/assets/images/appstore-apple.svg"
                                                                                                        alt="app-store"></a>
                            </li>
                            <li class="list-inline-item"><a href="http://onelink.to/estenarh"><img class="android"
                                                                                                   src="https://www.estenarh.com/assets/images/appstore-android.svg"
                                                                                                   alt="google play"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <div class="footer-default__aside">
                        <div class="container">
                            <div class="footer-default__aside-inner">
                                <!-- Rights-->
                                <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Dr. Norah Crawford</span><span>.&nbsp;</span><span>All Rights Reserved.</span>
                                </p><a class="privacy-link" href="privacy-policy.html">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
</footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{asset('front-end')}}/js/core.min.js"></script>
<script src="{{asset('front-end')}}/js/script.js"></script>
<script src="{{asset('front-end')}}/js/AutoTyping.js"></script>

<script>
    const myText = new AutoTyping({
        id: 'test_id',                   //Your HTML element id (string) - REQUIRED
        textColor: '#FFFFFF',            //Color of Your text (string) *default('#000')
        cursor: '|',
        'typeSpeed': 100,
        'typeDelay': 300,
        cursorColor: '#FFFFFF',
        @if(app()->getLocale() == 'ar')
        typeText: ['إستنارة خطوتك الأولى للإستقرار']//Your text (array with strings)
        @else
        typeText: ['Estnara Your first step to stability']//Your text (array with strings)
        @endif
    }).init();
</script>
</body>
</html>
