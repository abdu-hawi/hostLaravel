<style>
    section.overview{
        color: #000;
        position: relative;
        width: 100%;
        font-family: "Poppins", Sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    section.overview::before {
        content: "";
        background-image: url('img/bg_01.png');
        background-size: 100% auto;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.25;
        background-position: center;
        background-repeat: repeat-x;
        z-index: -1;
        background-attachment: fixed;
    }
    section.overview .container{
        max-width: 992px;
        margin: 40px 2rem;
        color: var( --e-global-color-1299bf4 );
        font-family: "Poppins", Sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
    }
    @media (max-width: 992px){
        section.overview .container{
            max-width: fit-content;
        }
    }
    section.overview .container h2{
        margin-bottom: 10px;
        padding-bottom: 5px;
        color: var( --e-global-color-1299bf4 );
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: var( --e-global-typography-5d167aa-font-size );
        font-weight: var( --e-global-typography-5d167aa-font-weight );
        line-height: var( --e-global-typography-5d167aa-line-height );
        word-spacing: var( --e-global-typography-5d167aa-word-spacing );
    }
    section.overview .container .elementor-heading-title span{
        border: 2px solid var( --e-global-color-1299bf4 );
        border-width: 0 0 4px 0;
    }
    section.overview .container p{
        text-align: justify;
        font-size: 20px;
    }
</style>
<div id="overview"></div>
<section class="overview">
    <div class="container">
        <h2 class="elementor-heading-title elementor-size-default">
            <span>
                {{ __('welcome.Overview') }}
            </span>
        </h2>
        <div class="elementor-widget-container" style="margin-top: 20px;">
            <p>
                {{ __('welcome.overview_01') }}
            </p>
            <p>
                {{ __('welcome.overview_02') }}
            </p>
            <p>
                {{ __('welcome.overview_03') }}
            </p>
            <p>
                {{ __('welcome.overview_04') }}
            </p>
        </div>
    </div>

    <style>
        .container-ul{
            /* max-width: 80%; */
            margin: 0 auto 20px auto;
            padding-bottom: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .container-ul .div-ul{
            margin: 10px;
            width: 450px;
            padding: 15px;
            border: dashed 1px var( --e-global-color-1299bf4 );
        }
        @media (max-width:960px){
            .container-ul .div-ul{
                width: 400px;
            }
        }
        @media (max-width:860px){
            .container-ul .div-ul{
                width: 350px;
            }
        }
        @media (max-width:755px){
            .container-ul .div-ul{
                width: 100%;
            }
        }
        .container-ul li{
            padding-bottom: calc(10px/2);
            list-style: none;
        }
        .container-ul li span{
            font-family: "Poppins", Sans-serif;
            color: var( --e-global-color-1299bf4 );
        }
        .container-ul li i{
            width: 1.25em;
            font-size: var(--e-icon-list-icon-size);
            color: var( --e-global-color-720551e );
        }
    </style>
    <div class="container-ul">
        <div class="div-ul">
            <h3>
                {{ __('welcome.EVENT OBJECTIVES') }}
            </h3>
            <ul class="elementor-icon-list-items">
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Support the Kingdom's Vision 2030") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span
                        class="elementor-icon-list-icon">
                        <i aria-hidden="true"
                            class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Create Job Opportunities") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span
                        class="elementor-icon-list-icon">
                        <i aria-hidden="true"
                            class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Build Better Infrastructure") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span
                        class="elementor-icon-list-icon">
                        <i aria-hidden="true"
                            class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Improve the Quality of Life of Citizens") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span
                        class="elementor-icon-list-icon">
                        <i aria-hidden="true"
                            class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Achieve Excellence") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span
                        class="elementor-icon-list-icon">
                        <i aria-hidden="true"
                            class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Fast Track Construction Projects") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span
                        class="elementor-icon-list-icon">
                        <i aria-hidden="true"
                            class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Promote Investment Opportunities") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Identify Smart Construction Technology") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Promote Sustainable Developments") }}
                    </span>
                </li>
            </ul>
        </div>


        {{-- Hybrid Event (Physical + Virtual) --}}
        <div class="div-ul">
            <h3>
                {{ __('welcome.Hybrid Event (Physical + Virtual)') }}
            </h3>
            <ul class="elementor-icon-list-items">
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Case Study & Technical Presentations") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Exclusive Marketing & Branding") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Technology Showcase & Exhibition") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Technical Workshops") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Unlimited Access to Decision Makers") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Innovation Hub") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Interactive Panel Discussions") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Networking & Business Meetings") }}
                    </span>
                </li>
            </ul>
        </div>
        {{-- END -- Hybrid Event (Physical + Virtual) --}}

        {{-- Solution Providers Category --}}
        <div class="div-ul">
            <h3>
                {{ __('welcome.Solution Providers Category') }}
            </h3>
            <ul class="elementor-icon-list-items">
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Lidar") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Connected Hardhats") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Smart Infrastructure") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Virtual Reality") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Augmented Reality") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Artificial Intelligence") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.BIM Software") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.3D Printing Houses") }}
                    </span>
                </li>
                <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-check-circle"></i>
                    </span>
                    <span class="elementor-icon-list-text">
                        {{ __("welcome.Exoskeletons") }}
                    </span>
                </li>
            </ul>
        </div>
        {{-- END -- Solution Providers Category --}}

    </div>

</section>

