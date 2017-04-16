<?php

namespace App\Http\Controllers;
use DB;
use App\Categories;
use App\Page;
use App\Posts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller{

   // посты на ссылке '/'
   public function index(Categories $Сat,Page $Page, Posts $Posts){
      return view('index_posts',[
         'categories' => $Сat->cats_for_header(),
         'pages' => $Page->footer_pages(),
         'posts' => $Posts->post_paginate(),
      ]);
   }

  // посты на ссылке /posts 
   public function posts(Categories $Сat,Page $Page, Posts $Posts){
      return view('posts',[
         'categories' => $Сat->cats_for_header(),
         'pages' => $Page->footer_pages(),
         'handler'=>'весь час',
         'posts' => $Posts->post_paginate(),
      ]);
   }

   // редирект с короткой ссылки
   public function short_url(Posts $Posts,$id){
       return redirect($Posts->short_url($id));
   }

   //одиночный пост
   public function post(Categories $Сat,Posts $Posts,Page $Page,$year,$month,$day,$slug){
      return view('post',[
         'categories' => $Сat->cats_for_header(),
         'pages' => $Page->footer_pages(),
         'post' => $Posts->post($slug),
         'post_prew_next'=>$Posts->post_prew_next($Posts->post($slug)[0]->post_id)
      ]);
   }

   //посты за выбранный день
   public function post_day(Categories $Сat,Page $Page,Posts $Posts,$year,$month,$day){
      return view('posts',[
         'categories' => $Сat->cats_for_header(),
         'handler'=>'день',
         'pages' => $Page->footer_pages(),
         'posts' => $Posts->post_of_day($year,$month,$day)
      ]);
   }

   //посты за выбранный месяц
   public function post_month(Categories $Сat,Page $Page,Posts $Posts,$year,$month){
      return view('posts',[
         'categories' => $Сat->cats_for_header(),
         'handler'=>'місяць',
         'pages' => $Page->footer_pages(),
         'content_layout' => 'posts_content',
         'posts' => $Posts->post_of_month($year,$month)
      ]);
   }

   //посты за выбранный год
   public function post_year(Categories $Сat,Page $Page,Posts $Posts,$year){
      return view('posts',[
         'categories' => $Сat->cats_for_header(),
         'handler'=>'рік',
         'pages' => $Page->footer_pages(),
         'content_layout' => 'posts_content',
         'posts' => $Posts->post_of_year($year)
      ]);
   }
}