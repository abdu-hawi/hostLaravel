
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
                            <span>{{ __('agenda.Day One') }}</span>
                            <span>{{ __('agenda.20 NOV 2023') }}</span>
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
                            <span>{{ __('agenda.Day One') }}</span>
                            <span>{{ __('agenda.WORKSHSOPS') }}</span>
                            <span>{{ __('agenda.20 NOV 2023') }}</span>
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
                            <span>{{ __('agenda.Day Two') }}</span>
                            <span>{{ __('agenda.21 NOV 2023') }}</span>
                        </h2>
                    </div>
                </div>

                @include('agenda.day_two.session_zero')
                @include('agenda.day_two.session_three')
                @include('agenda.day_two.session_four')
                @include('agenda.day_two.session_five')
                @include('agenda.day_two.session_six')

                {{-- <div class="elementor-element elementor-element-6143db6 elementor-widget elementor-widget-heading"
                    data-id="6143db6" data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default agenda-head-day agenda-head-workshop">
                            <span>{{ __('agenda.Day Two') }}</span>
                            <span>{{ __('agenda.WORKSHSOPS') }}</span>
                            <span>{{ __('agenda.21 NOV 2023') }}</span>
                        </h2>
                    </div>
                </div> --}}

                {{-- @include('agenda.day_two.workshops') --}}

            </div>
        </div>
    </div>
    {{-- END -- Day Two --}}

    <!-- The Modal -->
    <div id="myModal" class="modal" dir="ltr">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="{{ asset('speakers/ahmed_al_shamari.jpg') }}" alt="" width="50">
                    <h3>Ahmed Oudah Al Shammari</h3>
                </div>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <h3>Ahmed Oudah Al Shammari</h3>
                <h3>Polymer material Implementation supervisor</h3>
                <p>Ahmed Al Shammari is currently employed as the Polymer Materials Supervisor in the Oil Sustainability Program. Over the past 11 years, he has gained extensive experience and knowledge in project and risk management and stakeholder engagement and strategy execution. </p>
                <p>
                    He holds a Master's degree in Structural Integrity and Reliability Management, and a Bachelor's degree in Mechanical Engineering. His expertise in the areas of design, Asset integrity, stress analysis, material selection, Finite Element Analysis and fracture mechanics.
                </p>
                <p>
                    He collaborates with a variety of sectors such as standards and regulations, R&D, and manufacturers both locally and globally. His duty is to incorporate advanced, sustainable polymer materials into infrastructure and construction for projects such as NEOM, the water sector, and the housing sector. His work aims to reduce water consumption and CO2 emissions, accelerate construction progress, and ensure superior quality and cost-efficiency.
                </p>
            </div>
        </div>

    </div>
</section>


