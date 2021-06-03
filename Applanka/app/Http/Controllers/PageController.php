<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/Calcutta');
        $hour = date('G');
       
        return view('pages.home', 
        ['company' => 'Awesomesolutions',
        'tagline'=>'Your Happiness Our Assets',
        'hour' => $hour]);
    
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function teams()
    {
        return view('pages.teams',['teammembers'=>100]);
    }
}
