<style>
    .why{
        background-color: var( --e-global-color-b407c6d );
        background-image: url("wp-content/uploads/2023/02/50556520-RUHRZ_2018_0092.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        font-family: "Poppins", Sans-serif;
    }
    .why .overlay{
        background-color: transparent;
        background-image: linear-gradient(180deg, var(--e-global-color-b407c6d) 0%, var(--e-global-color-308b21b) 100%);
        opacity: 0.92;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
    }
    .why .container{
        position: relative;
        z-index: 1;
        color: #fff;
        max-width: fit-content;
        margin: 0px 2rem;
        font-family: "Poppins", Sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        width: fit-content;
        text-align: justify;
        padding: 40px 2rem;
    }
    /* .why .container .content{
        padding: 40px 2rem;
    } */
    .why .container .content h2{
        color: #fff;
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: var( --e-global-typography-5d167aa-font-size );
        font-weight: var( --e-global-typography-5d167aa-font-weight );
        line-height: var( --e-global-typography-5d167aa-line-height );
        word-spacing: var( --e-global-typography-5d167aa-word-spacing );
    }
    .d-flex{
        display: flex;
    }
    .why .content-2{
        justify-content: space-between;
        width: 100%;
        flex-direction: column;
    }
    .fw-600{
        font-weight: 600;
    }
    .fs-22{
        font-size: 22px;
    }
    .usd-billion{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 2rem;
    }
    .usd-billion div{
        margin: 2rem 0;
    }
    .white{
        color: #fff !important;
    }
    .attendee-breakdown{
        background-color: #cccccc3a;
    }
    .attendee-breakdown h4{
        background-color: #001D68;
        text-align: center;
        color: #fff;
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: 26px;
        font-weight: 600;
        padding: .25rem;
    }
    .attendee-content ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 0 3rem;
    }
    .attendee-content li{
        list-style: none;
        margin: 0.5rem 1.75rem;
        text-align: center;
        width: 240px;
    }
    @media (max-width:992px){
        .attendee-content li{
            width: 40%;
        }
    }
    @media (max-width:707px){
        .attendee-content li{
            width: 100%;
        }
    }
    .attendee-content li p{
        margin-bottom: .25rem;
    }
    .attendee-content li h4{
        background-color: transparent;
        background: transparent;
        color: #000;
        font-weight: 700;
    }
    .black-700{
        color: #000;
        font-weight: 700;
    }
</style>
<section class="why">
    <div class="overlay"></div>
    <div class="container">
        <div class="content">
            <h2 class="elementor-heading-title elementor-size-default">
                <span>
                    {{ __('welcome.Why Saudi Arabia?') }}
                </span>
            </h2>
            <div class="elementor-widget-container" style="margin-top: 5px;">
                <p>
                    {{ __('welcome.why_saudi_arabia_01') }}
                </p>
            </div>
        </div>
        <div class="d-flex content-2">
            <div class="row">
                <div class="usd-billion">
                    <div>
                        <span class="black-700 fs-22">{{ __('welcome.USD 37 billion') }}</span>
                        <br>
                        {{ __('welcome.Expected CAGR of 5.2% 2021 – 2026') }} <br>
                        {{ __('welcome.Saudi Arabian construction market valued') }}
                    </div>
                    <div>
                        <span class="black-700 fs-22">{{ __('welcome.USD 825 billion') }}</span>
                        <br>
                        {{ __('welcome.Planned & unawarded projects') }} <br>
                        {{ __('welcome.Largest in Gulf Cooperation Council (GCC) region') }}
                    </div>
                    <div>
                        <span class="black-700 fs-22">{{ __('welcome.USD 819 billion') }}</span>
                        <br>
                        {{ __('welcome.35% of total value of active projects across GCC') }} <br>
                        {{ __('welcome.5,200 construction projects are currently ongoing') }}
                    </div>
                </div>
            </div>
            <div class="attendee-breakdown">
                <h4>
                    {{ __('welcome.Attendee breakdown') }}
                </h4>
                <div class="attendee-content">
                    <ul>
                        <li>
                            <p>
                                {{ __('welcome.Ministry VVIP’s, VIP’s & Senior Dignitaries') }}
                            </p>
                            <h4>20%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Municipality Representatives') }}</p>
                            <h4>15%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Smart City Officials') }}</p>
                            <h4>10%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Contracting Companies') }}</p>
                            <h4>15%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Real Estate Development Companies') }}</p>
                            <h4>10%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Architects') }}</p>
                            <h4>15%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Consultants') }}</p>
                            <h4>20%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.Investment Company & Law Firm Representatives') }}</p>
                            <h4>5%</h4>
                        </li>
                        <li>
                            <p>{{ __('welcome.System Integrators') }}</p>
                            <h4>5%</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

