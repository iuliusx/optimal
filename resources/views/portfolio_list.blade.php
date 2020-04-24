@extends('layouts.layout', ['title'=>"Portfolio Building Uk"])
@section('content')
    <main class="page-header">
        <div class="container"><h1>Our work speaks for itself</h1></div>
    </main>

    <div class="content">
        <div class="projects">
            <div class="container">
                <div class="filter-content-2">
                    <ul class="filter js-filter">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        @foreach($categories as $category)
                            @include('partials.portfolio_filter', ['category'=>$category])
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="grid-items js-isotope js-grid-items">

                    @foreach($portfolios as $portfolio)

                            @include('partials.portfolio_list', ['portfolio'=>$portfolio])

                    @endforeach
            </div>
        </div>
    </div>
@endsection
