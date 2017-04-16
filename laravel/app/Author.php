<?php 
namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Author extends Model{
	//указываем таблицу
	protected $table = 'users';
	//указываем первичный ключ
	protected $primaryKey = 'user_id';


	
	public function index(){
		$per_page=10;
		$users= DB::table('users')
		->select('user_id','user_name','user_avatar','user_description')
		->paginate($per_page);
		return $users;
	}

	public function author($slug){
		$users= DB::table('users')
		->select('user_id','user_name','user_avatar','user_description')
		->where('user_name', $slug)
		->get();
		return $users;
	}




}