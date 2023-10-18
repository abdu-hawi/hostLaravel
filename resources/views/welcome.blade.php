@extends('layout.main')
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
</script>
<script src='wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.11.3'
id='elementor-frontend-modules-js'></script>
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
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-2a16f3a elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle"
                                        data-id="2a16f3a" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/youtu.be\/7jKvbmerOg0&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
                                        <div class="elementor-background-video-container">
                                            <div class="elementor-background-video-embed"></div>
                                        </div>
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13e3477"
                                                data-id="13e3477" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-bd6cd7f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="bd6cd7f" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3604778"
                                                                data-id="3604778" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-46fae01 elementor-widget elementor-widget-heading"
                                                                        data-id="46fae01" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                SAUDI CONSTRUCTION EXCELLENCE SUMMIT
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2891c96 elementor-widget elementor-widget-heading"
                                                                        data-id="2891c96" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h4
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Achieving construction excellence
                                                                                through future technologies &
                                                                                strategies</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-9b7c3ac elementor-widget elementor-widget-eael-creative-button"
                                                                        data-id="9b7c3ac" data-element_type="widget"
                                                                        data-widget_type="eael-creative-button.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="eael-creative-button-wrapper">

                                                                                <a class="eael-creative-button eael-creative-button--rayen"
                                                                                    href="{{ route('register') }}"
                                                                                    data-text="Now!">


                                                                                    <div
                                                                                        class="creative-button-inner">


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
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-b33f0cb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="b33f0cb" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                        id="ah_counter">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e02365b"
                                                data-id="e02365b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-ceb1fe2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="ceb1fe2" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-2c14d65"
                                                                data-id="2c14d65" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-26f0612 elementor-widget elementor-widget-counter"
                                                                        data-id="26f0612" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <style>
                                                                                /*! elementor - v3.11.3 - 07-03-2023 */
                                                                                .elementor-counter .elementor-counter-number-wrapper {
                                                                                    display: flex;
                                                                                    font-size: 69px;
                                                                                    font-weight: 600;
                                                                                    line-height: 1
                                                                                }

                                                                                .elementor-counter .elementor-counter-number-prefix,
                                                                                .elementor-counter .elementor-counter-number-suffix {
                                                                                    flex-grow: 1;
                                                                                    white-space: pre-wrap
                                                                                }

                                                                                .elementor-counter .elementor-counter-number-prefix {
                                                                                    text-align: right
                                                                                }

                                                                                .elementor-counter .elementor-counter-number-suffix {
                                                                                    text-align: left
                                                                                }

                                                                                .elementor-counter .elementor-counter-title {
                                                                                    text-align: center;
                                                                                    font-size: 19px;
                                                                                    font-weight: 400;
                                                                                    line-height: 2.5
                                                                                }
                                                                            </style>
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="500"
                                                                                        data-from-value="0">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix">+</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-counter-title">
                                                                                    Attendees</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-0355969"
                                                                data-id="0355969" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-05c7ac3 elementor-widget elementor-widget-counter"
                                                                        data-id="05c7ac3" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="40"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix">+</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-counter-title">
                                                                                    Speakers</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-7a5f073"
                                                                data-id="7a5f073" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-5250fb9 elementor-widget elementor-widget-counter"
                                                                        data-id="5250fb9" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="15"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix">+</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-counter-title">
                                                                                    Panel Discussions</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-d1b5ffc"
                                                                data-id="d1b5ffc" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-b4f2720 elementor-widget elementor-widget-counter"
                                                                        data-id="b4f2720" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="4"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix">+</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-counter-title">
                                                                                    Workshops</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-ef298dd"
                                                                data-id="ef298dd" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-ec58936 elementor-widget elementor-widget-counter"
                                                                        data-id="ec58936" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="10"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix">+</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-counter-title">
                                                                                    Associations</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4219c3b"
                                                                data-id="4219c3b" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-9cb0846 elementor-widget elementor-widget-counter"
                                                                        data-id="9cb0846" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="100"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix">+</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-counter-title">
                                                                                    Media Partners</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-56574ad1 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="56574ad1" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39cbb907 elementor-invisible"
                                                data-id="39cbb907" data-element_type="column"
                                                data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-76598fde elementor-invisible elementor-widget elementor-widget-heading"
                                                        data-id="76598fde" data-element_type="widget"
                                                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Under the Patronage of</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-69b1977b elementor-invisible elementor-widget elementor-widget-heading"
                                                        data-id="69b1977b" data-element_type="widget"
                                                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                H.E Mr. Majed Bin Abdullah<br> Al-Hogail</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4aa56b8e elementor-invisible elementor-widget elementor-widget-heading"
                                                        data-id="4aa56b8e" data-element_type="widget"
                                                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Minister of Municipal & Rural Affairs & Housing</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-724d5a08 elementor-invisible elementor-widget elementor-widget-image"
                                                        data-id="724d5a08" data-element_type="widget"
                                                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="https://momrah.gov.sa/en" target="_blank">
                                                                <img decoding="async"
                                                                    src="wp-content/uploads/elementor/thumbs/minister-logo-q3w2o9o2c9zadg451vqsxl2uau2y4cgizezhvzjywe.jpg"
                                                                    title="minister-logo" alt="minister-logo"
                                                                    class="elementor-animation-grow"
                                                                    loading="lazy" /> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77d7618e"
                                                data-id="77d7618e" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6eb8322b elementor-invisible elementor-widget elementor-widget-image"
                                                        data-id="6eb8322b" data-element_type="widget"
                                                        data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="362" height="419"
                                                                src="wp-content/uploads/2023/01/minister-pic-1.jpg"
                                                                class="attachment-full size-full wp-image-28" alt=""
                                                                loading="lazy"
                                                                srcset="wp-content/uploads/2023/01/minister-pic-1.jpg 362w, wp-content/uploads/2023/01/minister-pic-1-259x300.jpg 259w"
                                                                sizes="(max-width: 362px) 100vw, 362px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-75924b0a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="75924b0a" data-element_type="section" id="overview"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13bc66b7"
                                                data-id="13bc66b7" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-13c26dc5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="13c26dc5" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f421098"
                                                                data-id="f421098" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                                                                <div class="elementor-background-slideshow swiper-container" dir="rtl"><div class="swiper-wrapper"><div class="elementor-background-slideshow__slide swiper-slide"><div class="elementor-background-slideshow__slide__image" style="background-image: url({{ asset('wp-content/uploads/2023/07/overview_bg.jpg') }});"></div></div></div></div>
                                                                <div class="elementor-widget-wrap">
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e2d7765"
                                                                data-id="5e2d7765" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-3b754d49 elementor-widget elementor-widget-heading"
                                                                        data-id="3b754d49"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Overview</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1c2c42f9 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                        data-id="1c2c42f9"
                                                                        data-element_type="widget"
                                                                        data-widget_type="divider.default">
                                                                        <div class="elementor-widget-container">
                                                                            <style>
                                                                                /*! elementor - v3.11.3 - 07-03-2023 */
                                                                                .elementor-widget-divider {
                                                                                    --divider-border-style: none;
                                                                                    --divider-border-width: 1px;
                                                                                    --divider-color: #2c2c2c;
                                                                                    --divider-icon-size: 20px;
                                                                                    --divider-element-spacing: 10px;
                                                                                    --divider-pattern-height: 24px;
                                                                                    --divider-pattern-size: 20px;
                                                                                    --divider-pattern-url: none;
                                                                                    --divider-pattern-repeat: repeat-x
                                                                                }

                                                                                .elementor-widget-divider .elementor-divider {
                                                                                    display: flex
                                                                                }

                                                                                .elementor-widget-divider .elementor-divider__text {
                                                                                    font-size: 15px;
                                                                                    line-height: 1;
                                                                                    max-width: 95%
                                                                                }

                                                                                .elementor-widget-divider .elementor-divider__element {
                                                                                    margin: 0 var(--divider-element-spacing);
                                                                                    flex-shrink: 0
                                                                                }

                                                                                .elementor-widget-divider .elementor-icon {
                                                                                    font-size: var(--divider-icon-size)
                                                                                }

                                                                                .elementor-widget-divider .elementor-divider-separator {
                                                                                    display: flex;
                                                                                    margin: 0;
                                                                                    direction: ltr
                                                                                }

                                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                                                    align-items: center
                                                                                }

                                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                                                    display: block;
                                                                                    content: "";
                                                                                    border-bottom: 0;
                                                                                    flex-grow: 1;
                                                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                                                }

                                                                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                                                    flex-grow: 0;
                                                                                    flex-shrink: 100
                                                                                }

                                                                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                                                    content: none
                                                                                }

                                                                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                                                    margin-left: 0
                                                                                }

                                                                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                                                    flex-grow: 0;
                                                                                    flex-shrink: 100
                                                                                }

                                                                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                                                    content: none
                                                                                }

                                                                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                                                    margin-right: 0
                                                                                }

                                                                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                                                }

                                                                                .elementor-widget-divider--separator-type-pattern {
                                                                                    --divider-border-style: none
                                                                                }

                                                                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                                                .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                                                    width: 100%;
                                                                                    min-height: var(--divider-pattern-height);
                                                                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                                                    mask-size: var(--divider-pattern-size) 100%;
                                                                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                                                    mask-repeat: var(--divider-pattern-repeat);
                                                                                    background-color: var(--divider-color);
                                                                                    -webkit-mask-image: var(--divider-pattern-url);
                                                                                    mask-image: var(--divider-pattern-url)
                                                                                }

                                                                                .elementor-widget-divider--no-spacing {
                                                                                    --divider-pattern-size: auto
                                                                                }

                                                                                .elementor-widget-divider--bg-round {
                                                                                    --divider-pattern-repeat: round
                                                                                }

                                                                                .rtl .elementor-widget-divider .elementor-divider__text {
                                                                                    direction: rtl
                                                                                }

                                                                                .e-con-inner>.elementor-widget-divider,
                                                                                .e-con>.elementor-widget-divider {
                                                                                    width: var(--container-widget-width, 100%);
                                                                                    --flex-grow: var(--container-widget-flex-grow)
                                                                                }
                                                                            </style>
                                                                            <div class="elementor-divider">
                                                                                <span
                                                                                    class="elementor-divider-separator">
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5e74d609 elementor-widget elementor-widget-text-editor"
                                                                        data-id="5e74d609"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <style>
                                                                                /*! elementor - v3.11.3 - 07-03-2023 */
                                                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                                    background-color: #818a91;
                                                                                    color: #fff
                                                                                }

                                                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                                    color: #818a91;
                                                                                    border: 3px solid;
                                                                                    background-color: transparent
                                                                                }

                                                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                                    margin-top: 8px
                                                                                }

                                                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                                    width: 1em;
                                                                                    height: 1em
                                                                                }

                                                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                                                    float: left;
                                                                                    text-align: center;
                                                                                    line-height: 1;
                                                                                    font-size: 50px
                                                                                }

                                                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                                    display: inline-block
                                                                                }
                                                                            </style>
                                                                            <p>Saudi Arabia’s infrastructure and
                                                                                construction industry is amongst the
                                                                                largest in the region, with over
                                                                                825$ billion worth of planned and
                                                                                unawarded projects. In the recent
                                                                                years the industry has seen
                                                                                consistent growth output which is
                                                                                destined to grow in line with the
                                                                                kingdom’s vision 2030. The kingdom’s
                                                                                construction boom is entrenched in
                                                                                its continued investments in diverse
                                                                                projects, ranging from “Giga
                                                                                Projects” to social and urban
                                                                                development programs.</p>
                                                                            <p><strong>Saudi Construction Excellence
                                                                                    Summit</strong> is an exclusive
                                                                                event, with a mandate to give
                                                                                insights into the thriving
                                                                                opportunities in the infrastructure
                                                                                and construction sector in the
                                                                                country, and to explore emerging
                                                                                trends and innovations which are
                                                                                disrupting the construction
                                                                                industry. The event will showcase
                                                                                expert speakers, panelists, industry
                                                                                leaders and thought leaders who will
                                                                                bring into focus various
                                                                                construction technologies,
                                                                                investment opportunities, regulatory
                                                                                frameworks and insightful case
                                                                                studies which will define the future
                                                                                of construction in the nation. The
                                                                                Saudi Construction Excellence Summit
                                                                                (SCES 2023) with its main purpose to
                                                                                &#8220;Achieving construction
                                                                                excellence through future
                                                                                technologies &amp; strategies&#8221;
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-56e71f41 elementor-widget elementor-widget-text-editor"
                                                        data-id="56e71f41" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Under the Patronage of H.E <strong>Mr. Majed Bin
                                                                    Abdullah Al-Hogail,</strong> the Minister of
                                                                Municipal &amp; Rural Affairs &amp; Housing, the
                                                                Conference will provide a fantastic platform for
                                                                senior industry representatives to cross share their
                                                                visions, ideas and ambitions.</p>
                                                            <p>These two days Summit will feature a series of case
                                                                studypresentations, highly interactive panel
                                                                discussions and technology driven workshops led by
                                                                our panel of globally renowned construction experts
                                                                and technology providers to help achieve excellence
                                                                across construction sector globally.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e16f50f elementor-widget elementor-widget-eael-creative-button"
                                                        data-id="e16f50f" data-element_type="widget"
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
                                        class="elementor-section elementor-top-section elementor-element elementor-element-13afe6a elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                                        data-id="13afe6a" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bfdca1"
                                                data-id="7bfdca1" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e1b42e1 elementor-widget elementor-widget-heading"
                                                        data-id="e1b42e1" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Organized by Leaders in the Construction Industry
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b0e552c elementor-widget elementor-widget-text-editor"
                                                        data-id="b0e552c" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Organized to promote innovation and excellence in the
                                                                construction industry, the Saudi Construction
                                                                Excellence Summit offers a platform for industry
                                                                leaders to connect, share knowledge, and showcase
                                                                the latest advancements in construction technology
                                                                and practices</p>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-b30deca elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="b30deca" data-element_type="section"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-no">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b169364"
                                                                data-id="b169364" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-2e1fe90 elementor-widget elementor-widget-image"
                                                                        data-id="2e1fe90" data-element_type="widget"
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-64d2597c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="64d2597c" data-element_type="section" id="whysaudi"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3fb54779"
                                                data-id="3fb54779" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6e66e1fb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="6e66e1fb" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5a8fa365"
                                                                data-id="5a8fa365" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-f9521b2 elementor-widget elementor-widget-spacer"
                                                                        data-id="f9521b2" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <style>
                                                                                /*! elementor - v3.11.3 - 07-03-2023 */
                                                                                .elementor-column .elementor-spacer-inner {
                                                                                    height: var(--spacer-size)
                                                                                }

                                                                                .e-con {
                                                                                    --container-widget-width: 100%
                                                                                }

                                                                                .e-con-inner>.elementor-widget-spacer,
                                                                                .e-con>.elementor-widget-spacer {
                                                                                    width: var(--container-widget-width, var(--spacer-size));
                                                                                    --align-self: var(--container-widget-align-self, initial);
                                                                                    --flex-shrink: 0
                                                                                }

                                                                                .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                                                                                .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                                                                                .e-con>.elementor-widget-spacer>.elementor-widget-container,
                                                                                .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                                                                                    height: 100%
                                                                                }

                                                                                .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                                                                                .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                                                                                    height: var(--container-widget-height, var(--spacer-size))
                                                                                }
                                                                            </style>
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5ed673c5"
                                                                data-id="5ed673c5" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-5f3ef371 elementor-widget elementor-widget-heading"
                                                                        data-id="5f3ef371"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Why Saudi Arabia?</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-3cc16e9e elementor-widget elementor-widget-text-editor"
                                                                        data-id="3cc16e9e"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>Saudi Arabia is geographically well
                                                                                positioned as a country to create a
                                                                                new digitalized global city, that
                                                                                will be situated at the crossroad of
                                                                                three continents Asia, Europe, and
                                                                                Africa with half the world&#8217;s
                                                                                population accessible within a
                                                                                five-hour flight. KSA is also a key
                                                                                state in the MENA region. Saudi
                                                                                Arabia spends more than 20 billion
                                                                                dollars per year in ICT Investment
                                                                                and that doesn&#8217;t account for
                                                                                the corpo- rate and foreign
                                                                                investments the Kingdom&#8217;s
                                                                                digital revolution attracts.<br />As
                                                                                a key regional leader in the
                                                                                development of next generation
                                                                                solutions and technology, the
                                                                                country presents lucrative
                                                                                investment opportunities for
                                                                                international investors.
                                                                                Technologies such as 5G Mobile
                                                                                Networks, BIM, 3D Printing, BAS,
                                                                                ITS, Smart Energy Management
                                                                                Systems, Smart Metering, Renewable
                                                                                Energy, Autonomous Vehicles, Drones,
                                                                                Biometrics and Low-cost space
                                                                                exploration and micro-satellites
                                                                                will play a very vital role in the
                                                                                development of smart and sustainable
                                                                                cities across Saudi Arabia.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-39b34f1f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="39b34f1f" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-narrow">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d52dd74"
                                                                data-id="d52dd74" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-74f6a00f elementor-widget elementor-widget-heading"
                                                                        data-id="74f6a00f"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                USD 37 billion</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-623565bf elementor-widget elementor-widget-text-editor"
                                                                        data-id="623565bf"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>Expected CAGR of 5.2%
                                                                                2021-2026<br />Saudi Arabian
                                                                                construction market valued</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2c1c8f02"
                                                                data-id="2c1c8f02" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-1c2290e4 elementor-widget elementor-widget-heading"
                                                                        data-id="1c2290e4"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                USD 825 billion</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2a02ab30 elementor-widget elementor-widget-text-editor"
                                                                        data-id="2a02ab30"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>Planned &amp; unawarded
                                                                                projects<br />Largest in Gulf
                                                                                Cooperation Council (GCC) region</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7447af24"
                                                                data-id="7447af24" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-4d0e71f5 elementor-widget elementor-widget-heading"
                                                                        data-id="4d0e71f5"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                USD 819 billion</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-15a587bd elementor-widget elementor-widget-text-editor"
                                                                        data-id="15a587bd"
                                                                        data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>35% of total value of active projects
                                                                                across GCC 5,200 construction
                                                                                projects are currently ongoing</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-7f74284b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="7f74284b" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55ff0255"
                                                data-id="55ff0255" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7fed6fca elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="7fed6fca" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-59e11531"
                                                                data-id="59e11531" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-19f3319e elementor-widget elementor-widget-heading"
                                                                        data-id="19f3319e"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                EVENT OBJECTIVES</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2bc3038e elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="2bc3038e"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <link rel="stylesheet"
                                                                                href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Support
                                                                                        the Kingdom's Vision
                                                                                        2030</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Create
                                                                                        Job Opportunities</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Build
                                                                                        Better Infrastructure</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Improve
                                                                                        the Quality of Life of
                                                                                        Citizens</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Achieve
                                                                                        Excellence</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Fast
                                                                                        Track Construction
                                                                                        Projects</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Promote
                                                                                        Investment
                                                                                        Opportunities</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Identify
                                                                                        Smart Construction
                                                                                        Technology</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Promote
                                                                                        Sustainable
                                                                                        Developments</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-31ffc417"
                                                                data-id="31ffc417" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-bba89b9 elementor-widget elementor-widget-spacer"
                                                                        data-id="bba89b9" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-155a4d4e"
                                                                data-id="155a4d4e" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-4a5264ae elementor-widget elementor-widget-heading"
                                                                        data-id="4a5264ae"
                                                                        data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Hybrid Event (Physical + Virtual)
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5ad52035 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="5ad52035"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">
                                                                                        Case Study & Technical
                                                                                        Presentations</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Exclusive
                                                                                        Marketing and
                                                                                        Branding</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Technology
                                                                                        Showcase & Exhibition</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Technical
                                                                                        Workshops</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Unlimited
                                                                                        Access to Decision
                                                                                        Makers</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Innovation
                                                                                        Hub</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Interactive
                                                                                        Panel Discussions</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="fas fa-check-circle"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Networking
                                                                                        and Business Meetings</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-ac5c69b elementor-widget elementor-widget-eael-creative-button"
                                                        data-id="ac5c69b" data-element_type="widget"
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
                                        class="elementor-section elementor-top-section elementor-element elementor-element-9033d9b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="9033d9b" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7554cd0c"
                                                data-id="7554cd0c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5c587020 elementor-widget elementor-widget-heading"
                                                        data-id="5c587020" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Attendees Benefits</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-238b4bf5 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="238b4bf5" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-59565468 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="59565468" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3835819a"
                                                                data-id="3835819a" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-2dcf9fff elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="2dcf9fff"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <link rel="stylesheet"
                                                                                href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Hear from our
                                                                                            international panel of
                                                                                            experts about ongoing
                                                                                            and upcoming
                                                                                            construction projects.
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-10a3e9f elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="10a3e9f" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Learn about the latest
                                                                                            construction strategies
                                                                                            and leading technology.
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-66a6b370 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="66a6b370"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Identify smart and
                                                                                            futuristic construction
                                                                                            technologies and
                                                                                            solutions for your
                                                                                            ongoing and upcoming
                                                                                            construction projects.
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-31a5c04c elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="31a5c04c"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Share your views and
                                                                                            experiences with
                                                                                            industry peers and
                                                                                            thought leaders. </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-7070b96 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="7070b96" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Participate in our
                                                                                            highly interactive panel
                                                                                            discussions. </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a98ebe5"
                                                                data-id="4a98ebe5" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-42f6a1bd elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="42f6a1bd"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Gain technical insights
                                                                                            on some of the latest
                                                                                            technology and software
                                                                                            by attending our
                                                                                            technical workshops.
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-25147ff2 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="25147ff2"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Get a real-time
                                                                                            experience with leading
                                                                                            technologies at our
                                                                                            innovation hub. </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-14921367 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="14921367"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Sign business deals and
                                                                                            procure the latest
                                                                                            technology and solutions
                                                                                            for your ongoing and
                                                                                            upcoming projects.
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-21d4ed78 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="21d4ed78"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Secure investments for
                                                                                            your ongoing and
                                                                                            upcoming projects.
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-6040bdd9 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="6040bdd9"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_box-checked"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Explore new and exciting
                                                                                            business opportunities
                                                                                            across the construction
                                                                                            sector. </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-6d16f4f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="6d16f4f" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fea083c"
                                                data-id="fea083c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2e466af elementor-widget elementor-widget-heading"
                                                        data-id="2e466af" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Ongoing & Upcoming KSA Projects</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e001739 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="e001739" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-96db926 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="96db926" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-no">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e6e1c95"
                                                                data-id="e6e1c95" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-e2917d5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="e2917d5" data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">NEOM</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Al
                                                                                        WIDYAN</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">THE
                                                                                        RED SEA PROJECT</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">AL
                                                                                        FAISALIYAH</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">KING
                                                                                        SALMAN ENERGY PARK</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">JEDDAH
                                                                                        TOWER</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">KING
                                                                                        ABDULLAH FINANCIAL
                                                                                        DISTRICT</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ef6496e"
                                                                data-id="ef6496e" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-c4f2507 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="c4f2507" data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">AL
                                                                                        QIDDIYA ENTERTAINMET
                                                                                        CITY</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">AMAALA</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">MALL
                                                                                        OF SAUDI</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">JABAL
                                                                                        OMAR</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">THE
                                                                                        AVENUES MALL</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">KING
                                                                                        ABDULLAH ECONOMIC
                                                                                        CITY</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">THE
                                                                                        MUKAAB</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0e7e519"
                                                                data-id="0e7e519" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-22f2be5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="22f2be5" data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">RIYADH
                                                                                        METRO</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">THE
                                                                                        KNOWLEDGE ECONOMIC
                                                                                        CITY</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">AD
                                                                                        DIRIYAH</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">JEDDAH
                                                                                        METRO</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">MAKKAH
                                                                                        PUBLIC TRANSPORT
                                                                                        PROGRAMME</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-construction-tool-vehicle-with-crane-lifting-materials"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">SHARAN
                                                                                        NATURE RESERVE</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-6c6197d elementor-widget elementor-widget-eael-creative-button"
                                                        data-id="6c6197d" data-element_type="widget"
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
                                        class="elementor-section elementor-top-section elementor-element elementor-element-f6acdc8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="f6acdc8" data-element_type="section" id="whoattend"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dd11b85"
                                                data-id="dd11b85" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-fbfe6de elementor-widget elementor-widget-heading"
                                                        data-id="fbfe6de" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Who Will Attend?</h2>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-2fb8920 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="2fb8920" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4bbcec6"
                                                                data-id="4bbcec6" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-b112a29 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="b112a29" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Mayors / Goverors &
                                                                                            Deputy Mayors / Deputy
                                                                                            Governors </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-ed4f2d5 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="ed4f2d5" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Chairman & Vice
                                                                                            Chairman's </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4e32f93 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="4e32f93" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            President & Vice
                                                                                            President's </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-6c1d67e elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="6c1d67e" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            CEOs / COOs / CTOs
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-3da1809 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="3da1809" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Managing Director's
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-8323574 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="8323574" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Project Director's &
                                                                                            Heads of Projects
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-8a34254 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="8a34254" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Chief Procurement
                                                                                            Officers & Heads of
                                                                                            Procurement </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-36551d8 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="36551d8" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Chief Purchasing
                                                                                            Officers & Heads of
                                                                                            Purchasing </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1ffff8d elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="1ffff8d" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Heads of Marketing &
                                                                                            Business Development
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-c8498d6 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="c8498d6" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Chief Investment
                                                                                            Officers </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-16304ba"
                                                                data-id="16304ba" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-09c7c7c elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="09c7c7c" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Partners & Lawyers
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-196b280 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="196b280" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Consultants </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-0dfbd83 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="0dfbd83" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Principal Architects &
                                                                                            Senior Architects
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-21b7ca6 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="21b7ca6" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Contractors </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-bd0f6d2 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="bd0f6d2" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Developers </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-09f8132 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="09f8132" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Chief Financial
                                                                                            Officer's & Heads of
                                                                                            Finance </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2572692 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="2572692" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Heads of IT & ICT
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-81bf075 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="81bf075" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Systom Integrators &
                                                                                            Heads of Technology
                                                                                            Implementation </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1a24757 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="1a24757" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Heads of Smart City
                                                                                            Projects & Fleads of
                                                                                            Digitalization </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-8120a83 elementor-position-left elementor-mobile-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="8120a83" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div
                                                                                    class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class=" icon_stop"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-icon-box-content">
                                                                                    <h5
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Directors & Heads of
                                                                                            Transportation &
                                                                                            Infrastructure Projects
                                                                                        </span>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
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
                                                                                        13-14, 2023</span>
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




                                    {{-- New and Update --}}
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
