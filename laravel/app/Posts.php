<?php 
namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;


class Posts extends Model{
	//указываем таблицу
	protected $table = 'posts';
	//указываем первичный ключ
	protected $primaryKey = 'post_id';
	
	public function post($slug){
		// метод поста
		//инкремент просмотров!
		$view=DB::table('posts')->where('post_altname', '=', "$slug")->increment('post_views');
		
		$post = DB::table('posts')
		->where('post_altname', '=', "$slug")
		->where('post_visibility', 1)
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->select('post_id','post_cat_id','post_visibility','post_altname','post_title','post_img','post_url','post_author','post_text',
			'post_views','date','user_name','user_avatar','cat_altname','cat_title','cat_url')
		->get();
		return $post;
	}

	public function post_paginate($per_page=10){
		$posts = DB::table('posts')
		->where('post_visibility', 1)
		->orderBy('date', 'desc')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->paginate($per_page);
		return $posts;
	}

    public function post_of_category($slug){
	    $per_page=10;
		$posts = DB::table('posts')
		->where('post_visibility', 1)
		->where('cat_altname', $slug)
		->orderBy('date', 'desc')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->select('post_altname','post_title','post_img','post_url','post_views','date','user_name','user_avatar','cat_altname','cat_title','cat_url','post_description','post_keywords','cat_img')
		->paginate($per_page);
		return $posts;
	}
	/*
	DB::table('table1')
  ->select('data.ID') // Add a select so only one column shows up.
  ->join('table2','table1.table2ID','=','table2.ID')
  ->join('thisTable', 'table2.thisTableID', '=', 'thisTable.ID')
  ->lists('ID'); // Now list that one column
  */
	public function post_of_day($year,$month,$day){
		$per_page=10;
		$posts = DB::table('posts')
		->select('post_title','post_url','post_img','post_description','post_views','date','cat_altname','cat_title','user_avatar','user_name')
		->where('cat_visibility', 1)
		->where('date', 'like', "$year-$month-$day %")
		->orderBy('date', 'desc')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->paginate($per_page);
		return $posts;
	}

	public function post_of_month($year,$month){
		$per_page=10;
		$posts = DB::table('posts')
		->select('post_title','post_url','post_img','post_description','post_views','date','cat_altname','cat_title','user_avatar','user_name')
		->where('cat_visibility', 1)
		->where('date', 'like', "$year-$month-%")
		->orderBy('date', 'desc')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->paginate($per_page);
		return $posts;
	}

	public function post_of_year($year){
		$per_page=10;
		$posts = DB::table('posts')
		->select('post_title','post_url','post_img','post_description','post_views','date','cat_altname','cat_title','user_avatar','user_name')
		->where('cat_visibility', 1)
		->where('date', 'like', "$year-%")
		->orderBy('date', 'desc')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->paginate($per_page);
		return $posts;
	}

	//проверить, используется ли єтот метод
    public function posts(){
		$per_page=10;
		$posts = DB::table('posts')
		->select('post_title','post_url','post_img','post_description','post_views','date','cat_altname','cat_title','user_avatar','user_name')
		->where('cat_visibility', 1)
		->where('date', 'like', "$year-%")
		->orderBy('date', 'desc')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->paginate($per_page);
		return $posts;
	}

	public function short_url($id)	{
		$post = DB::table('posts')
		->select('post_url')
		->where('post_id', '=', "$id")
		->get('post_url');
		return($post[0]->post_url);
	}

	public function most_view()	{
		$post = DB::table('posts')
		->select('post_id','post_title','post_url','post_views')	
		->orderBy('post_views', 'desc')
		->limit(5)
		->get('post_url');
		return($post);
	}


		public function randomost()	{
		//выводит пост с минимальным просмотром/еще какойто
		$post = DB::table('posts')
		->select('post_id','post_title','post_url','post_views')	
		->orderBy('post_views', 'desc')
		->limit(1)
		->get('post_url');
		return($rpost);
	}

	public function post_prew_next($post_id)	{
		// выводит данные о следующем и пред идущем посте
		//переработать под дату, которую можно брать из адреса
		$post_prew = DB::table('posts')
		->select('post_id','post_title','post_url')
		->where('post_id', '<', "$post_id")
		//->where('date', '<', "$date")
		->orderBy('post_id', 'desc')
		->where('post_visibility', 1)
		->limit(1)
		->get('post_id');

		$post_next = DB::table('posts')
		->select('post_title','post_url')
		->where('post_id', '>', "$post_id")
		//->where('date', '<', "$date")
		->where('post_visibility', 1)
		->limit(1)
		->get('post_id');

		$re=[$post_prew,$post_next];
		return($re);
	}

	public function post_of_author($slug)	{
		$per_page=10;
		$post = DB::table('posts')
		->select('post_id','post_title','post_url','post_altname','user_id','user_name','cat_title','cat_altname','post_img','user_avatar','user_name','post_views','post_description','date')	
		//->leftJoin('TABLE_B', 'TABLE_B.FIELD_B', '=', 'TABLE_A.FIELD_A')
		->leftJoin('users', 'users.id', '=', 'posts.post_author')
		->leftJoin('categories', 'categories.cat_id', '=', 'posts.post_cat_id')
		->orderBy('post_id', 'desc')
		->where('post_author', $slug)
		->where('post_visibility', 1)
		->paginate($per_page);
		return($post);
	}

}