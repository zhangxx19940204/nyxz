<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //首页
    public function index(Request $request){
        $index_news = DB::table('news')->limit(4)->orderBy('updated_at','desc')->orderBy('id','desc')->get();
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        return view('home.index',['news'=>$index_news,'page_info'=>(array)$request->get('pageInfo'),'links'=>$link_list]);
    }

    //新闻中心
    public function news(Request $request){
        $news = DB::table('news')->orderBy('updated_at','desc')->orderBy('id','desc')->simplePaginate(6);
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        return view('home.news',['news'=>$news,'page_info'=>(array)$request->get('pageInfo'),'links'=>$link_list]);
    }
    //新闻详情
    public function new_detail(Request $request,$id){
        $new_detail = DB::table('news')->where('id','=',$id)->first();
        $last_info  = DB::table('news')->where('id','<',$id)->orderBy('id','desc')->first();
        $page_info = ['page_title'=>$new_detail->title,'page_keywords'=>$new_detail->keywords,'page_description'=>$new_detail->summary];
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        return view('home.new_detail',['new_detail'=>$new_detail,'last_info'=>$last_info,'page_info'=>$page_info,'links'=>$link_list]);
    }
    //联系我们
    public function contacts(Request $request){
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        return view('home.contacts',['links'=>$link_list,'page_info'=>(array)$request->get('pageInfo')]);
    }

    //产品展示
    public function product(Request $request){
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        $product_list = DB::table('product')->orderBy('id','desc')->simplePaginate(6);
        return view('home.product',['product_list'=>$product_list,'links'=>$link_list,'page_info'=>(array)$request->get('pageInfo')]);
    }
    //店面展示
    public function store(Request $request){
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        $store_list = DB::table('store')->orderBy('id','desc')->simplePaginate(6);
        return view('home.store',['store_list'=>$store_list,'links'=>$link_list,'page_info'=>(array)$request->get('pageInfo')]);
    }

    //品牌优势
    public function brand(Request $request){
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        return view('home.brand',['links'=>$link_list,'page_info'=>(array)$request->get('pageInfo')]);
    }

    //招商合作
    public function join(Request $request){
        $link_list = DB::table('link')->orderBy('id','desc')->get();
        return view('home.join',['links'=>$link_list,'page_info'=>(array)$request->get('pageInfo')]);
    }


    // //关于我们
    // public function about(Request $request){
    //
    //     return view('home.about',['page_info'=>(array)$request->get('pageInfo')]);
    // }
    //
    //
    // //公司团队
    // public function team(Request $request){
    //     $team_introduce = [];
    //     return view('home.team',['team_introduce'=>$team_introduce,'page_info'=>(array)$request->get('pageInfo')]);
    // }
    // //留言板
    // public function message(Request $request){
    //     return view('home.message',['page_info'=>(array)$request->get('pageInfo')]);
    // }
    //
    // //手机端页面
    // public function mobile(Request $request){
    //     return view('home.mobile',['page_info'=>(array)$request->get('pageInfo')]);
    // }
}
