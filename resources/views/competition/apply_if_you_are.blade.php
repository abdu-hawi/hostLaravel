<style>
    section.apply-if-you-are{
        color: #000;
        position: relative;
        width: 100%;
        font-family: "Poppins", Sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    section.apply-if-you-are::before {
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
    section.apply-if-you-are .container{
        color: var( --e-global-color-1299bf4 );
        font-family: "Poppins", Sans-serif;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-align: justify;
        margin: 0px auto;
        padding: 40px auto;
        max-width: 1280px;
        width: unset;
    }
    section.apply-if-you-are .container h2{
        margin-bottom: 0;
        padding-bottom: 0;
        color: var( --e-global-color-1299bf4 );
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: 27px;
        font-weight: 600;
    }
    .apply-if-you-are-content{
        display: flex;
        align-items: flex-start;
        flex-direction: column;
        padding: 0 20px;
    }

    .apply-if-you-are img{
        width: 50%;
        height: auto;
        padding: 40px 20px 40px;
    }
    .apply-if-you-are-content ul{
        width: 100%;
    }
    .apply-if-you-are-content li{
        width: 100%;
        padding: 0.5rem 0;
        list-style: square;
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        letter-spacing: 0px;
    }
    /* @media(min-width:768px){
        .apply-if-you-are-content li{
            width: 50%;
        }
    } */

    @media(max-width:992px){
        section.apply-if-you-are .container{
            flex-direction: column;
        }
        .apply-if-you-are-content{
            padding-top: 40px;
        }
        .apply-if-you-are img{
            width: 70%;
            padding: 10px 20px 40px;
        }
    }
    @media(max-width:767px){
        .apply-if-you-are img{
            width: 100%;
        }
    }
</style>
<section class="apply-if-you-are" id="whoattend">
    <div class="container">
        <div class="apply-if-you-are-content">
            <h2 class="elementor-heading-title elementor-size-default">
                <span>
                    {{ __('competition.apply_if_you_are') }}
                </span>
            </h2>
            <ul>
                <li>{{ __('competition.Early_stage_startups') }}</li>
                <li>{{ __('competition.Business_must_be_based') }}</li>
                <li>{{ __('competition.Must_have_working_Minimum_Viable_Product') }}</li>
            </ul>
        </div>
        <img src="{{ asset('img/competition_apply.png') }}" alt="">
    </div>


</section>

