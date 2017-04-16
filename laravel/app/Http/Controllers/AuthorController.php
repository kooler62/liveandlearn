<?php

namespace App\Http\Controllers;

use DB;
use App\Categories;
use App\Page;
use App\Posts;
use App\Author;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthorController extends Controller{

	public function index(Categories $Cat, Author $Author,Posts $Posts,Page $Page, $slug=0) {

		if ( isset($slug) && !empty($slug) )  {
		//поле автора не пустое, ещем автора
			if (empty($Author->author($slug))) {
				abort(404);
			}else{
				//автор есть, выводим по нему посты
				return view('author',[
					'title'  =>'Автор: '.$slug,
					'categories' => $Cat->cats_for_header(),
					'handler'=>'Всі публікації '.$slug,
					'posts'=>$Posts->post_of_author($Author->author($slug)[0]->user_id),
					'pages' => $Page->footer_pages(),
				]);
			}
		}else{
			//автор не указан- возращаем список всех авторов
			return view('authors',[
					'title'  =>'Наші автори',
					'categories' => $Cat->cats_for_header(),
					'handler'=>'Наші автори:',
					'posts'=>$Author->index(),
					'pages' => $Page->footer_pages(),
				]);
		}
	}
}