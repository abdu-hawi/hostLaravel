@extends('layout.main')
@push('css')
    <link rel='stylesheet' id='elementor-post-23-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-23.css@ver=1678354909.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-post-1309-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-1309.css@ver=1689493558.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-post-10-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-10.css@ver=1684064422.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-post-169-css'
        href='{{ asset('wp-content/uploads/elementor/css/post-169.css@ver=1683905107.css') }}' media='all' />
    <style>
        .elementor-heading-title.agenda-head-day{
            display: flex;
            justify-content: space-between;
            color: #f3f3f3 !important;
            background: #0E3D83;
            background: #38b6ba;
            background-image: linear-gradient(90deg, var(--e-global-color-b407c6d) 0%, var(--e-global-color-308b21b) 50%, var(--e-global-color-b407c6d) 100%);
            padding: 5px 5rem;
            font-size: 1.5em !important;
            font-weight: 600;
            margin: 0 -15px;
        }
        @media only screen and (max-width: 600px) {
            .elementor-heading-title.agenda-head-day{
                padding: 5px;
                font-size: 2em !important;
                font-weight: 500;
            }
        }
        .elementor-icon-box-title.agenda-elementor-icon-box-title{
            font-size: 1.3em !important;
        }
        @media only screen and (min-width: 1024px) {
            .agenda-element-populated {
                border-style: none !important;
            }
            .agenda-time-element-populated:not(.first-agenda-item){
                padding-top: 0 !important;
            }
        }
        .agenda-icon-box-title-span{
            line-height: 1.3em;
            color: rgb(32, 32, 32);
            font-family: Poppins, sans-serif;
            font-size: 1em;
            font-style: normal;
            font-variant-ligatures: normal;
            font-variant-caps: normal;
            font-weight: normal;
        }
        .agenda-element-populated:not(.first-agenda-item) {
                border-style: none !important;
                padding-top: 0 !important;
        }
        .agenda-time-element-populated{
                align-content: flex-start !important;
        }
        @media (max-width: 1024px){
            .elementor-1309 .elementor-element.elementor-element-0ed5bdc {
                width: 100%;
            }
            .agenda-element-populated:not(.last-agenda-item) {
                border-style: solid !important;
                border-width: 0 0 1px 0 !important;
            }
            .agenda-element-populated {
                padding: 0 1em 0.3rem 1em !important;
            }
            .agenda-time-element-populated{
                border-width: 0 !important;
                padding: 1rem 1em 0 1em !important;
            }
            .agenda-icon-box-title-span{
                font-size: 0.75em;
            }
        }
        .agenda-icon-box-title-span i{
            color: #054bb5;
            font-weight: 400;
        }
        .agenda-session-header{
            width: 100%;
            background: #e1e1e1;
            padding: 5px 1em;
            font-size: 1.3em;
            font-weight: 700;
            color: #0E3D83;
            margin-bottom: 0.5em;
        }
        .blue-600{
            font-weight: 600; color:#0E3D83;
        }
        .black-600{
            font-weight: 600; color:#000;
        }
        .agenda-head-workshop{
            background: #333333 !important;
            color: #0E3D83 !important;
        }
        .workshops{
            width: 100%;
            padding: 5px 1em;
            font-size: 1.3em;
            margin-bottom: 0.5em;
            font-weight: 500;
            color: #000;
        }
        .black-400{
            font-weight: 400; color:#000;
        }
        .agenda-icon-box-title-span span:not(.black-600), .agenda-icon-box-title-span span:not(.blue-600){
            margin: 2rem;
        }
        .agenda-icon-box-title-span span:is(.black-600), .agenda-icon-box-title-span span:is(.blue-600){
            margin: 0;
        }
        .agenda-section hr{
            margin: 1rem 0;
            border-style: dashed;
            border-color: #00000075;
        }
        @media (max-width: 1024px){
            .agenda-elementor-icon-box-title p{
                margin: 1rem 0;
            }
        }
        .agenda-section p {
            margin: 0 0 1rem;
        }
        .agend_btn_read_more{
            background-image: none !important;
            background-color: #1292ee !important;
        }
        .agend_btn_register{
            background-image: none !important;
            background-color: #0E3D83 !important;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            padding-top: 10vh; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s;
        }
        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }
        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }
        /* The Close Button */
        .close {
            color: #fff;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .modal-header {
            padding: 10px 16px;
            background-color: #0E3D83;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .modal-header .avatar{
            display: flex;
            align-items: center;
        }
        .modal-header .avatar img{
            border-radius: 50%
        }
        .modal-header h3{
            margin: 0 1rem;
            color: #ffffff;
        }
        .modal-body {
            padding: 16px 16px 2px;
            max-height: 70vh;
            overflow-y: auto;
        }
        .modal h3{
            font-size: 26px !important;
        }
        .ah-body{
            height: 100vh !important;
            overflow: hidden;
        }
    </style>
@endpush
@push('modal')
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("agend_btn_read_more");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        var body = document.getElementsByTagName('body')[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
            // body.classList.add('ah-body');
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            // body.classList.remove('ah-body');
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                // body.classList.remove('ah-body');
            }
        }
    </script>
@endpush
@section('content')
    <main id="main" class="site-main clr" role="main">



        <div id="content-wrap" class="container clr">


            <div id="primary" class="content-area clr">


                <div id="content" class="site-content clr">



                    <article class="single-page-article clr">


                        <div class="entry clr" itemprop="text">


                            <div data-elementor-type="wp-page" data-elementor-id="1309" class="elementor elementor-1309">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-f32de13 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="f32de13" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-94b1db9"
                                            data-id="94b1db9" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-871619c elementor-invisible elementor-widget elementor-widget-heading"
                                                    data-id="871619c" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            {{ __('agenda.Agenda') }}
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                @include('agenda.master')


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-48992cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="48992cb" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a19b765 elementor-invisible"
                                            data-id="a19b765" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-46148f5 elementor-widget elementor-widget-heading"
                                                    data-id="46148f5" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">
                                                            {{ __("agenda.Let's join the biggest construction conference on 2023.") }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9de45ef elementor-widget elementor-widget-text-editor"
                                                    data-id="9de45ef" data-element_type="widget"
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
                                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p> --}}
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2aff5fe elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                                    data-id="2aff5fe" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="{{ route('index') }}#overview"
                                                                class="elementor-button-link elementor-button elementor-size-md"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span
                                                                        class="elementor-button-icon elementor-align-icon-right">
                                                                        @if (session()->has('lang') && session('lang') == 'ar')
                                                                        <i class="fas fa-angle-double-left"></i> </span>
                                                                        @else
                                                                        <i class="fas fa-angle-double-right"></i> </span>
                                                                        @endif

                                                                    <span class="elementor-button-text">
                                                                        {{ __('agenda.Overview') }}
                                                                    </span>
                                                                </span>
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

                    </article>


                </div><!-- #content -->


            </div><!-- #primary -->


        </div><!-- #content-wrap -->



    </main><!-- #main -->
@endsection
