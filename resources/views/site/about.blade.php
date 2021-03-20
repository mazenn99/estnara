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
@endsection
