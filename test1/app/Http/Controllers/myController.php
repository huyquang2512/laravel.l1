<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\welcomeModel;
class myController extends Controller
{
    public function index(){
        return view('pages.layout_content.welcome');
    }
    public function about(){
        return view('pages.layout_content.about');
    }
    public function contact(){
        return view('pages.layout_content.contact');
    }
    public function select(){
        $dbb = welcomeModel::all();
        return view('pages.layout_content.welcome', [
            'dbb'=>$dbb
        ]);
    }
}
