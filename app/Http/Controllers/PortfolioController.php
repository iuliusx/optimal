<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;


class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('index', ['portfolios'=>$portfolios])->with('categories', Category::all());
    }

    public function portfolio()
    {
        $portfolios = Portfolio::all();
        return view('portfolio_list', ['portfolios'=>$portfolios])->with('categories', Category::all());
    }
    public function portfolio_single($slug)
    {

        $portfolio = Portfolio::where('slug', '=', $slug)->firstOrFail();/*find($slug);*/
        return view('portfolio_single', ['portfolio'=>$portfolio]);
    }
    public function test()
    {
        $portfolios = Portfolio::all();
        return view('test', ['portfolios'=>$portfolios])->with('categories', Category::all());
    }
//    public function feedback()
//    {
//        $portfolios = Portfolio::all();
//        return view('index', ['portfolios'=>$portfolios])->with('categories', Category::all());
//    }
    public function contact()
    {
        $portfolios = Portfolio::all();
        return view('contact'/*, ['portfolios'=>$portfolios])->with('categories', Category::all()*/);
    }
//    public function about()
//    {
//        $portfolios = Portfolio::all();
//        return view('index', ['portfolios'=>$portfolios])->with('categories', Category::all());
//    }
}
