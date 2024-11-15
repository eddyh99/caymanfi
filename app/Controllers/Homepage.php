<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        $mdata = [
            'title'     => 'Homepage - ' . NAMETITLE,
            'content'   => 'homepage/index',
            'extra'     => 'homepage/js/_js_index',
        ];

        return view('homepage/layout/wrapper', $mdata);
    }


    public function about()
    {
        $mdata = [
            'title'     => 'About - ' . NAMETITLE,
            'content'   => 'homepage/about',
        ];

        return view('homepage/layout/wrapper', $mdata);
    }


    public function funds_reallocation()
    {
        $mdata = [
            'title'     => 'Funds Reallocation - ' . NAMETITLE,
            'content'   => 'homepage/services/fund',
        ];

        return view('homepage/layout/wrapper', $mdata);
    }


    public function investment($segment = null)
    {   

        $segment = base64_decode($segment);

        if($segment == null){
            $mdata = [
                'title'     => 'Investment - ' . NAMETITLE,
                'content'   => 'homepage/investment/investment',
                'map'       => 'general'
            ];
        }else if($segment == "fund_management"){
            $mdata = [
                'title'     => 'Investment Fund Management - ' . NAMETITLE,
                'content'   => 'homepage/investment/fund_management',
                'map'       => 'funds',
            ];
        }else if($segment == "bitcoin"){
            $mdata = [
                'title'     => 'Investment Bitcoin - ' . NAMETITLE,
                'content'   => 'homepage/investment/bitcoin',
                'map'       => 'bitcoin'
            ];
        }else if($segment == "hedge"){
            $mdata = [
                'title'     => 'Investment Hedge Funds - ' . NAMETITLE,
                'content'   => 'homepage/investment/hedge',
                'map'       => 'hedge'
            ];
        }

        return view('homepage/layout/wrapper', $mdata);
    }
}
