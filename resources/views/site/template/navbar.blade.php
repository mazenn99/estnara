<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern rd-navbar_inverse" data-layout="rd-navbar-fixed"
                 data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
                 data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false"
                 data-md-stick-up-offset="118px" data-lg-stick-up-offset="118px" data-md-stick-up="true"
                 data-lg-stick-up="true">
                <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html">
                                    <div class="brand__name"><img class="brand__logo-dark" width="200" height="150"
                                                                  src="{{asset('front-end')}}/images/navbar/estnarah_header.png"
                                                                  alt=""/><img class="brand__logo-light"
                                                                               src="{{asset('front-end')}}/images/navbar/estnarah_header.png"
                                                                               width="200" height="150" alt=""/>
                                    </div>
                                </a></div>
                        </div>

                        <!-- RD Navbar Content-->
                        <div class="rd-navbar-content-outer">
                            <div class="rd-navbar-content__toggle rd-navbar-static--hidden"
                                 data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                            <div class="rd-navbar-content">
                                <div class="list-wrap">
                                    <ul class="list-bordered list-inline">
                                        <li>
                                            <div class="unit flex-row unit-spacing-sm">
                                                <div class="unit__left"><span
                                                        class="icon icon-sm icon-primary icon-circle icon-outline fl-bigmug-line-headphones32"></span>
                                                </div>
                                                <div class="unit__body">
                                                    <dl class="list-terms-block">
                                                        <dt>{{trans('site/index.whats_app')}}</dt>
                                                        <dd><a href="https://api.whatsapp.com/send?phone=966507488283">966507488283</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit flex-row unit-spacing-sm">
                                                <div class="unit__left"><span
                                                        class="icon icon-xs-2 icon-primary icon-circle icon-outline fl-bigmug-line-email64"></span>
                                                </div>
                                                <div class="unit__body">
                                                    <dl class="list-terms-block">
                                                        <dt>{{trans('site/index.mail')}}</dt>
                                                        <dd><a href="mailto:info@estenarh.com">info@estenarh.com
                                                            </a></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit flex-row unit-spacing-sm">
                                                <div class="unit__left"><span
                                                        class="icon icon-sm icon-primary icon-circle icon-outline fl-bigmug-line-chat55"></span>
                                                </div>
                                                <div class="unit__body">
                                                    <dl class="list-terms-block">
                                                        <dt>{{trans('site/index.social_media')}}</dt>
                                                        <dd>
                                                            <ul class="list-inline list-inline-sm">
                                                                {{--                                                                <li><a class="icon icon-gray-dark icon-style-brand fa fa-facebook" href="#"></a></li>--}}
                                                                <li>
                                                                    <a class="icon icon-gray-dark icon-style-brand fa fa-twitter"
                                                                       href="https://twitter.com/estenarh"></a></li>
                                                                <li>
                                                                    <a class="icon icon-gray-dark icon-style-brand fa fa-instagram"
                                                                       href="https://www.instagram.com/estenarh/"></a>
                                                                </li>
                                                                {{--                                                                <li><a class="icon icon-gray-dark icon-style-brand fa fa-pinterest-p" href="#"></a></li>--}}
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer context-dark">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Nav Wrap-->
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-element">
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search rd-navbar-search-toggled">
                                    <button class="rd-navbar-search-toggle"
                                            data-rd-navbar-toggle=".rd-navbar-search"></button>
                                    <form class="rd-search" action="search-results.html"
                                          data-search-live="rd-search-results-live" method="GET">
                                        <div class="form-wrap">
                                            <input class="form-input" id="rd-navbar-search-form-input" type="text"
                                                   name="s" autocomplete="off">
                                        </div>
                                        <button class="rd-navbar-search-submit" type="submit"></button>
                                        <label class="form-label"
                                               for="rd-navbar-search-form-input">{{trans('site/index.search')}}</label>
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </form>
                                </div>
                            </div>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li><a href="{{route('home.page')}}">{{trans('site/index.home')}}</a>
                                </li>
                                <li><a href="{{route('about.page')}}">{{trans('site/index.about')}}</a>
                                </li>
                                <li><a href="{{route('service.page')}}">{{trans('site/index.service')}}</a>
                                </li>
                                <li><a href="{{route('blogs.page')}}">{{trans('site/index.blog')}}</a>
                                    <!-- RD Navbar Dropdown-->
                                    {{--                                    <ul class="rd-navbar-dropdown">--}}
                                    {{--                                        <li><a href="blog-post.html">Blog post</a></li>--}}
                                    {{--                                    </ul>--}}
                                </li>
                                <li><a href="{{route('contact.page')}}">{{trans('site/index.contact')}}</a></li>
                                <li><a href="#">{{trans('site/index.language')}}</a>
                                    <!-- RD Navbar Megamenu-->
                                    <ul class="rd-navbar-megamenu">
                                        <li>
                                            <ul class="rd-megamenu-list">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>


                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
