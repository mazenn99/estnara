
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
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{asset('front-end')}}/js/core.min.js"></script>
<script src="{{asset('front-end')}}/js/script.js"></script>
<script src="{{asset('front-end')}}/js/AutoTyping.js"></script>

<script>
    const myText = new AutoTyping({
        id: 'test_id',                   //Your HTML element id (string) - REQUIRED
        textColor: '#FFFFFF',            //Color of Your text (string) *default('#000')
        cursor:'|',
        'typeSpeed' : 100,
        'typeDelay' : 300,
        cursorColor : '#FFFFFF',
        typeText: ['إستنارة خطوتك الأولى للإستقرار']//Your text (array with strings)
    }).init();
</script>
</body>
</html>
