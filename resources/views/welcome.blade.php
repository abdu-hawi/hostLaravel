@extends('layout.main')
{{-- @push('css')
    <link rel='stylesheet' id='elementor-post-707-css' href='wp-content/uploads/elementor/css/post-707.css@ver=1684750170.css'
        media='all' />
    {!! htmlScriptTagJsApi() !!}
@endpush --}}
@push('country-select')
<script>

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    const box = document.querySelector('#ah_counter');
    var startingCount = false
    var startedCount = false
    countUp()
    document.addEventListener('scroll', function () {
        countUp()
    }, {
        passive: true
    });
    function countUp(){
        if(!startingCount){
            if(isInViewport(box)) startingCount = true ;
        }

        if(startingCount && !startedCount){
            startedCount = true
            // start count
            const els_count_number = document.querySelectorAll('.elementor-counter-number')
            els_count_number.forEach(async el_count => {
                var finalValue = el_count.getAttribute('data-to-value')
                for (let i = 0; i < Number(finalValue) + 1; i++) {
                    await new Promise(r => setTimeout(r, 10));
                    el_count.innerText = i;
                }
            });
        }
    }

    // var $jq = jQuery.noConflict();

    // $jq( document ).ready( function() {
    //     "use strict";
    //     sendContact();
    // } );
    // function sendContact(){
    //     $jq.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $jq(".btn-submit").click(function(e){
    //         e.preventDefault();
    //         //name email subject massege border-color e70c0c
    //         //serialize()
    //         var vContact = validationContact()
    //         return false;
    //     })
    // }
    // function validationContact() {
    //     var isErrorValidation = false
    //     const arr = ["name", "email", "subject", "massege"]
    //     arr.forEach(element => {
    //         if (element != "massege") {
    //             if ($jq("input[name="+element+"]").val().length < 1) {
    //                 isErrorValidation = true
    //                 $jq("input[name="+element+"]").css("border-color","e70c0c")
    //                 $jq("#"+element+"_error").css("display","block")
    //             }else{
    //                 $jq("input[name="+element+"]").css("border-color","dcdcde")
    //                 $jq(""+element+"_error").css("display","none")
    //                 $jq(""+element+"_error").text("This field required")
    //             }
    //         } else {
    //             if ($jq("textarea[name="+element+"]").val().length < 1) {
    //                 isErrorValidation = true
    //                 $jq("textarea[name="+element+"]").css("border-color","e70c0c")
    //                 $jq(""+element+"_error").css("display","block")
    //             }else{
    //                 $jq("textarea[name="+element+"]").css("border-color","dcdcde")
    //                 $jq("#"+element+"_error").css("display","none")
    //                 $jq("#"+element+"_error").text("This field required")
    //             }
    //         }
    //     });
    //     return isErrorValidation
    // }
