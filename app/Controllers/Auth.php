<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function index(){
		$mdata = [
			'title'     => 'Active Account - Satoshi Signal' ,
			'content'   => 'widget/auth/active_account_success',
			'extra'     => 'widget/js/_js_subcription',
		];            
		return view('widget/layout/wrapper', $mdata);
	}

	public function  login(){
        $mdata = [
            'title'     => 'Login - ' . NAMETITLE,
            'content'   => 'auth/login',
            'extra'     => 'auth/js/_js_login',
        ];

        return view('auth/layout/wrapper', $mdata);
	}
}