@extends('layouts.layout', ['title'=>$portfolio->title])


@section('content')
        <main class="page-header-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-6 col-md-offset-1 col-lg-offset-2">
                        <div class="title-info">{{$portfolio->category}}</div>
                        <h1 class="display-1">{{$portfolio->title}}</h1>
                    </div>
                </div>
            </div>
        </main>

        <div class="post-video">
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$portfolio->video}}{{--https://player.vimeo.com/video/34741214?color=ffffff&title=0&byline=0&portrait=0--}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="primary">
                <div class="container">
                    <article class="post">
{{--                        <div class="row">--}}
{{--                            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">--}}
{{--                                <div class="posted-on">--}}
{{--                                    <a class="url fn n" href="#">Admin</a>--}}
{{--                                    on Dec 15th, 2016--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="entry-content">
                            <div class="row">

{{--                                <div class="col-md-10 col-lg-7 col-md-offset-1 col-lg-offset-2">--}}
{{--                                    <div class="feedback"><p>Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</p>--}}
{{--                                    </div>--}}
{{--                                    <p class="blockquote-cite"><cite>Logan Cee</cite>Client</p>--}}

{{--                                    <div class="client-carousel-item">--}}
{{--                                        <img alt="" class="client-img" src="{{asset('images/clients/1-92x92.jpg')}}">--}}
{{--                                        <div class="client-box-single">--}}
{{--                                            <img alt="" class="image-quote" src="{{asset('images/image-icons/icon-quote.png')}}">--}}
{{--                                            <div class="client-title">--}}
{{--                                                <span class="client-name">Adam Stone</span>--}}
{{--                                                <span class="client-company">/ CEO at Google INC</span>--}}
{{--                                            </div>--}}
{{--                                            <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup. Sed elit quam, iaculis sed semper sit amet udin vitae nibh</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <h3 class="entry-description">{{$portfolio->excerpt}}</h3>--}}

{{--                                </div>--}}

                                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                                    <div class="feedback"><p>Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</p>
                                    </div>
                                    <p class="blockquote-cite"><cite>Logan Cee</cite>Client</p>
                                <p>{!!$portfolio->body!!}</p>

                                </div>
                            </div>
                            <div class="row-images row">
{{--                                @if()--}}
{{--                                @endif--}}
                                <div class="col-image col-sm-12"><img src="{{ Voyager::image( $portfolio->image_body1) }}"></div>{{--images/news/1-1170x572.jpg--}}
                                <div class="col-image col col-sm-6"><img src="{{ Voyager::image( $portfolio->image_body2) }}"></div>{{--images/news/1-570x572.jpg--}}
                                <div class="col-image col col-sm-6"><img src="{{ Voyager::image( $portfolio->image_body3) }}"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                                    <h4>Defaulting to Mindfulness</h4>
                                    <p>Everything along the way, to and from, fascinated her: every pebble, ant, stick, leaf, blade of grass, and crack in the sidewalk was something to be picked up, looked at, tasted, smelled, and shaken. Everything was interesting to her. She knew nothing. I knew everything…been there, done that. She was in the moment, I was in the past. She was mindful. I was mindless.</p>
                                </div>
                            </div>
                        </div>
                        <div class="entry-footer">
                            <div class="row">
                                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">

@include('partials.single-social')
                                </div>
                            </div>
                        </div>
                    </article>
{{--                    <section class="related-posts">--}}

{{--                    </section>--}}
                </div>
            </div>

        </div>
@endsection
