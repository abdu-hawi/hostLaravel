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
        border: 1px solid #154a7e39;
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
        justify-content: center;
    }
    .speakers .column { /* inline: 31 */
        width: 22%;
        padding: 0.5rem 1rem 0;
        margin: 1rem;
        border-radius: 15px;
    }
    @media(max-width:992px){
        .speakers .column {
            width: 31%;
        }
    }
    @media(max-width:772px){
        .speakers .column {
            width: 47%;
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
        letter-spacing: normal;
    }
    .speakers .column img {
        width: 90%;
        max-width: 200px !important;
        border: 3px solid #154a7e;
        box-shadow: inset 0 0 0 20px #154a7e, inset 0 0 0 20px #154a7e;
        border-radius: 50%;
        margin-top: 1rem;
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
                                <h1 class="elementor-heading-title elementor-size-default" style="margin-top: 2rem;">
                                    {{ __('header.Speakers') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $speakersArr = [
                [
                    'img' => 'speakers/H_E_MAJED_AL HOGAIL.png',
                    'name' => 'header.H.E MAJED BIN ABDULLAH BIN HAMAD AL HOGAIL',
                    'bio' => 'header.Minister of Municipal & Rural Affairs & Housing',
                ],
                [
                    'img' => 'speakers/Eng_Abdullah_Al_Budair.png',
                    'name' => 'agenda.Eng. Abdullah Mohammed Al-Budair',
                    'bio' => 'agenda.Vice Minister of Municipal and Rural Affairs and Housing',
                ],
                [
                    'img' => 'speakers/Mr_Salih_Ali_Al_Turki.png',
                    'name' => 'agenda.Mr. Salih Ali Al-Turki',
                    'bio' => 'agenda.H.E. Mayor of Jeddah and Makkah Al Mukarrama',
                ],
                [
                    'img' => 'speakers/Eng_Fahad_Mohammed_Aljubair.png',
                    'name' => 'agenda.Eng. Fahad Mohammed Aljubair',
                    'bio' => 'agenda.H.E. Mayor of Eastern Province',
                ],
                [
                    'img' => 'speakers/Eng_Mohammad_Al_Tayyar.png',
                    'name' => 'agenda.Eng. Mohammad Al Tayyar',
                    'bio' => 'agenda.Exective Program Director (Oil Sustainability Program)',
                ],
                [
                    'img' => 'speakers/Dr_Abdulaziz_Alzahrani.png',
                    'name' => 'agenda.Dr_Abdulaziz_Alzahrani',
                    'bio' => 'agenda.Dr_Abdulaziz_Alzahrani_bio',
                ],
                [
                    'img' => 'speakers/Dr_Khaled_Alskeet.png',
                    'name' => 'agenda.Prof_Khaled_Alskeet',
                    'bio' => 'agenda.Prof_Khaled_Alskeet_bio',
                ],
                [
                    'img' => 'speakers/Mr_John_Seed.png',
                    'name' => 'agenda.Mr. John Seed',
                    'bio' => 'agenda.Group Director, Strategy & Development - Dar Al Riyadh',
                ],
                [
                    'img' => 'speakers/Dr_Maher_Shira.png',
                    'name' => 'agenda.Dr_Maher_Shira',
                    'bio' => 'agenda.Dr_Maher_Shira_bio',
                ],
                [
                    'img' => 'speakers/Ms_Jena_Ladhani.png',
                    'name' => 'agenda.Ms_Jena_Ladhani',
                    'bio' => 'agenda.Ms_Jena_Ladhani_bio',
                ],
                [
                    'img' => 'speakers/Mr_Medy_Navani.png',
                    'name' => 'agenda.Mr. Medy Navani',
                    'bio' => 'agenda.CEO- Design Haus Medy',
                ],
                [
                    'img' => 'speakers/Eng_Saad_Bin_Saleh_AlShuail.png',
                    'name' => 'agenda.Eng. Saad Bin Saleh AlShuail',
                    'bio' => 'agenda.Secretary-General of the Saudi Building Code National Committee',
                ],
                [
                    'img' => 'speakers/Dr_Ali_Malibari.png',
                    'name' => 'agenda.Dr. Ali Malibari',
                    'bio' => 'agenda.Saudi Society for Civil Engineering',
                ],
                [
                    'img' => 'speakers/Mr_Khattar_Abdulkhalek.png',
                    'name' => 'agenda.Mr. Khattar Abdulkhalek',
                    'bio' => 'agenda.Drone & Innovation Expert , Managing CBRE Saudi region',
                ],
                [
                    'img' => 'speakers/',
                    'name' => 'agenda.',
                    'bio' => 'agenda.',
                ],
            ]
        @endphp
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

                                    @foreach ($speakersArr as $speakerArr)
                                    <div class="column">
                                        <img lazy decoding="async" src="{{ asset($speakerArr['img']) }}" alt="{{ __($speakerArr['name']) }}">
                                        <div class="container-ah">
                                            <h2>{{ __($speakerArr['name']) }}</h2>
                                            <p>{{ __($speakerArr['bio']) }}</p>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

</main><!-- #main -->

@endsection
