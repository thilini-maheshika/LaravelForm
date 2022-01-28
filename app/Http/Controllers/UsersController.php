<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    /*Public function indexfunc(){
        $name = "Laravel";
        return view("about", ["laravel" => $name]);
    }*/
    

    function load (Request $req){

        $req->validate([
            'username' => 'required | min:20',
            'name' => 'required',
            'password' => 'required | max:8',
            'email' => 'required'
            ]);
            
        return $req->input();
    }

    /*function data(){
        return User::all();
    } */       
        
    public function insertdata(Request $req){
   
            $user = new User;
            $user->username = $req->username;
            $user->name = $req->name;
            $user->password = $req->password;
            $user->email = $req->email;
            $user->image = $req->file('image')->store('public/image');
            $user->save();
            return redirect('adduser');
    }  

    public function getdata(){

        $data = User::all();
        return view('adduser', ['data' => $data]);

    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/');
    }

    public function edit($id){
        $data= User::find($id);
        return view('update',['update'=>$data]);
    }
      
    public function update(Request $req){
        $data = User::find($req->id);
        $data->username = $req->username;
        $data->name = $req->name;
        $data->password = $req->password;
        $data->email = $req->email;
        $data->save();
        return redirect('/');
        }
        
        /*function userLogin(Request $req){
            $data = $req->input();
            $req->session()->put('user',$data['user']);
            echo session('user');
        }*/
            
}
