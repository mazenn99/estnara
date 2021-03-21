@extends('site.template.master')
@section('title' , trans('site/index.title_index'))
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/breadcrumbs-bg-1920x550.jpg);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">Contact Us</h2>
            </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
            <div class="container">
                <ul class="breadcrumbs-custom__path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="section section-md bg-white">
        <div class="container container_bigger">
            <div class="row justify-content-md-center justify-content-xl-between row-2-columns-bordered row-50">
                <div class="col-md-10 col-lg-5">
                    <h3>Get in Touch</h3>
                    <ul class="list-creative">
                        <li>
                            <dl class="list-terms-medium list-terms-medium_secondary">
                                <dt>Address</dt>
                                <dd><a href="#">212 Prospect Ave, Brooklyn, New York United States</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium">
                                <dt>Phones</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="tel:#">+1-800-700-6200 </a></li>
                                        <li><a href="tel:#">+1-800-955-4567</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium list-terms-medium_tertiary">
                                <dt>E-mails</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="mailto:#">mail@demolink.org</a></li>
                                        <li><a href="mailto:#">info@demolink.org</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <h3 class="text-center">Contact Form</h3>
                    <!-- RD Mailform -->
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row align-items-md-end row-20">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                    <label class="form-label" for="contact-name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                                    <label class="form-label" for="contact-phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">Your Message</label>
                                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="contact-email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="button button-block button-primary button-ujarak" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- RD Google Map-->
    <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
        </div>
    </section>
@endsection
