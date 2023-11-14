<style>
    .about-competition{
        background-color: var( --e-global-color-b407c6d );
        background-image: url("wp-content/uploads/2023/02/50556520-RUHRZ_2018_0092.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        font-family: "Poppins", Sans-serif;
    }
    .about-competition .overlay{
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
    .about-competition .container{
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
    .about-competition .container .content h2{
        color: #fff;
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: var( --e-global-typography-5d167aa-font-size );
        font-weight: var( --e-global-typography-5d167aa-font-weight );
        line-height: var( --e-global-typography-5d167aa-line-height );
        word-spacing: var( --e-global-typography-5d167aa-word-spacing );
    }

</style>
<section class="about-competition">
    <div class="overlay"></div>
    <div class="container">
        <div class="content">
            <h2>
                <span>
                    {{ __('competition.about_competition') }}
                </span>
            </h2>
            <div class="elementor-widget-container" style="margin-top: 5px;">
                <p>
                    {{ __('competition.about_01') }}
                </p>
            </div>
        </div>

    </div>
</section>

