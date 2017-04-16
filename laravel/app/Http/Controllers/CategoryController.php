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

class CategoryController extends Controller{

	public function index(Categories $Cat,Page $Page,Posts $Posts,$slug=0) {
		if ( isset($slug) && !empty($slug) )  {
			//указана категория
			return view('category',[
   				'categories' => $Cat->cats_for_header(),
   				'pages' => $Page->footer_pages(),
   				'handler' =>$Cat->select_cat($slug)[0]->cat_title,
   				'posts' => $Posts->post_of_category($slug)
   				]);
		
		}else{
			//категория не указана, выводим список всех категорий
			// зделаем запрос на категорию с картинкой и количеством постов внем
			return view('categories',[
   				'categories' => $Cat->cats_for_header(),
   				'pages' => $Page->footer_pages(),
   				'posts' => $Cat->cats_page(),
   				]);
		}
	}
}