<?php
namespace App\Controllers;

class User extends BaseController
{
	public function index(){
		$mdata = [
			'title'     => 'User - ' . NAMETITLE ,
			'content'   => 'user/index',
			'extra'     => 'user/js/_js_index',
		];            
		return view('user/layout/wrapper', $mdata);
	}
}