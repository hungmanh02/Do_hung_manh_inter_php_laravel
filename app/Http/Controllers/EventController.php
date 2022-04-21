<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index(){
        $data=DB::table('events')->get();
        return view('event',['data'=>$data]);
    }
    public function show_event($id){
        return view('event-detail');
    }
    public function AuthLogin(){
        $admin_id=Session::get('admin_id');
        if($admin_id){
           return Redirect::to('/dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_event(){
        $this->AuthLogin();
       
        return view('admin.events.addevent');
    }
    public function all_event(){
        $this->AuthLogin();
        $data_event=DB::table('events')->get();
       
        return view('admin.events.allevent',['data_event'=>$data_event]);
    }
    public function save_event(Request $request){
        $this->AuthLogin();
        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['date_start']=$request->date_start;
        $data['date_end']=$request->date_end;
        $get_image=$request->file('image');
        if($get_image){
            
            $path_image='public/images/events';
            $image_name=$get_image->getClientOriginalName();
            $path=$request->file('image')->storeAs($path_image,$image_name);
            $data['image']=$image_name;
            DB::table('events')->insert($data);
            Session::put('message','add event succes');
            return Redirect::to('all-event');
        }
        
        $data['image']='';
       
        DB::table('events')->insert($data);
        Session::put('message','thêm event thành công');
        return Redirect::to('all-event');
        
        
    }
    public function edit_event($id){
        $this->AuthLogin();
        $event_edit=DB::table('events')->where('id',$id)->first();
       
       
        return view('admin.events.editevent',['event_edit'=>$event_edit]);
    }
    public function update_event(Request $request, $id){
        $this->AuthLogin();
        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['date_start']=$request->date_start;
        $data['date_end']=$request->date_end;
        $get_image=$request->file('image');
        if($get_image){
            
            $path_image='public/images/events';
            $image_name=$get_image->getClientOriginalName();
            $path=$request->file('image')->storeAs($path_image,$image_name);
            $data['image']=$image_name;
            DB::table('events')->where('id',$id)->update($data);
            Session::put('message','add event succes');
            return Redirect::to('all-event');
        }
        
       
       
        DB::table('events')->where('id',$id)->update($data);
        Session::put('message','thêm event thành công');
        return Redirect::to('all-event');

    }
    public function delete_event($id){
        $this->AuthLogin();
        DB::table('events')->where('id',$id)->delete();
        Session::put('message','Xóa event thành công');
        return Redirect::to('all-event');
    }
    
}
