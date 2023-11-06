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
    </style>
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
                                                        <h1 class="elementor-heading-title elementor-size-default">Agenda
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
                                                        <div class="elementor-heading-title elementor-size-default">Let's
                                                            join the biggest construction conference on 2023.</div>
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
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-angle-double-right"></i> </span>
                                                                    <span class="elementor-button-text">Overview</span>
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
