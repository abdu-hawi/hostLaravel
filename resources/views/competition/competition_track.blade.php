<style>
    .competition-track{
        background-color: var( --e-global-color-b407c6d );
        background-image: url("wp-content/uploads/2023/02/50556520-RUHRZ_2018_0092.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        font-family: "Poppins", Sans-serif;
    }
    .competition-track .overlay{
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
    .competition-track .container{
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
        padding: 40px 2rem;
    }
    /* .why .container .content{
        padding: 40px 2rem;
    } */
    .competition-track .container .content h2{
        color: #fff;
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: var( --e-global-typography-5d167aa-font-size );
        font-weight: var( --e-global-typography-5d167aa-font-weight );
        line-height: var( --e-global-typography-5d167aa-line-height );
        word-spacing: var( --e-global-typography-5d167aa-word-spacing );
        text-align: center;
    }
    .competition-track .elementor-widget-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;

    }
    .competition-single-content{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        width: 33.333%;
        padding: 1rem 5rem;
    }
    @media(max-width:992px){
        .competition-single-content{
            padding: 1rem;
        }
    }
    @media(max-width:767px){
        .competition-single-content{
            width: 50%;
            padding: 1rem 0rem;
        }
    }
    @media(max-width:552px){
        .competition-single-content{
            width: 100%;
            padding: 1rem 5rem;
        }
    }

</style>
<section class="competition-track">
    <div class="overlay"></div>
    <div class="container">
        <div class="content">
            <h2>
                <span>
                    {{ __('competition.competition_track') }}
                </span>
            </h2>
            <div class="elementor-widget-container" style="margin-top: 5px;">
                <div class="competition-single-content">
                    <img lazy src="{{ asset('img/competition_track/ICON-01.png') }}">
                </div>
                <div class="competition-single-content">
                    <img lazy src="{{ asset('img/competition_track/ICON-02.png') }}">
                </div>
                <div class="competition-single-content">
                    <img lazy src="{{ asset('img/competition_track/ICON-03.png') }}">
                </div>
                <div class="competition-single-content">
                    <img lazy src="{{ asset('img/competition_track/ICON-04.png') }}">
                </div>
                <div class="competition-single-content">
                    <img lazy src="{{ asset('img/competition_track/ICON-05.png') }}">
                </div>
            </div>
        </div>

    </div>
</section>

