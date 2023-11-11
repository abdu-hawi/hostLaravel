<style>
    .attendees-benefits{
        background-color: var( --e-global-color-b407c6d );
        background-image: url("wp-content/uploads/2023/02/50556520-RUHRZ_2018_0092.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        font-family: "Poppins", Sans-serif;
    }
    .attendees-benefits .overlay{
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
    .attendees-benefits .container{
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
        word-spacing: 1px;
        padding: 40px 2rem;
    }
    /* .why .container .content{
        padding: 40px 2rem;
    } */
    .attendees-benefits .container .content h2{
        margin-bottom: 0;
        padding-bottom: 0;
        color: #fff;
        font-family: "Poppins", Sans-serif;
        letter-spacing: 0px;
        font-size: 27px;
        font-weight: 600;
        text-align: center;
    }
    .ul-attendees-benefits{
        display: flex;
        justify-content: center;
    }
    .ul-attendees-benefits ul{
        display: inline-flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
    }
    .ul-attendees-benefits li{
        width: 100%;
        padding: 0.5rem 0;
        list-style: none;
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 20px;
        letter-spacing: 0px;
        display: flex;
    }
    @media(min-width:768px){
        .ul-attendees-benefits ul{
            width: 80%
        }
        .ul-attendees-benefits li{
            width: 100%;
        }
    }
    @media(min-width:992px){
        .ul-attendees-benefits ul{
            width: 90%
        }
        .ul-attendees-benefits li{
            width: 40%;
        }
    }
    .ul-attendees-benefits li i{
        margin: 0 1rem;
    }
</style>
<section class="attendees-benefits">
    <div class="overlay"></div>
    <div class="container">
        <div class="content">
            <h2>
                <span>
                    {{ __('welcome.Attendee Benefits') }}
                </span>
            </h2>
        </div>
        <div class="ul-attendees-benefits">
            <ul>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Hear from our international panel of experts about ongoing and upcoming construction projects') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Learn about latest construction strategies and leading technology trends in 2023') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Identify smart and futuristic construction technological solutions for your ongoing construction projects') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Share your views and experiences with industry peers and thought leaders') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Participate in our highly interactive panel discussions') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Gain technical insights on some of the latest technology and software by attending our technical workshops') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Get a real-time experience of leading technologies at our innovation hub') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Sign business deals and procure latest technology and solutions for your ongoing and upcoming projects') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Secure investments for your ongoing and upcoming projects') }}
                    </span>
                </li>

                <li>
                    <i class=" icon_box-checked"></i>
                    <span>
                        {{ __('welcome.Explore new and exciting business opportunities across the construction sector') }}
                    </span>
                </li>

            </ul>
        </div>
    </div>
</section>

