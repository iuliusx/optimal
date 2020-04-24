@extends('layouts.layout', ['title'=>"Uk building company"])

@section('content')

    <!-- Jumbotron -->

    <main class="jumbotron">
@include('partials.home_slider')
    </main>

    <div class="content">

        <!-- Section About -->

        <section class="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <strong class="section-subtitle">about us</strong>
                        <h2 class="section-title section-about-title">We Are The Leader In The Architectural</h2>
                        <p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other</p>
                        <div class="experience-box">
                            <div class="experience-border"></div>
                            <div class="experience-content">
                                <div class="experience-number">16</div>
                                <div class="experience-info wow fadeInDown">Years<br>Experience<br>Working</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="dots-image">
                            <img alt="" class="about-img img-responsive" src="images/1-470x660.jpg">
                            <div class="dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Projects -->

        <section class="section-projects section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="section-title">Latest Projects</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="filter-content">
                            <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
                                <li class="active"><a href="#" class="all" data-filter="*">All</a></li>
                                @foreach($categories as $category)
                                    @include('partials.portfolio_filter', ['category'=>$category])
                                @endforeach
                            </ul>
                            <a href="/portfolio" class="view-projects">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-carousel owl-carousel">
                @foreach($portfolios as $portfolio)
                    @include('partials.portfolio_front', ['portfolio'=>$portfolio])
                @endforeach
{{--                <div class="project-item item-shadow building">--}}
{{--                    <img alt="" class="img-responsive" src="images/projects/1-426x574.jpg">--}}
{{--                    <div class="project-hover">--}}
{{--                        <div class="project-hover-content">--}}
{{--                            <h3 class="project-title">Triangle<br>Concrete House<br>On Lake</h3>--}}
{{--                            <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--                <div class="project-item item-shadow building">--}}
{{--                    <img alt="" class="img-responsive" src="images/projects/2-426x574.jpg">--}}
{{--                    <div class="project-hover">--}}
{{--                        <div class="project-hover-content">--}}
{{--                            <h3 class="project-title">Ocean<br>Museum<br>Italy</h3>--}}
{{--                            <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--                <div class="project-item item-shadow building">--}}
{{--                    <img alt="" class="img-responsive" src="images/projects/3-426x574.jpg">--}}
{{--                    <div class="project-hover">--}}
{{--                        <div class="project-hover-content">--}}
{{--                            <h3 class="project-title">Milko<br>Co-Working<br>Building</h3>--}}
{{--                            <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>--}}
{{--                </div>--}}

            </div>
        </section>

        <!-- Section Clients -->

    @include('partials.feedback')



@endsection
