@extends('layout.main')
@push('css')
    <link rel='stylesheet' id='elementor-post-707-css' href='wp-content/uploads/elementor/css/post-707.css@ver=1684750170.css'
        media='all' />
    {!! htmlScriptTagJsApi() !!}
@endpush
@push('country-select')
<script id='nbcpf-countryFlag-script-js-after'>
    (function ($) {
    $(function () {

        function render_country_flags() {

            // $(".wpcf7-countrytext").countrySelect({

            // });
            $(".wpcf7-phonetext").intlTelInput({
                autoHideDialCode: false,
                autoPlaceholder: "off",
                nationalMode: false,
                separateDialCode: false,
                hiddenInput: "full_number",

            });

            $(".wpcf7-phonetext").each(function () {
                var hiddenInput = $(this).attr('name');
                //console.log(hiddenInput);
                $("input[name=" + hiddenInput + "-country-code]").val($(this).val());
            });

            $(".wpcf7-phonetext").on("countrychange", function () {
                // do something with iti.getSelectedCountryData()
                //console.log(this.value);
                var hiddenInput = $(this).attr("name");
                $("input[name=" + hiddenInput + "-country-code]").val(this.value);

            }); $(".wpcf7-phonetext").on("keyup", function () {
                var dial_code = $(this).siblings(".flag-container").find(".country-list li.active span.dial-code").text();
                if (dial_code == "")
                    var dial_code = $(this).siblings(".flag-container").find(".country-list li.highlight span.dial-code").text();
                var value = $(this).val();
                console.log(dial_code, value);
                $(this).val(dial_code + value.substring(dial_code.length));
            }); $(".wpcf7-countrytext").on("keyup", function () {
                var country_name = $(this).siblings(".flag-dropdown").find(".country-list li.active span.country-name").text();
                if (country_name == "")
                    var country_name = $(this).siblings(".flag-dropdown").find(".country-list li.highlight span.country-name").text();

                var value = $(this).val();
                //console.log(country_name, value);
                $(this).val(country_name + value.substring(country_name.length));
            });
        }

        var ip_address = "";

        jQuery.ajax({
            //url: "https://ipwho.is/",
            url: "https://reallyfreegeoip.org/json/",
            success: function (response) {

                //console.log(response);
                //var location = JSON.parse(response);
                console.log(response.country_code);
                if (response.country_code !== undefined) {
                    //console.log("here");
                    // $(".wpcf7-countrytext").countrySelect({
                    // });
                    $(".wpcf7-phonetext").intlTelInput({
                        autoHideDialCode: false,
                        autoPlaceholder: "off",
                        nationalMode: false,
                        separateDialCode: false,
                        hiddenInput: "full_number", initialCountry: response.country_code.toLowerCase(),
                    });

                    $(".wpcf7-phonetext").each(function () {
                        var hiddenInput = $(this).attr('name');
                        //console.log(hiddenInput);
                        $("input[name=" + hiddenInput + "-country-code]").val($(this).val());
                    });

                    $(".wpcf7-phonetext").on("countrychange", function () {
                        // do something with iti.getSelectedCountryData()
                        //console.log(this.value);
                        var hiddenInput = $(this).attr("name");
                        $("input[name=" + hiddenInput + "-country-code]").val(this.value);

                    }); $(".wpcf7-phonetext").on("keyup", function () {
                        var dial_code = $(this).siblings(".flag-container").find(".country-list li.active span.dial-code").text();
                        if (dial_code == "")
                            var dial_code = $(this).siblings(".flag-container").find(".country-list li.highlight span.dial-code").text();
                        var value = $(this).val();
                        console.log(dial_code, value);
                        $(this).val(dial_code + value.substring(dial_code.length));
                    }); $(".wpcf7-countrytext").on("keyup", function () {
                        var country_name = $(this).siblings(".flag-dropdown").find(".country-list li.active span.country-name").text();
                        if (country_name == "")
                            var country_name = $(this).siblings(".flag-dropdown").find(".country-list li.highlight span.country-name").text();

                        var value = $(this).val();
                        //console.log(country_name, value);
                        $(this).val(country_name + value.substring(country_name.length));
                    });

                } else {

                    render_country_flags();

                }

            },
            error: function () {
                render_country_flags();
            }
        });
    });
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
                                                            {{ __('header.WORKSHOP REGISTRATION') }}
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

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

                                <div class="alert alert-success fade in alert-dismissible"
                                    style="height: 50vh;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;">
                                    <h3 style="
                                    color: #610000;
                                    background-color: #f0d8d8;
                                    border-color: #f0d8d8;
                                    opacity: 1;
                                    padding: 1.5rem;
                                    width: 100%;
                                    text-align: center;">{{ __('header.The Summit has ended') }}</h3>
                                </div>

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
                                                                    <div action="{{ route('workshop') }}"
                                                                        method="post" class="wpcf7-form init"
                                                                        aria-label="Contact form" novalidate="novalidate" id="ah_form_register"
                                                                        data-status="init">
                                                                        @csrf
                                                                        <div class="row-name">
                                                                            <div class="fname">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.First name') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap" data-name="Name">
                                                                                    <input size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="{{ __('header.First name') }}"
                                                                                        value="{{ old('first_name') ?? '' }}" type="text"
                                                                                        name="first_name" required
                                                                                        @error('first_name') style="border-color: #e70c0c;" @enderror />
                                                                                    @error('first_name')
                                                                                    <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>

                                                                            <div class="lname">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.Last name') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap" data-name="LastName">
                                                                                    <input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="{{ __('header.Last name') }}"
                                                                                        value="{{ old('last_name') ?? '' }}" type="text"
                                                                                        name="last_name" required
                                                                                        @error('last_name') style="border-color: #e70c0c;" @enderror />
                                                                                    @error('last_name')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row-job">
                                                                            <div class="job">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.Job title') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="Jobtitle"><input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="{{ __('header.Job title') }}"
                                                                                        value="{{ old('job_title') ?? '' }}" type="text"
                                                                                        name="job_title" required
                                                                                        @error('job_title') style="border-color: #e70c0c;" @enderror />
                                                                                    @error('job_title')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>

                                                                            <div class="company">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.Company name') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="Companyname"><input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="{{ __('header.Company name') }}"
                                                                                        value="{{ old('company_name') ?? '' }}" type="text"
                                                                                        name="company_name" required
                                                                                        @error('company_name') style="border-color: #e70c0c;" @enderror />
                                                                                    @error('company_name')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row-email">
                                                                            <div class="mobilenum">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.Mobile number') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap" data-name="mobile">
                                                                                    <input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-phonetext wpcf7-validates-as-required wpcf7-validates-as-phonetext"
                                                                                        data-numberonly="true"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="{{ __('header.Mobile number') }}"
                                                                                        value="{{ old('mobile') ?? '' }}" type="text"
                                                                                        name="mobile" required
                                                                                        @error('mobile') style="border-color: #e70c0c;" @enderror />
                                                                                    <input
                                                                                        type="hidden"
                                                                                        name="mobile-country-code"
                                                                                        class="wpcf7-phonetext-country-code" />
                                                                                    @error('mobile')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>

                                                                            <div class="email">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.Email') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="your-email"><input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="{{ __('header.Official email address') }}"
                                                                                        value="{{ old('email') ?? '' }}" type="email"
                                                                                        name="email" required
                                                                                        @error('email') style="border-color: #e70c0c;" @enderror />
                                                                                    @error('email')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row-ticket">
                                                                            <div class="ticket">
                                                                                <label>
                                                                                    <span style="color: #e70c0c">*</span>
                                                                                    {{ __('header.Workshop_name') }}
                                                                                </label>
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="Workshop_name">
                                                                                    <select
                                                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        name="Workshop_name" required
                                                                                        @error('Workshop_name') style="border-color: #e70c0c;" @enderror>
                                                                                        <option value="" hidden>
                                                                                            &#8212;Please choose an option&#8212;
                                                                                        </option>
                                                                                        <option selected value="Achieving Construction Excellence Through the Materials Transition">
                                                                                            {{ __('agenda. Achieving Construction Excellence Through the Materials Transition') }}
                                                                                        </option>
                                                                                    </select>
                                                                                    @error('Workshop_name')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row-gdrp" style="margin: 1rem 0;">
                                                                            <span class="wpcf7-form-control-wrap" data-name="GDRP">
                                                                                <span
                                                                                    class="wpcf7-form-control wpcf7-acceptance">
                                                                                    <span class="wpcf7-list-item" @error('GDRP') style="border: solid 1px #e70c0c;" @enderror>
                                                                                        <label>
                                                                                            <input
                                                                                                type="checkbox"
                                                                                                name="GDRP"
                                                                                                value="1"
                                                                                                id="gdrp"
                                                                                                aria-invalid="false" required />
                                                                                            <span class="wpcf7-list-item-label">
                                                                                                <span style="gdrptext">
                                                                                                    {{ __('header.privacy_policy') }}
                                                                                                </span>
                                                                                            </span>
                                                                                        </label>
                                                                                    @error('GDRP')
                                                                                        <p style="color: #e70c0c"><b>{{ $message }}</b></p>
                                                                                    @enderror
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>


                                                                        <div class="row-name">
                                                                            <div class="fname fbutton">
                                                                                <button type="button" class="btn-submit">{{ __('header.Submit') }}</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpcf7-response-output"
                                                                            aria-hidden="true"></div>
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

                            </div>


                        </div>

                    </article>


                </div><!-- #content -->


            </div><!-- #primary -->


        </div><!-- #content-wrap -->



    </main><!-- #main -->
@endsection
