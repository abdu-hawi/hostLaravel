@extends('layout.main')

@push('country-select')


@endpush
@section('content')
<style>
    .color-f0f9ff{
        color: #f0f9ff !important;
    }
    .mt-1{
        margin-top: 1rem;
    }
    .w-100{
        width: 100%;
    }
    .fs-16{
        font-size: 16px !important;
    }
</style>
        <main id="main" class="site-main clr" role="main">
            <div id="content-wrap" class="container clr">
                <div id="primary" class="content-area clr">
                    <div id="content" class="site-content clr">
                        <article class="single-page-article clr">
                            <div class="entry clr" itemprop="text">
                                <div data-elementor-type="wp-page" data-elementor-id="674"
                                    class="elementor elementor-674">

                                    @include('competition.slider')
                                    @include('competition.about_competition')
                                    @include('competition.apply_if_you_are')
                                    @include('competition.competition_dvantages')
                                    @include('competition.competition_track')


                                    <div style="display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    margin: 5rem auto;">
                                        <h1 style="color: #000;
                                        font-size: 40px;">POWERED BY</h1>
                                        <img src="{{ asset('img/bloosom-logo.png') }}" style="max-width: unset; height: 120px;">
                                    </div>

                                </div>


                            </div>

                        </article>


                    </div><!-- #content -->


                </div><!-- #primary -->


            </div><!-- #content-wrap -->



        </main><!-- #main -->





@endsection
