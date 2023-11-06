
<section
    class="agenda-section elementor-section elementor-top-section elementor-element elementor-element-b31297d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
    data-id="b31297d" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
    <div class="elementor-background-overlay"></div>


    {{-- DAY ONE --}}
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-653d178"
            data-id="653d178" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6143db6 elementor-widget elementor-widget-heading"
                    data-id="6143db6" data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default agenda-head-day">
                            <span>Day One</span>
                            <span>20 NOV 2023</span>
                        </h2>
                    </div>
                </div>

                @include('agenda.day_one.session_zero')
                @include('agenda.day_one.session_one')
                @include('agenda.day_one.session_two')

                <div class="elementor-element elementor-element-6143db6 elementor-widget elementor-widget-heading"
                    data-id="6143db6" data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default agenda-head-day agenda-head-workshop">
                            <span>Day One</span>
                            <span>WORKSHSOPS</span>
                            <span>20 NOV 2023</span>
                        </h2>
                    </div>
                </div>

                @include('agenda.day_one.workshops')

            </div>
        </div>
    </div>
    {{-- END -- DAY ONE --}}


    {{-- Day Two --}}
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-653d178"
            data-id="653d178" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6143db6 elementor-widget elementor-widget-heading"
                    data-id="6143db6" data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default agenda-head-day">
                            <span>Day Two</span>
                            <span>21 NOV 2023</span>
                        </h2>
                    </div>
                </div>

                @include('agenda.day_two.session_zero')
                @include('agenda.day_two.session_three')
                @include('agenda.day_two.session_four')
                @include('agenda.day_two.session_five')
                @include('agenda.day_two.session_six')

                <div class="elementor-element elementor-element-6143db6 elementor-widget elementor-widget-heading"
                    data-id="6143db6" data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default agenda-head-day agenda-head-workshop">
                            <span>Day Two</span>
                            <span>WORKSHSOPS</span>
                            <span>21 NOV 2023</span>
                        </h2>
                    </div>
                </div>

                @include('agenda.day_two.workshops')

            </div>
        </div>
    </div>
    {{-- END -- Day Two --}}

</section>


