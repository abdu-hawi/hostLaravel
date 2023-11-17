@extends('layout.main')
@section('content')
<style>
    .speakers .row{
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
    }
    .speakers .row{
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(0.25rem * -1);
        margin-left: calc(0.25rem * -.5);
        justify-content: center;
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
                                    {{ __('agenda.Agenda') }}
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
aa
                            </div>
                        </div>
                    </div>
                </div>
        </section>

</main><!-- #main -->

@endsection
