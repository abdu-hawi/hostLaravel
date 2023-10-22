@extends('layout.main')
@push('css')
    <link rel='stylesheet' id='elementor-post-707-css' href='wp-content/uploads/elementor/css/post-707.css@ver=1684750170.css'
        media='all' />
    {!! htmlScriptTagJsApi() !!}
@endpush
@push('country-select')
<script>
    (function ($) {

    })(jQuery);
    </script>

@endpush
@section('content')
    <main id="main" class="site-main clr" role="main">



        <div id="content-wrap" class="container clr">


            <div id="primary" class="content-area clr">


                <div id="content" class="site-content clr">



                    <article class="single-page-article clr">


                        <div class="entry clr" itemprop="text">


                            <div data-elementor-type="wp-page" data-elementor-id="707" class="elementor elementor-707">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-8e8bc19 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="8e8bc19" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3ce02be6"
                                            data-id="3ce02be6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1d43d2a6 elementor-invisible elementor-widget elementor-widget-heading"
                                                    data-id="1d43d2a6" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Contact us</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

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
                                    .fbutton button{
                                        width: 250px;
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

                                @if(Session::has('success'))
                                    <div class="alert alert-success fade in alert-dismissible" style="margin-top: 18px;
                                    color: #3c763d;
                                    background-color: #dff0d8;
                                    border-color: #d6e9c6;
                                    opacity: 1;
                                    text-align: center;
                                    padding: 0.5rem;">
                                        <strong>{{ Session::get('success') }}</strong>
                                    </div>
                                @endif

                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-795f462 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="795f462" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>





                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-425a2d2f elementor-invisible"
                                            data-id="425a2d2f" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b623f2d eael-contact-form-7-button-align-left eael-contact-form-7-button-custom elementor-widget elementor-widget-eael-contact-form-7"
                                                    data-id="b623f2d" data-element_type="widget"
                                                    data-widget_type="eael-contact-form-7.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="eael-contact-form-7-wrapper">
                                                            <div
                                                                class="eael-contact-form eael-contact-form-7 eael-contact-form-b623f2d placeholder-show eael-contact-form-align-left">
                                                                <div class="wpcf7 no-js" id="wpcf7-f730-p707-o1"
                                                                    lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response">
                                                                        <p role="status" aria-live="polite"
                                                                            aria-atomic="true"></p>
                                                                        <ul></ul>
                                                                    </div>
                                                                    <form action="{{ route('contact_us') }}"
                                                                        method="post" class="wpcf7-form init"
                                                                        aria-label="Contact form" novalidate="novalidate"
                                                                        data-status="init" id="ah_form">
                                                                        @csrf
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
                                                                                <button type="submit" class="btn-submit">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-2db8c304 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible"
                                    data-id="2db8c304" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c173605"
                                            data-id="7c173605" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5ed681a elementor-widget elementor-widget-google_maps"
                                                    data-id="5ed681a" data-element_type="widget"
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
                                                                src="https://maps.google.com/maps?q=Ritz%20Carlton%2Criyadh&#038;t=m&#038;z=12&#038;output=embed&#038;iwloc=near"
                                                                title="Ritz Carlton,riyadh"
                                                                aria-label="Ritz Carlton,riyadh"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>


                        </div>

                    </article>


                </div><!-- #content -->


            </div><!-- #primary -->


        </div><!-- #content-wrap -->



    </main><!-- #main -->
@endsection
