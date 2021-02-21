<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\welcomeModel;
use DB, Session;
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
    public function validateView(){
        return view('pages.layout_content.validate');
    }
    public function validatedata(Request $request){
        $request->validate([
            'Title'=>'required|min:5|max:50',
            'Content'=>'required|min:10|max:5000'
        ],[
            'Title.required'=>'Không được để trống Title',
            'Title.min'=>'Title không được nhỏ hơn 5 ký tự',
            'Title.max'=>'Title không được lớn hơn 50 ký tự',
            'Content.required'=>'Không được để trống Content',
            'Content.min'=>'Content không được nhỏ hơn 10 ký tự',
            'Content.max'=>'Content không được lớn hơn 5000 ký tự'
        ]);
        echo "Không có lỗi, validate thành công";
     }
     public function insert(){
        return view('pages.layout_content.insertData');
    }
     public function add(Request $request){
      $welcome = new welcomeModel;
      $welcome->Title= $request->Title;
      $welcome->Content= $request->Content;
      $welcome->save();
      echo "Insert Thành Công";
    }
    public function setSession(){
        Session::put('Title', 'News 5');
        Session::put('Content', 'Đây là nội dung');
        Session::flash('Flash', "SomeThing");
    }
    public function getSession(){
       $data = Session::all();
       dd($data);
    }
    //delete
    public function delete(Request $request){
        welcomeModelDB::find($request->id)->delete();
     }
     //update
     public function update(Request $request){
        $welcome = welcomeModelDB::find($request->id);
        $welcome->Title= $request->Title;
        $welcome->Content= $request->Content;
        $welcome->save();
        echo "Update Thành Công";
      }
    public function table(){
        $data['dbb']=welcomeModel::paginate(2);
        return view('pages.layout_content.table', $data);
    }
    //query builder
    public function getTitle(){
        $title = DB::table('welcome')->get();
        return view('pages.layout_content.welcomeQuery',[
            'title'=>$title
        ]);
    }
}
