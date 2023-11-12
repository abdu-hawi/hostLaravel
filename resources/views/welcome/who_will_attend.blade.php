<style>
    section.who-will-attend{
        color: #000;
        position: relative;
        width: 100%;
        font-family: "Poppins", Sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    section.who-will-attend::before {
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
    section.who-will-attend .container{
        max-width: 992px;
        margin: 40px 2rem;
        color: var( --e-global-color-1299bf4 );
        font-family: "Poppins", Sans-serif;
        display: flex;
        /* align-items: center; */
        justify-content: center;
        flex-flow: column;
    }
    @media (max-width: 992px){
        section.who-will-attend .container{
            max-width: fit-content;
        }
    }
    section.who-will-attend .container h2{
        margin-bottom: 0;
        padding-bottom: 0;
        color: var( --e-global-color-1299bf4 );
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: 27px;
        font-weight: 600;
    }
    .ul-who-will-attend ul{
        display: inline-flex;
        flex-wrap: wrap;
        width: 100%;
    }
    .ul-who-will-attend li{
        width: 100%;
        padding: 0.5rem 0;
        list-style: square;
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        letter-spacing: 0px;
    }
    @media(min-width:768px){
        .ul-who-will-attend li{
            width: 50%;
        }
    }
</style>
<section class="who-will-attend" id="whoattend">
    <div class="container">
        <h2 class="elementor-heading-title elementor-size-default">
            <span>
                {{ __('welcome.Who will attend') }}
            </span>
        </h2>
        <div class="ul-who-will-attend">
            <ul>
                <li>{{ __('welcome.Ministers, Governors & Mayors') }}</li>
                <li>{{ __('welcome.Chairman & Vice Chairman’s') }}</li>
                <li>{{ __('welcome.President & Vice President’s') }}</li>
                <li>{{ __('welcome.CEOs / COOs / CTOs') }}</li>
                <li>{{ __('welcome.Managing Director’s') }}</li>
                <li>{{ __('welcome.Project Director’s & Heads of Projects') }}</li>
                <li>{{ __('welcome.Chief Procurement Officers & Heads of Procurement') }}</li>
                <li>{{ __('welcome.Chief Purchasing Officers & Heads of Purchasing') }}</li>
                <li>{{ __('welcome.Heads of Marketing & Business Development') }}</li>
                <li>{{ __('welcome.Chief Investment Officers') }}</li>
                <li>{{ __('welcome.Partners & Lawyers') }}</li>
                <li>{{ __('welcome.Consultants') }}</li>
                <li>{{ __('welcome.Principal Architects & Senior Architects') }}</li>
                <li>{{ __('welcome.Contractors') }}</li>
                <li>{{ __('welcome.Developers') }}</li>
                <li>{{ __('welcome.Chief Financial Officer’s & Heads of Finance') }}</li>
                <li>{{ __('welcome.Heads of IT & ICT') }}</li>
                <li>{{ __('welcome.System Integrators & Heads of Technology Implementation') }}</li>
                <li>{{ __('welcome.Heads of Smart City Projects & Heads of Digitalization') }}</li>
                <li>{{ __('welcome.Directors & Heads of Transportation & Infrastructure Projects') }}</li>
            </ul>
        </div>
    </div>


</section>