</script>
{{-- <script src='wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.11.3'
id='elementor-frontend-modules-js'></script> --}}
@endpush
@section('content')
        <main id="main" class="site-main clr" role="main">
            <div id="content-wrap" class="container clr">
                <div id="primary" class="content-area clr">
                    <div id="content" class="site-content clr">
                        <article class="single-page-article clr">
                            <div class="entry clr" itemprop="text">
                                <div data-elementor-type="wp-page" data-elementor-id="674"
                                    class="elementor elementor-674">

                                    @include('welcome.slider')
                                    @include('welcome.counter')
                                    @include('welcome.under_patronage')
                                    @include('welcome.overview')
                                    @include('welcome.why_saudi_arabia')
                                    @include('welcome.ongoing_upcoming')
                                    @include('welcome.who_will_attend')
                                    @include('welcome.attendees_benefits')



                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-fb5fd62 elementor-section-height-min-height elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                                        data-id="fb5fd62" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aba6009"
                                                data-id="aba6009" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-38de908 elementor-widget elementor-widget-heading"
                                                        data-id="38de908" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Success Partners
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-a66b6e0 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="a66b6e0" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-df561c3 elementor-widget elementor-widget-text-editor"
                                                        data-id="df561c3" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Success partners in the Saudi Construction Excellence
                                                                Summit are likely to be organizations and
                                                                individuals from the construction industry who
                                                                participate in the summit to exchange ideas, learn
                                                                from experts, network with peers, and explore
                                                                opportunities for growth and success in the Saudi
                                                                market.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-299d2ca elementor-widget elementor-widget-qi_addons_for_elementor_clients_slider"
                                                        data-id="299d2ca" data-element_type="widget"
                                                        data-widget_type="qi_addons_for_elementor_clients_slider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="qodef-shortcode qodef-m  qodef-qi-clients-slider  qodef--hover-scale   qodef-qi-grid qodef-qi-swiper-container        "
                                                                data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:30,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:false,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:&quot;1&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;}">
                                                                <div class="swiper-wrapper">
                                                                    <div class="qodef-e swiper-slide">
                                                                        <div class="qodef-e-inner">
                                                                            <a href="https://saso.gov.sa/en/pages/default.aspx"
                                                                                target="_blank">
                                                                                <div class="qodef-e-images-holder">
                                                                                    <div class="qodef-e-main-image">
                                                                                        <img width="450"
                                                                                            height="450"
                                                                                            src="wp-content/uploads/2023/02/saso.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt="" decoding="async"
                                                                                            loading="lazy"
                                                                                            srcset="wp-content/uploads/2023/02/saso.jpg 450w, wp-content/uploads/2023/02/saso-300x300.jpg 300w, wp-content/uploads/2023/02/saso-150x150.jpg 150w"
                                                                                            sizes="(max-width: 450px) 100vw, 450px" />
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="qodef-e swiper-slide">
                                                                        <div class="qodef-e-inner">
                                                                            <a href="https://sbc.gov.sa/En/Pages/default.aspx"
                                                                                target="_blank">
                                                                                <div class="qodef-e-images-holder">
                                                                                    <div class="qodef-e-main-image">
                                                                                        <img width="450"
                                                                                            height="450"
                                                                                            src="wp-content/uploads/2023/02/SBCNC.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt="" decoding="async"
                                                                                            loading="lazy"
                                                                                            srcset="wp-content/uploads/2023/02/SBCNC.jpg 450w, wp-content/uploads/2023/02/SBCNC-300x300.jpg 300w, wp-content/uploads/2023/02/SBCNC-150x150.jpg 150w"
                                                                                            sizes="(max-width: 450px) 100vw, 450px" />
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="qodef-e swiper-slide">
                                                                        <div class="qodef-e-inner">
                                                                            <a href="https://sca.sa/en"
                                                                                target="_blank">
                                                                                <div class="qodef-e-images-holder">
                                                                                    <div class="qodef-e-main-image">
                                                                                        <img width="450"
                                                                                            height="450"
                                                                                            src="wp-content/uploads/2023/02/SCA.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt="" decoding="async"
                                                                                            loading="lazy"
                                                                                            srcset="wp-content/uploads/2023/02/SCA.jpg 450w, wp-content/uploads/2023/02/SCA-300x300.jpg 300w, wp-content/uploads/2023/02/SCA-150x150.jpg 150w"
                                                                                            sizes="(max-width: 450px) 100vw, 450px" />
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="qodef-e swiper-slide">
                                                                        <div class="qodef-e-inner">
                                                                            <a href="https://www.saudieng.sa/English/pages/default.aspx"
                                                                                target="_blank">
                                                                                <div class="qodef-e-images-holder">
                                                                                    <div class="qodef-e-main-image">
                                                                                        <img width="450"
                                                                                            height="450"
                                                                                            src="wp-content/uploads/2023/02/Untitled-1.jpg"
                                                                                            class="attachment-full size-full"
                                                                                            alt="" decoding="async"
                                                                                            loading="lazy"
                                                                                            srcset="wp-content/uploads/2023/02/Untitled-1.jpg 450w, wp-content/uploads/2023/02/Untitled-1-300x300.jpg 300w, wp-content/uploads/2023/02/Untitled-1-150x150.jpg 150w"
                                                                                            sizes="(max-width: 450px) 100vw, 450px" />
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-d2cc500 elementor-widget elementor-widget-eael-creative-button"
                                                        data-id="d2cc500" data-element_type="widget"
                                                        data-widget_type="eael-creative-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="eael-creative-button-wrapper">

                                                                <a class="eael-creative-button eael-creative-button--rayen"
                                                                    href="{{ route('register') }}" data-text="Now!">


                                                                    <div class="creative-button-inner">


                                                                        <span
                                                                            class="cretive-button-text">Register</span>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-7b41b480 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="7b41b480" data-element_type="section" id="venue">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e1bd73b"
                                                data-id="4e1bd73b" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d82e11c elementor-widget elementor-widget-image"
                                                        data-id="d82e11c" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="1440" height="957"
                                                                src="wp-content/uploads/2023/07/Ritz_carlton_riyadh_bg.jpg"
                                                                class="attachment-full size-full wp-image-2172"
                                                                alt="" loading="lazy"
                                                                srcset="wp-content/uploads/2023/07/Ritz_carlton_riyadh_bg.jpg 1440w, wp-content/uploads/2023/07/Ritz_carlton_riyadh_bg-300x199.jpg 300w, wp-content/uploads/2023/07/Ritz_carlton_riyadh_bg-1024x681.jpg 1024w, wp-content/uploads/2023/07/Ritz_carlton_riyadh_bg-768x510.jpg 768w"
                                                                sizes="(max-width: 1440px) 100vw, 1440px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <br>
                                    {{-- Time And MAP --}}
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-1a2230a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="1a2230a" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-85da99e"
                                                data-id="85da99e" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9b5396b elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                                        data-id="9b5396b" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-99d56db"
                                                                data-id="99d56db" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-de151c6 elementor-widget elementor-widget-image"
                                                                        data-id="de151c6" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img decoding="async" width="1200"
                                                                                height="1200"
                                                                                src="wp-content/uploads/2023/02/Ritz-carlton-1.jpg"
                                                                                class="attachment-full size-full wp-image-518"
                                                                                alt="" loading="lazy"
                                                                                srcset="wp-content/uploads/2023/02/Ritz-carlton-1.jpg 1200w, wp-content/uploads/2023/02/Ritz-carlton-1-300x300.jpg 300w, wp-content/uploads/2023/02/Ritz-carlton-1-1024x1024.jpg 1024w, wp-content/uploads/2023/02/Ritz-carlton-1-150x150.jpg 150w, wp-content/uploads/2023/02/Ritz-carlton-1-768x768.jpg 768w, wp-content/uploads/2023/02/Ritz-carlton-1-600x600.jpg 600w, wp-content/uploads/2023/02/Ritz-carlton-1-650x650.jpg 650w"
                                                                                sizes="(max-width: 1200px) 100vw, 1200px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-392b3f7"
                                                                data-id="392b3f7" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-ee36eb4 elementor-widget elementor-widget-heading"
                                                                        data-id="ee36eb4" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Event Venue</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-c237508 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="c237508" data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-map-marker-alt"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Ritz
                                                                                        Carlton, Riyadh, Saudi
                                                                                        Arabia</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="far fa-calendar-alt"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Nov
                                                                                        20 - 21, 2023</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-clock"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">08:00
                                                                                        A.M - 05:30 P.M</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9fb340b"
                                                data-id="9fb340b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-f3828f2 elementor-widget elementor-widget-google_maps"
                                                        data-id="f3828f2" data-element_type="widget"
                                                        data-widget_type="google_maps.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.11.3 - 07-03-2023 */
                                                                .elementor-widget-google_maps .elementor-widget-container {
                                                                    overflow: hidden
                                                                }

                                                                .elementor-widget-google_maps .elementor-custom-embed {
                                                                    line-height: 0
                                                                }

                                                                .elementor-widget-google_maps iframe {
                                                                    height: 300px
                                                                }
                                                            </style>
                                                            <div class="elementor-custom-embed">
                                                                <iframe loading="lazy"
                                                                    src="https://maps.google.com/maps?q=Ritz%20carlton%20Riyadh&#038;t=m&#038;z=11&#038;output=embed&#038;iwloc=near"
                                                                    title="Ritz carlton Riyadh"
                                                                    aria-label="Ritz carlton Riyadh"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    {{-- End Time And MAP --}}


                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-d1169c2
                                        elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="d1169c2" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1297686"
                                                data-id="1297686" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                        </div>
                                    </section>




                                    {{-- New and Update
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-d291ab0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="d291ab0" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b15bb28"
                                                data-id="b15bb28" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0191551 elementor-widget elementor-widget-heading"
                                                        data-id="0191551" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                News and Updates</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4ff7cae elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="4ff7cae" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9ba3a86 elementor-widget elementor-widget-text-editor"
                                                        data-id="9ba3a86" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Stay up-to-date with the latest news and developments
                                                                in the construction industry, and get exclusive
                                                                updates on the Saudi Construction Excellence Summit,
                                                                the premier event for construction professionals in
                                                                Saudi Arabia and beyond.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-c7a2962 premium-blog-align-left elementor-widget elementor-widget-premium-addon-blog"
                                                        data-id="c7a2962" data-element_type="widget"
                                                        data-settings="{&quot;force_height&quot;:&quot;true&quot;,&quot;premium_blog_columns_number&quot;:&quot;33.33%&quot;,&quot;premium_blog_grid&quot;:&quot;yes&quot;,&quot;premium_blog_layout&quot;:&quot;even&quot;,&quot;premium_blog_columns_number_tablet&quot;:&quot;50%&quot;,&quot;premium_blog_columns_number_mobile&quot;:&quot;100%&quot;,&quot;scroll_to_offset&quot;:&quot;yes&quot;}"
                                                        data-widget_type="premium-addon-blog.default">
                                                        <div class="elementor-widget-container">

                                                            <div class="premium-blog-wrap  premium-blog-even"
                                                                data-page="674">
                                                                <div class="premium-blog-post-outer-container"
                                                                    data-total="1">
                                                                    <div
                                                                        class="premium-blog-post-container premium-blog-skin-modern">
                                                                        <div
                                                                            class="premium-blog-thumb-effect-wrapper">
                                                                            <div
                                                                                class="premium-blog-thumbnail-container premium-blog-zoomin-effect">
                                                                                <a href="index.html@p=634.html"
                                                                                    target="_blank">
                                                                                    <img decoding="async"
                                                                                        width="2560" height="1707"
                                                                                        src="wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-scaled.jpg"
                                                                                        class="attachment-full size-full wp-image-655"
                                                                                        alt="" loading="lazy"
                                                                                        srcset="wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-scaled.jpg 2560w, wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-300x200.jpg 300w, wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-1024x683.jpg 1024w, wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-768x512.jpg 768w, wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-1536x1024.jpg 1536w, wp-content/uploads/2023/02/dl.beatsnoop.com-3000-cJN6DSt0bC-2048x1366.jpg 2048w"
                                                                                        sizes="(max-width: 2560px) 100vw, 2560px" />
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="premium-blog-effect-container premium-blog-framed-effect">
                                                                                <a class="premium-blog-post-link"
                                                                                    href="index.html@p=634.html"
                                                                                    target="_blank"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="premium-blog-content-wrapper ">

                                                                            <div
                                                                                class="premium-blog-inner-container">

                                                                                <h2
                                                                                    class="premium-blog-entry-title">
                                                                                    <a href="index.html@p=634.html"
                                                                                        target="_blank">
                                                                                        The other four giga-projects
                                                                                        are NEOM, Red Sea, Qiddiya
                                                                                        and ROSHN </a>
                                                                                </h2>
                                                                                <div
                                                                                    class="premium-blog-entry-meta">

                                                                                    <span
                                                                                        class="premium-blog-meta-separator">•</span>
                                                                                    <div
                                                                                        class="premium-blog-post-time premium-blog-meta-data">
                                                                                        <i class="fa fa-clock-o"
                                                                                            aria-hidden="true"></i>
                                                                                        <span>February 7,
                                                                                            2023</span>
                                                                                    </div>


                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    {{-- END New and Update --}}


                                    {{-- Contact us --}}
                                    <style>
                                        .contact-us{
                                            background-color: #E6F4FF;
                                            margin-bottom: 60px;
                                            padding: 3rem;
                                            display: flex;
                                            align-items: center;
                                            justify-content: space-between;
                                        }
                                        .fname, .lname, .job, .company, .industry, .email, .number, .interest, .mobilenum, .ticket {
                                            width: 100%;
                                            padding-right: 10px;
                                        }
                                        .ah-form{
                                            border-radius: 5px;
                                            padding: 2rem 6.5rem;
                                            box-shadow: 0 0 3px #0003;
                                            width: 85dvw;
                                            background: #d9e8f369;
                                        }
                                        .ah-form input, .ah-form textarea{
                                            min-height: 40px;
                                            width: 100%;
                                        }
                                        @media (max-width: 992px){
                                            .ah-form{
                                                padding: 1rem 1.5rem;
                                            }
                                        }
                                        @media (max-width: 768px){
                                            .contact-us{
                                                flex-direction: column;
                                            }
                                            .contact-us .elementor-widget-image img{
                                                height: 150px;
                                                width: auto;
                                            }
                                        }
                                        .text-red{
                                            color: #e70c0c;
                                        }
                                        .row-name{
                                            margin-top: 0.75rem;
                                        }
                                        .ah-form button{
                                            width: 200px;
                                            color: #000000;
                                            font-size: 18px;
                                        }
                                        .fbutton{
                                            display: flex;
                                            justify-content: center;
                                        }
                                        .success-msg{
                                            color: #0a7e00;
                                            font-weight: 600;
                                            font-size: 18px;
                                            text-align: center;
                                            width: 100%;
                                            background: #0a7e0020;
                                            padding: 0.5rem;
                                            border-radius: 5px;
                                            display: none;
                                        }
                                    </style>
                                    <section id="contact_us"
                                    class="elementor-section elementor-top-section elementor-element elementor-element-d1169c2
                                    elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="d1169c2" data-element_type="section">

                                        <div class="elementor-element elementor-element-e2e2300 elementor-widget elementor-widget-image"
                                            data-id="e2e2300" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container col-lg-6 col-md-12">
                                                <a href="https://www.xs-conferences.com/"
                                                    target="_blank">
                                                    <img decoding="async" width="476" height="196"
                                                        src="wp-content/uploads/2023/07/logo_black.jpg"
                                                        class="attachment-full size-full wp-image-2157"
                                                        alt="" loading="lazy"
                                                        srcset="wp-content/uploads/2023/07/logo_black.jpg 476w, wp-content/uploads/2023/07/logo_black-300x124.jpg 300w"
                                                        sizes="(max-width: 476px) 100vw, 476px" /> </a>
                                            </div>
                                        </div>

{{--
                                        <form class="elementor-widget-container col-lg-6 col-md-12 ah-form" method="POST" id="ah_form">
                                            <div class="success-msg">
                                                Error msg
                                            </div>
                                            <div class="row-name">
                                                <div class="fname">
                                                    <label><span class="text-red">*</span> Full Name</label>
                                                    <span class="wpcf7-form-control-wrap" data-name="Name">
                                                        <input size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true"
                                                            aria-invalid="false"
                                                            placeholder="Full name"
                                                            value="" type="text"
                                                            name="name"  />
                                                            <span id="name_error" style="color: #e70c0c; display:none">Required</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row-name">
                                                <div class="fname">
                                                    <label><span class="text-red">*</span> Email</label>
                                                    <span class="wpcf7-form-control-wrap" data-name="Name">
                                                        <input size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true"
                                                            aria-invalid="false"
                                                            placeholder="Email"
                                                            value="" type="email"
                                                            name="email" required />
                                                            <span id="email_error" style="color: #e70c0c; display:none">Required</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row-name">
                                                <div class="fname">
                                                    <label><span class="text-red">*</span> Subject</label>
                                                    <span class="wpcf7-form-control-wrap" data-name="Name">
                                                        <input size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true"
                                                            aria-invalid="false"
                                                            placeholder="Subject"
                                                            value="" type="text"
                                                            name="subject" required />
                                                            <span id="subject_error" style="color: #e70c0c; display:none">Required</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row-name">
                                                <div class="fname">
                                                    <label><span class="text-red">*</span> Massege</label>
                                                    <span class="wpcf7-form-control-wrap" data-name="Name">
                                                        <textarea name="massege" rows="5"></textarea>
                                                            <span id="massege_error" style="color: #e70c0c; display:none">Required</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row-name">
                                                <div class="fname fbutton">
                                                    <button type="submit" class="btn-submit">Send</button>
                                                </div>
                                            </div>
                                        </form>--}}


                                    </section>
                                    {{-- End Contact us --}}


                                    {{-- xs --}}
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-e012e15 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="e012e15" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b26280b"
                                                data-id="b26280b" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div
                                                    class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-fddf659 elementor-widget elementor-widget-text-editor"
                                                        data-id="fddf659" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p><strong>Organised By</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-237dea0 elementor-widget elementor-widget-image"
                                                        data-id="237dea0" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="https://www.xs-conferences.com/"
                                                                target="_blank">
                                                                <img decoding="async" width="450"
                                                                    height="177"
                                                                    src="wp-content/uploads/2023/01/xs-conference-1-e1675154741737.jpg"
                                                                    class="attachment-full size-full wp-image-65"
                                                                    alt="" loading="lazy"
                                                                    srcset="wp-content/uploads/2023/01/xs-conference-1-e1675154741737.jpg 450w, wp-content/uploads/2023/01/xs-conference-1-e1675154741737-300x118.jpg 300w"
                                                                    sizes="(max-width: 450px) 100vw, 450px" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9f6c3d0 elementor-widget elementor-widget-text-editor"
                                                        data-id="9f6c3d0" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Riyadh, KSA<br /><span
                                                                    style="color: #000000;">+966-50-56-85126</span><br /><span
                                                                    style="color: #000000;">info@xs-conferences.com</span><br /><span
                                                                    style="color: #000000;">adel@xs-conferences.com</span><br /><span
                                                                    style="color: #000000;">www.xs-conferences.com</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5183015 elementor-hidden-mobile"
                                                data-id="5183015" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div
                                                    class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3a1c47b elementor-widget elementor-widget-text-editor"
                                                        data-id="3a1c47b" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                .vl {
                                                                    border-left: 2px solid black;
                                                                    height: 400px;
                                                                }
                                                            </style>

                                                            <div class="vl"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5317da5"
                                                data-id="5317da5" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div
                                                    class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-076a299 elementor-widget elementor-widget-text-editor"
                                                        data-id="076a299" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p><strong>International
                                                                    Offices</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1ada209 elementor-widget elementor-widget-image"
                                                        data-id="1ada209" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="https://www.xs-conferences.com/"
                                                                target="_blank">
                                                                <img decoding="async" width="150"
                                                                    height="150"
                                                                    src="wp-content/uploads/2023/01/C3-conference-1-e1675154716886-150x150.jpg"
                                                                    class="attachment-thumbnail size-thumbnail wp-image-63"
                                                                    alt="" loading="lazy" /> </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-805f273 elementor-widget elementor-widget-text-editor"
                                                        data-id="805f273" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>New York, USA<br /><span
                                                                    style="color: #000000;">ranselpotter@xs-conferences.com</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    {{-- end xs --}}

                                </div>


                            </div>

                        </article>


                    </div><!-- #content -->


                </div><!-- #primary -->


            </div><!-- #content-wrap -->



        </main><!-- #main -->





@endsection
