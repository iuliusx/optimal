<div class="project-item item-shadow {{$portfolio->category}}">
    <img alt="" class="img-responsive" src='{{Voyager::image($portfolio->thumbnail('cropped')) ?? asset('images/projects/4-426x574.jpg')}}'>

{{--                    <a href="{{ route('portfolio.show', ['id' => $portfolio->post_id])/*url("/post/{$portfolio->post_id}")*/ }}--}}


    <div class="project-hover">
        <div class="project-hover-content">
            <h3 class="project-title">{{$portfolio -> title}}</h3>
            <p class="project-description">{{$portfolio -> excerpt}}</p>
        </div>
    </div>
    <a href="/portfolio/{{$portfolio->slug /*route('portfolio.portfolio', $portfolio->slug)*/ }}" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
</div>
