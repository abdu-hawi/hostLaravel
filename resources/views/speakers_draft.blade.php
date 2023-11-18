@extends('layout.main')
@section('content')
<style>
    :root {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
    }
    .speakers .column { /* inline: 1 */
        position: relative;
        padding-bottom: 10px;
    }
    .speakers .row{ /* inline: 6 */
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
    }
    .speakers .row > * {  /* inline: 14 */
        flex-shrink: 0;
        flex-wrap: wrap;
        width: 100%;
        max-width: 100%;
        padding-left: calc(var(--bs-gutter-x) * .5);
        padding-right: calc(var(--bs-gutter-x) * .5);
        margin-top: var(--bs-gutter-y);
    }
    .speakers .row{ /* inline: 24 */
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(0.25rem * -1);
        margin-left: calc(0.25rem * -.5);
        justify-content: space-around;
    }
    .speakers .column { /* inline: 31 */
        width: 24%;
        padding: 0.5rem 1rem 0;
        margin: 0.5rem;
        border-radius: 15px;
    }
    @media(max-width:992px){
        .speakers .column {
            width: 31%;
        }
    }
    @media(max-width:772px){
        .speakers .column {
            width: 48%;
        }
    }
    @media(max-width:650px){
        .speakers .column {
            width: 100%;
        }
    }
    .speakers .column { /* inline: 56 */
        text-align: center;
        box-shadow: 0 4px 8px 0 #154a7e39;
    }
    .speakers .column h2{
        font-size: 28px;
        margin: 10px 0;
    }
    .speakers .column img {
        max-width: 200px !important;
        border: 3px solid #154a7e;
        box-shadow: inset 0 0 0 20px #154a7e, inset 0 0 0 20px #154a7e;
        border-radius: 50%;
    }
</style>
<main id="main" class="site-main clr speakers"  role="main">

    <div data-elementor-type="wp-page" data-elementor-id="2124" class="elementor elementor-2124">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f32de13 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f32de13" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default" style="text-align: center;">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-94b1db9"
                    data-id="94b1db9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-871619c elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="871619c" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h1 class="elementor-heading-title elementor-size-default">
                                    {{ __('header.Speakers') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="agenda-section elementor-section elementor-top-section elementor-element elementor-element-b31297d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
            data-id="b31297d" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-653d178"
                    data-id="653d178" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6143db6 elementor-widget elementor-widget-heading"
                            data-id="6143db6" data-element_type="widget"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">

                                <div class="row">
                                    <div class="column">
                                        <img lazy decoding="async" src="{{ asset('speakers/H_E_MAJED_AL HOGAIL.png') }}" alt="{{ __('header.H.E MAJED BIN ABDULLAH BIN HAMAD AL HOGAIL') }}">
                                        <div class="container-ah">
                                            <h2>{{ __('header.H.E MAJED BIN ABDULLAH BIN HAMAD AL HOGAIL') }}</h2>
                                            <p>{{ __('header.Minister of Municipal & Rural Affairs & Housing') }}</p>
                                        </div>
                                    </div>
                                    {{-- Eng_Abdullah_Al_Budair --}}
                                    <div class="column">
                                        <img lazy decoding="async" src="{{ asset('speakers/Eng_Abdullah_Al_Budair.png') }}" alt="{{ __('agenda.Eng. Abdullah Mohammed Al-Budair') }}">
                                        <div class="container-ah">
                                            <h2>{{ __('agenda.Eng. Abdullah Mohammed Al-Budair') }}</h2>
                                            <p>{{ __('agenda.Vice Minister of Municipal and Rural Affairs and Housing') }}</p>
                                        </div>
                                    </div>
                                    {{-- Mr_Salih_Ali_Al_Turki --}}
                                    <div class="column">
                                        <img lazy decoding="async" src="{{ asset('speakers/Mr_Salih_Ali_Al_Turki.png') }}" alt="{{ __('agenda.Mr. Salih Ali Al-Turki') }}">
                                        <div class="container-ah">
                                            <h2>{{ __('agenda.Mr. Salih Ali Al-Turki') }}</h2>
                                            <p>{{ __('agenda.H.E. Mayor of Jeddah and Makkah Al Mukarrama') }}</p>
                                        </div>
                                    </div>
                                    {{-- Eng_Fahad_Mohammed_Aljubair --}}
                                    <div class="column">
                                        <img lazy decoding="async" src="{{ asset('speakers/Eng_Fahad_Mohammed_Aljubair.png') }}" alt="{{ __('agenda.Eng. Fahad Mohammed Aljubair') }}">
                                        <div class="container-ah">
                                            <h2>{{ __('agenda.Eng. Fahad Mohammed Aljubair') }}</h2>
                                            <p>{{ __('agenda.H.E. Mayor of Eastern Province') }}</p>
                                        </div>
                                    </div>
                                    {{-- Eng_Fahad_Mohammed_Aljubair --}}


                                    {{-- Eng_Mohammad_Al_Tayyar --}}
                                    <div class="column">
                                        <img lazy decoding="async" src="{{ asset('speakers/Eng_Mohammad_Al_Tayyar.png') }}" alt="{{ __('agenda.Eng. Mohammad Al Tayyar') }}">
                                        <div class="container-ah">
                                            <h2>{{ __('agenda.Eng. Mohammad Al Tayyar') }}</h2>
                                            <p>{{ __('agenda.Exective Program Director (Oil Sustainability Program)') }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

</main><!-- #main -->

@endsection
