<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WelcomeModel;
use DB, Session;
class MyController extends Controller
{
    /**
     * Return view welcome
     */
    public function index(){

        return view('pages.layout_content.welcome');
    }

    /**
     * Return view about
     */
    public function about(){

        return view('pages.layout_content.about');
    }

    /**
     * Return view contact
     */
    public function contact(){

        return view('pages.layout_content.contact');
    }

    /**
     * Return view welcome
     * Get all Data from table in database
     */
    public function select(){
        $data = WelcomeModel::all();

        return view('pages.layout_content.welcome', [
            'data'=>$data
        ]);
    }

    /**
     * Return view validate
     */
    public function validateView(){

        return view('pages.layout_content.validate')
        ;
    }

    /**
     * Return view welcome
     * Get id input
     * Return validate for client
     */
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
     /**
     * Return view InsertData
     */
     public function insert(){

        return view('pages.layout_content.insertData');
    }
    /**
     * take request
     * Get data from database
     * use save()
     */
     public function add(Request $request){
      $welcome = new WelcomeModel;
      $welcome->Title= $request->Title;
      $welcome->Content= $request->Content;
      $welcome->save();
      echo "Insert Thành Công";
    }
    /**
     * set data with datatypes json
     */
    public function setSession(){
        Session::put('Title', 'News 5');
        Session::put('Content', 'Đây là nội dung');
        Session::flash('Flash', "SomeThing");
    }
    /**
     * get all data with datatypes json
     */
    public function getSession(){
       $data = Session::all();
    }
    /**
     * find id
     * use delete()
     */
    public function delete(Request $request){
        WelcomeModel::find($request->id)->delete();
        echo "Delete Thanh Cong";
     }

     /**
     * find id
     * set data for view
     */
     public function show($id) {
        $data = WelcomeModel::find($id);

        return view('pages.layout_content.updateData',['data'=> $data]);
     }

     /**
     * take request
     * find id
     * Get data from database
     * use save()
     */
     public function update(Request $request){
        $welcome  = WelcomeModel::find($request->id);
        $welcome->Title= $request->Title;
        $welcome->Content= $request->Content;
        $welcome->save();
        echo "Update Thành Công";
      }
      /**\
     * Get data from database
     * return data for view
     */
    public function table(){
        $data['data']=WelcomeModel::paginate(2);

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
