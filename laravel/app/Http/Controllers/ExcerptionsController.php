<?php

namespace App\Http\Controllers;
// подключаем штуку для работы с базой
use DB;
// подключаем модель
use App\Categories;
use App\Page;
use App\Excerptions;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class ExcerptionsController extends Controller{

	public function index(Categories $cat,Page $pages,Excerptions $exe,$id=0){
		# обращаемся к моделе Category
		$categories=$cat->cats_for_header();
		# обращаемся к моделе Page
		$footer_pages=$pages->footer_pages();

		if ($id==0 || empty($id)) {
			//Нету номера выводим рандомную цытату  
			$ex_id=(mt_rand(1,366));
		}else{
			// выведем цытату с номером в заросе
			if ($id>366 || $id<=0 ) {
				return view('errors.404');
			}
	 		$ex_id=$id;
		}

		$ex=$exe->index($ex_id);

		return view('layouts.default',[
			'categories' => $categories,
			'pages' => $footer_pages,
			'ex'=>$ex,
			'content_layout'=>'ex_content'
			]);
	}

	public function ajax(Excerptions $excerptions_model){
		$id=(mt_rand(1,366));
		$ex=$excerptions_model->index($id);

		$do=[
			'id'=>$ex[0]->excerption_id,
			'author'=>$ex[0]->excerption_author,
			'text'=>$ex[0]->excerption_text
			];
		return $do;
	}

}